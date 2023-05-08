<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'name' => 'Anesthetics'
            ],
            [
                'name' => 'Breast Screening'
            ],
            [
                'name' => 'Ear, nose and throat (ENT)'
            ],
            [
                'name' => 'Elderly Services'
            ],
            [
                'name' => 'Gastroenterology'
            ],
            [
                'name' => 'General Surgery'
            ],
            [
                'name' => 'Gynecology'
            ],
            [
                'name' => 'Neonatal Unit'
            ],
            [
                'name' => 'Physiotherapy'
            ]
        ]);
    }
}
