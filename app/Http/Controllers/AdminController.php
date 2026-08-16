<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\ImpactStat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // Render Login Page
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    // Process Login Request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Kombinasi email dan password salah.',
        ])->onlyInput('email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    // Render Admin Dashboard
    public function dashboard()
    {
        $contributors = Contributor::orderBy('order', 'asc')->get();
        $impactStats = ImpactStat::orderBy('order', 'asc')->get();

        return view('admin.dashboard', compact('contributors', 'impactStats'));
    }

    // Store New Contributor Image
    public function storeContributor(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'order' => 'nullable|integer|min:1',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'contributor-' . time() . '-' . Str::random(5) . '.' . $file->getClientOriginalExtension();
            
            // Move file to public/images/pemateri/
            $destinationPath = public_path('images/pemateri');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            $file->move($destinationPath, $filename);

            $maxOrder = Contributor::max('order') ?? 0;
            $order = $request->filled('order') ? (int) $request->input('order') : ($maxOrder + 1);

            Contributor::create([
                'image_path' => 'images/pemateri/' . $filename,
                'order' => $order,
            ]);
        }

        return back()->with('success', 'Gambar Kontributor berhasil ditambahkan!');
    }

    // Update Contributor Order
    public function updateContributorOrder(Request $request, Contributor $contributor)
    {
        $request->validate([
            'order' => 'required|integer|min:1',
        ]);

        $contributor->update([
            'order' => $request->input('order'),
        ]);

        return back()->with('success', 'Urutan kontributor berhasil diperbarui!');
    }

    // Delete Contributor
    public function deleteContributor(Contributor $contributor)
    {
        // Remove image file if exists
        $fullPath = public_path($contributor->image_path);
        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }

        $contributor->delete();

        return back()->with('success', 'Kontributor berhasil dihapus!');
    }

    // Store New Impact Stat
    public function storeImpactStat(Request $request)
    {
        $request->validate([
            'value' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'order' => 'nullable|integer|min:1',
        ]);

        $maxOrder = ImpactStat::max('order') ?? 0;
        $order = $request->filled('order') ? (int) $request->input('order') : ($maxOrder + 1);

        ImpactStat::create([
            'value' => $request->input('value'),
            'label' => $request->input('label'),
            'order' => $order,
        ]);

        return back()->with('success', 'Data Impact berhasil ditambahkan!');
    }

    // Update Impact Stat
    public function updateImpactStat(Request $request, ImpactStat $impactStat)
    {
        $request->validate([
            'value' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'order' => 'required|integer|min:1',
        ]);

        $impactStat->update([
            'value' => $request->input('value'),
            'label' => $request->input('label'),
            'order' => $request->input('order'),
        ]);

        return back()->with('success', 'Data Impact berhasil diperbarui!');
    }

    // Delete Impact Stat
    public function deleteImpactStat(ImpactStat $impactStat)
    {
        $impactStat->delete();

        return back()->with('success', 'Data Impact berhasil dihapus!');
    }
}
