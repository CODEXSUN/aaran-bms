<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\Unit;
use Illuminate\Database\Seeder;

class S106_UnitSeeder extends Seeder
{
    public static function run(): void
    {
        $units = [
            ['-', '-'],
            ['KGS', 'Kilogram'],
            ['GMS', 'Gram'],
            ['MG', 'Milligram'],
            ['TON', 'Metric Ton'],
            ['LBS', 'Pound'],
            ['OZ', 'Ounce'],
            ['LTR', 'Litre'],
            ['ML', 'Millilitre'],
            ['GAL', 'Gallon'],
            ['MTR', 'Meter'],
            ['CM', 'Centimeter'],
            ['MM', 'Millimeter'],
            ['FT', 'Foot'],
            ['IN', 'Inch'],
            ['YD', 'Yard'],
            ['SQM', 'Square Meter'],
            ['SQFT', 'Square Foot'],
            ['CBM', 'Cubic Meter'],
            ['CBFT', 'Cubic Foot'],
            ['DOZ', 'Dozen'],
            ['PCS', 'Pieces'],
            ['PKT', 'Packet'],
            ['SET', 'Set'],
            ['BOX', 'Box'],
            ['ROLL', 'Roll'],
            ['BAG', 'Bag'],
            ['PAIR', 'Pair'],
            ['BUNDLE', 'Bundle'],
            ['CONE', 'Cone'],
            ['SPOOL', 'Spool'],
            ['SHEET', 'Sheet'],
            ['TUBE', 'Tube'],
            ['CAN', 'Can'],
        ];

        foreach ($units as [$vname, $description]) {
            Unit::create([
                'vname' => $vname,
                'description' => $description,
                'active_id' => '1'
            ]);
        }
    }

}
