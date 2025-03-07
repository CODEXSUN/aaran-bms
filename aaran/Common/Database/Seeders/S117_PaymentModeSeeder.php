<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\PaymentMode;
use Illuminate\Database\Seeder;

class S117_PaymentModeSeeder extends Seeder
{
    public static function run(): void
    {
        PaymentMode::create([
            'vname' => 'Payment',
            'active_id' => '1'
        ]);

        PaymentMode::create([
            'vname' => 'Receipt',
            'active_id' => '1'
        ]);

    }
}
