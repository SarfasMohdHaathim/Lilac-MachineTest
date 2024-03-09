<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $departments = [
            'Information Technology',
            'Marketing & Sales',
            'Human Resources',
            'Design & Creative',
            'Finance & Accounting',
        ];

        foreach ($departments as $department) {
            DB::table('departments')->insert([
                'name' => $department,
                'created_at' => now(),
            ]);
        }
    }
}
