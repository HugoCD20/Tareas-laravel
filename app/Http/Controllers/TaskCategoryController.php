<?php

namespace App\Http\Controllers;

use App\Models\task_category;
use Illuminate\Http\Request;

class TaskCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=task_category::with('task','category')->get();

        return view('dashboard', compact('tasks'));
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
    public function store($id, $category_id)
    {
        // Inserta en la base de datos
        task_category::create([
            'task_id' => $id,
            'category_id' => $category_id,
        ]);

        return redirect()->route('taskcategory.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task_category $task_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task_category $task_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task_category $task_category)
    {
        //
    }
}
