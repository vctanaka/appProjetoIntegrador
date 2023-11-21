<?php

namespace Database\Seeders;

use App\Models\CompletedMissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MissionsCompletedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $missions = [
            [
                'login_id' => 1,
                'mission_id' => 1,
            ],
            [
                'login_id' => 1,
                'mission_id' => 2,
            ],
            [
                'login_id' => 1,
                'mission_id' => 3,
            ],
            [
                'login_id' => 1,
                'mission_id' => 4,
            ],
            [
                'login_id' => 1,
                'mission_id' => 5,
            ],
            [
                'login_id' => 1,
                'mission_id' => 6,
            ],
            [
                'login_id' => 1,
                'mission_id' => 7,
            ],
            [
                'login_id' => 1,
                'mission_id' => 8,
            ],
        ];


        foreach ($missions as $mission) {
            CompletedMissions::create($mission);
        }
        //
    }
}
