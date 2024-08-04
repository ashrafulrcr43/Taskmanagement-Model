<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
   
   public function index(){
    //    return Task::all();
    //    return Task::find(8);
    // return Task::find(8);
    //    return Task::where('status','completed')->count();
   }
    public function doSomething(){
        Task::create([
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'due_date' => now()->addDays(7),
        ]);
        return 'Done';
    }
}
