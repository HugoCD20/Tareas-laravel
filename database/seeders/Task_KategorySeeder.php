<?php

namespace Database\Seeders;

use App\Models\task_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Task_KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task_category::create([

            'task_id' => 12,
            'category_id' => 1

        ]);
        Task_category::create([

            'task_id' => 13,
            'category_id' => 2

        ]);
        Task_category::create([

            'task_id' => 14,
            'category_id' => 3

        ]);
    }
}
