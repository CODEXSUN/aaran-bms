<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\State;
use Illuminate\Database\Seeder;

class S102_StateSeeder extends Seeder
{
    public static function run(): void
    {
        $states = [
            ['-', '-'],
            ['Andhra Pradesh', '28'],
            ['Arunachal Pradesh', '12'],
            ['Assam', '18'],
            ['Bihar', '10'],
            ['Chhattisgarh', '22'],
            ['Goa', '30'],
            ['Gujarat', '24'],
            ['Haryana', '06'],
            ['Himachal Pradesh', '02'],
            ['Jharkhand', '20'],
            ['Karnataka', '29'],
            ['Kerala', '32'],
            ['Madhya Pradesh', '23'],
            ['Maharashtra', '27'],
            ['Manipur', '14'],
            ['Meghalaya', '17'],
            ['Mizoram', '15'],
            ['Nagaland', '13'],
            ['Odisha', '21'],
            ['Punjab', '03'],
            ['Rajasthan', '08'],
            ['Sikkim', '11'],
            ['Tamil Nadu', '33'],
            ['Telangana', '36'],
            ['Tripura', '16'],
            ['Uttar Pradesh', '09'],
            ['Uttarakhand', '05'],
            ['West Bengal', '19'],
            // Union Territories
            ['Andaman and Nicobar Islands', '35'],
            ['Chandigarh', '04'],
            ['Dadra and Nagar Haveli and Daman and Diu', '26'],
            ['Delhi', '07'],
            ['Jammu and Kashmir', '01'],
            ['Ladakh', '38'],
            ['Lakshadweep', '31'],
            ['Puducherry', '34']
        ];

        foreach ($states as [$vname, $state_code]) {
            State::create([
                'vname' => $vname,
                'state_code' => $state_code,
                'active_id' => '1'
            ]);
        }

    }
}
