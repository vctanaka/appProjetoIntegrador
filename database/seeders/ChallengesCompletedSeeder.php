<?php

namespace Database\Seeders;

use App\Models\Challenges;
use App\Models\CompletedChallenges;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChallengesCompletedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $challenges = [
            [
                'login_id' => 1,
                'challenge_id' => 1,
            ],
            [
                'login_id' => 1,
                'challenge_id' => 2,
            ],
            [
                'login_id' => 1,
                'challenge_id' => 3,
            ],
            [
                'login_id' => 1,
                'challenge_id' => 4,
            ],
            [
                'login_id' => 1,
                'challenge_id' => 5,
            ],
            [
                'login_id' => 1,
                'challenge_id' => 6,
            ],
            [
                'login_id' => 1,
                'challenge_id' => 7,
            ],
            [
                'login_id' => 1,
                'challenge_id' => 8,
            ],
        ];


        foreach ($challenges as $challenge) {
            CompletedChallenges::create($challenge);
        }
        //
    }
}
