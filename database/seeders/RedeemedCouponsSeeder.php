<?php

namespace Database\Seeders;

use App\Models\RedeemedCoupons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RedeemedCouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $coupons = [
            [
                'login_id' => 1,
                'coupon_id' => 1,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 2,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 3,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 4,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 5,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 6,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 7,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 8,
            ],
            [
                'login_id' => 1,
                'coupon_id' => 9,
            ]

        ];

        foreach ($coupons as $coupon) {
            RedeemedCoupons::create($coupon);
        }
        //
    }
}
