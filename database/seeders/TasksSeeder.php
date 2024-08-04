<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::truncate();
        for($i=0; $i<10;$i++){
            Task::create([
                'title' => fake()->sentence(),
                'description' => fake()->paragraph(),
                'due_date' => now()->addDays(7),
            ]);
        }
    }
}
