<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'Programming'],
            ['name' => 'Communication'],
            ['name' => 'Problem Solving'],
            ['name' => 'Teamwork'],
            ['name' => 'Leadership'],
            ['name' => 'PHP'],
            ['name' => 'Java Script'],
            ['name' => 'Microsoft Office'],
            ['name' => 'Project Management'],
            ['name' => 'Sql Programming'],
            ['name' => 'Laravel'],
            ['name' => 'Css'],
            ['name' => 'Adaptive'],
            ['name' => 'Linux'],
            ['name' => 'Mysql'],
            ['name' => 'Minitab'],
            ['name' => 'Tableau'],
            ['name' => 'Python'],
            ['name' => 'Mongodb'],
            ['name' => 'Git'],
        ];

        $created_by = 1;

        $now = now();

        foreach ($skills as $skill) {
            $skill['created_by'] = $created_by;
            $skill['created_at'] = $now;
            DB::table('skills')->insert($skill);
        }
    }
}
