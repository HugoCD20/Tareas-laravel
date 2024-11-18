<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\task_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=task_category::with('task','category')->get();

        return view('registro',compact('tasks'));
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
        $request->validate([
            'title' =>'required|string|max:255',
            'description'=>'required|string|max:255',
            'due_date'=>'required|date'
        ]);

        $data=[
            'title' =>$request->title,
            'description'=>$request->description,
            'due_date'=>$request->due_date,
            'user_id'=>Auth()->user()->id
        ];

        task::create($data);
        $task=task::where('title',$request->title)
            ->where('description',$request->description)
            ->where('due_date',$request->due_date)->first();


        return redirect()->route('taskcategory.store.get', [
            'id' => $task->id,
            'category_id' => $request->category,
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task=task::with('user')->findOrFail($id);

        return view('verTarea',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $task=task::findOrFail($id);
        if($task->status == "en proceso"){
            $task->update([
                'status' => 'finalizado'
            ]);
        }else{
            $task->update([
                'status' => 'en proceso'
            ]);
        }
        return redirect()->route('tarea.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
    }
}
