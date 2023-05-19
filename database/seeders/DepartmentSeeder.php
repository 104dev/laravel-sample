<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['name' => '営業'],
            ['name' => '情報システム'],
            ['name' => '経理'],
            ['name' => '総務'],
            ['name' => '法務'],
            ['name' => '人事'],
        ];

        Department::insert($departments);
    }
}
