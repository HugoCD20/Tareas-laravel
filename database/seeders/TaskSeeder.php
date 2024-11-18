<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Revisar correos',
            'description' => 'Revisar los correos importantes.',
            'status' => 'pendiente',
            'user_id' => 1,
            'due_date' => '2024-11-30',
        ]);
        Task::create([
            'title' => 'Terminar proyecto',
            'description' => 'Completar el proyecto antes del fin de semana.',
            'status' => 'en progreso',
            'user_id' => 2,
            'due_date' => '2024-11-25',
        ]);
        Task::create([
            'title' => 'Estudiar Laravel',
            'description' => 'Completar el proyecto antes del fin de semana.',
            'status' => 'en progreso',
            'user_id' => 2,
            'due_date' => '2024-11-25',
        ]);
    }
}
