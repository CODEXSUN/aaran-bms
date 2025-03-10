<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\Colour;
use Illuminate\Database\Seeder;

class S108_ColourSeeder extends Seeder
{
    public static function run(): void
    {
        $colors = [
            'Black', 'White', 'Red', 'Blue', 'Green', 'Yellow', 'Pink', 'Purple', 'Orange', 'Brown', 'Grey',
            'Maroon', 'Navy Blue', 'Sky Blue', 'Dark Green', 'Olive Green', 'Lime Green', 'Beige', 'Cream', 'Lavender',
            'Magenta', 'Turquoise', 'Teal', 'Burgundy', 'Mustard', 'Peach', 'Coral', 'Silver', 'Gold', 'Khaki',
            'Ivory', 'Charcoal', 'Aqua', 'Mint Green', 'Cyan', 'Neon Green', 'Neon Pink', 'Neon Yellow'
        ];

        foreach ($colors as $color) {
            Colour::create([
                'vname' => $color,
                'active_id' => '1'
            ]);
        }
    }
}
