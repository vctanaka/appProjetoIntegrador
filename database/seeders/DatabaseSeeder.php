<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TokenSeeder::class,
            MissionsSeeder::class,
            ChallengesSeeder::class,
            LoginSeeder::class,
            MissionsCompletedSeeder::class,
            ChallengesCompletedSeeder::class,
            CouponsSeeder::class,
            RedeemedCouponsSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
