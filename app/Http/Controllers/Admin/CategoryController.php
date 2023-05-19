<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $category;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.Category.create');
    }


//This is create or index name ----- section

    public function create()
    {
        return view('back.Category.index',[
            'categorories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::CreateAllCategory($request);
        return back()->with('success','your category Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->category = Category::find($id);

        $this->category ->delete();
        return redirect()->back();
    }
}
