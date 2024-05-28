<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::latest()->paginate(5);
        return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:5',
        ]);

        $category = new Category();
        $category->nama = $request->nama;
        // upload image
        $category->save();
        return redirect()->route('category.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|min:5',
        ]);

        $category = Category::findOrFail($id);
        $category->nama = $request->nama;
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
