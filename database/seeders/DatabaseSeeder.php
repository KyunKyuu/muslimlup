<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contributor;
use App\Models\ImpactStat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Admin User
        User::updateOrCreate(
            ['email' => 'admin@muslimlup.org'],
            [
                'name' => 'Admin MLUP',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Seed 27 Default Contributors
        for ($i = 1; $i <= 27; $i++) {
            Contributor::updateOrCreate(
                ['image_path' => 'images/pemateri/contributor-' . $i . '.jpg'],
                ['order' => $i]
            );
        }

        // 3. Seed 3 Default Impact Stats
        $defaultStats = [
            [
                'value' => 'Rp 34,2 jt',
                'label' => 'Dana ZIS tersalurkan — Ramadhan 1447 H',
                'order' => 1,
            ],
            [
                'value' => '56 + 4',
                'label' => 'Domba & sapi disembelih dan dibagikan — Idul Adha 1447 H',
                'order' => 2,
            ],
            [
                'value' => '100%',
                'label' => 'Volunteer-driven — semua bergerak sukarela',
                'order' => 3,
            ],
        ];

        foreach ($defaultStats as $stat) {
            ImpactStat::updateOrCreate(
                ['order' => $stat['order']],
                [
                    'value' => $stat['value'],
                    'label' => $stat['label'],
                ]
            );
        }
    }
}
