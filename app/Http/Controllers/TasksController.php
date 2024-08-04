<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    //     $status = $request->query('status');
    //     if(!$status){
    //         $task = Task::all();
    //     } else if($status == 'completed'){
    //         $task = Task::where('status', 'completed')->get();
    //     } else if($status == 'pending'){
    //         $task = Task::where('status', 'pending')->get();
    //     } else {
    //         $task = Task::all();
    //     }
    //    return $task;

    $tasks = Task::when($request ->status,function($query, $status){
         $query ->where('status', $status);
    })->get();
    // return $task;
    // $tasks = Task::all();
    return view('tasks.index',['tasks'=>$tasks,'showToolbar'=>true]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task )
    {
        return view('tasks.index',['tasks'=>[$task],'showToolbar'=>false]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // dd($request->all());
        task::where('id', $request->id)->update([
            'status' => $request->status
           
        ]);

        // $task->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
