<?php

namespace Database\Seeders;

use App\Models\Coupons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coupons = [
            [
                'store' => 'Amazon',
                'code' => 'AMAZON10',
                'link' => 'https://www.amazon.com/',
                'value' => 10,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON20',
                'link' => 'https://www.amazon.com/',
                'value' => 20,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON30',
                'link' => 'https://www.amazon.com/',
                'value' => 30,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON40',
                'link' => 'https://www.amazon.com/',
                'value' => 40,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON50',
                'link' => 'https://www.amazon.com/',
                'value' => 50,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON60',
                'link' => 'https://www.amazon.com/',
                'value' => 60,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON70',
                'link' => 'https://www.amazon.com/',
                'value' => 70,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON80',
                'link' => 'https://www.amazon.com/',
                'value' => 80,
                'expiration_date' => '2024-11-14',
            ],
            [
                'store' => 'Amazon',
                'code' => 'AMAZON90',
                'link' => 'https://www.amazon.com/',
                'value' => 90,
                'expiration_date' => '2024-11-14',
            ],
        ];

        foreach ($coupons as $coupon) {
            Coupons::create($coupon);
        }
        //
    }
}
