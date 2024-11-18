<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias=categories::all();
        if($categorias->isEmpty()){
            return redirect(route('category.create'));
        }
        return view('registrarTarea',compact('categorias'));
    }

    public function create()
    {
        $category1=[
            'name'=>'Escolar',
            'description'=>'Tareas con un ambito escolar'
        ];

        categories::create($category1);

        $category2=[
            'name'=>'Trabajo',
            'description'=>'Tareas en el ambito Laboral'
        ];
        categories::create($category2);
        $category3=[
            'name'=>'Deportiva',
            'description'=>'Tareas para un deportiva'
        ];
        categories::create($category3);

        return redirect(route('category.index'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories)
    {
        //
    }
}
