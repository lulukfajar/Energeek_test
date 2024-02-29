<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            ['name' => 'QA'],
            ['name' => 'Project Manager'],
            ['name' => 'Junior Programmer'],
            ['name' => 'Senior Programmer'],
            ['name' => 'Data Analyst'],
            ['name' => 'System Analyst'],
            ['name' => 'Data Engineer'],
            ['name' => 'Data Science'],
            ['name' => 'Fronted Developer'],
            ['name' => 'UI/UX Designer'],
            ['name' => 'Backend Developer'],
            ['name' => 'Web Developer'],
            ['name' => 'Driver'],
            ['name' => 'AI Engineer'],
            ['name' => 'Admin'],
            ['name' => 'Fullstack Developer'],
            ['name' => 'HR'],
            ['name' => 'Accounting'],
            ['name' => 'Manager'],
        ];

        $created_by = 1;

        $now = now();

        foreach ($jobs as $job) {
            $job['created_by'] = $created_by;
            $job['created_at'] = $now;
            DB::table('jobs')->insert($job);
        }
    }
}
