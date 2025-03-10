<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\AccountType;
use Illuminate\Database\Seeder;

class S119_AccountTypeSeeder extends Seeder
{
    public static function run(): void
    {
        $accountTypes = [
            'Savings',
            'Current',
            'Fixed Deposit',
            'Recurring Deposit',
            'NRI Account',
            'Salary Account',
            'Demat Account',
            'Loan Account',
            'Overdraft Account',
            'Cash Credit Account'
        ];

        foreach ($accountTypes as $vname) {
            AccountType::create([
                'vname' => $vname,
                'active_id' => '1'
            ]);
        }
    }

}
