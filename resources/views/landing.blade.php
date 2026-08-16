<x-app-layout>
    <!-- Blueprint Hero Section with Integrated Navbar Header & Dynamic Kontributor Slider -->
    <x-hero :contributors="$contributors ?? null" />

    <!-- About / Siapa Kami Section -->
    <x-about />

    <!-- Impact & Stats Section (Dynamic 3 Stats) -->
    <x-impact :impactStats="$impactStats ?? null" />

    <!-- Full-Page Undangan Section (orang_pena_remove.png transparent background & quote on left) -->
    <x-undangan />

    <!-- Continuous Parallax Container (panjang.png background for Program, Mitra, Roadmap, & Kolaborasi) -->
    <x-panjang-container />

    <!-- CTA Section -->
    <x-cta />
</x-app-layout>
