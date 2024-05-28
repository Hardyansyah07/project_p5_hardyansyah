<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{

    public function index()
    {
        $artikel = artikel::with('category')->latest()->paginate(5);
        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        $artikel = Category::all();
        return view('artikel.create', compact("artikel"));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'judul' => 'required|min:5',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'category_id' => 'required',
        ]);

        $artikel = new artikel();
        $artikel->judul = $request->judul;
        $artikel->content = $request->content;
        $artikel->category_id = $request->category_id;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/artikels', $image->hashName());
        $artikel->image = $image->hashName();
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    public function show($id)
    {
        $artikel = artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|min:5',
            'content' => 'required|min:5',
            'category_id' => 'required',
        ]);

        $artikel = artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->content = $request->content;
        $artikel->category_id = $request->category_id;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/artikels', $image->hashName());
        //delete old image
        Storage::delete('public/artikels/' . $artikel->image);

        $artikel->image = $image->hashName();
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        Storage::delete('public/artikels/' . $artikel->image);
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
