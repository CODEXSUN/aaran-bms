<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\GstPercent;
use Illuminate\Database\Seeder;

class S115_GstPercentSeeder extends Seeder
{
    public static function run(): void
    {
        $gstRates = [
            '0' => '0%',
            '5' => '5%',
            '12' => '12%',
            '18' => '18%',
            '28' => '28%'
        ];

        foreach ($gstRates as $vname => $desc) {
            GstPercent::create([
                'vname' => $vname,
                'desc' => $desc,
                'active_id' => '1'
            ]);
        }
    }
}

