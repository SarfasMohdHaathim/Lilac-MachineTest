<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $designations = [
            'Software Engineer',
            'Web Developer',
            'Graphic Designer',
            'Content Writer',
            'Marketing Manager',
        ];

        foreach ($designations as $designation) {
            DB::table('designations')->insert([
                'name' => $designation,
                'created_at' => now(),
            ]);
        }
        }
}
