<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index(Request $request)
    {
        // $items = Item::all();
        // return view('items.index', compact('items'));
        $items = Item::when($request->input('search'), function ($query) use ($request) {

            $query->where('name', 'like', "%{$request->input('search')}%")
            ->orWhere('category', 'like', "%{$request->input('search')}%");
        })->get();


        // Kirim data items ke tampilan

        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'unit' => 'required',
            'qty' => 'required|integer',
    ]);

        Item::create($request->all());
        return redirect()->route('items.index')->with('Success', 'Berhasil menambahkan.');
    }

    public function edit(Item $item) {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item) {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'unit' => 'required',
            'qty' => 'required|integer',
    ]);

        $item->update($request->all());
        return redirect()->route('items.index')->with('Success', 'Berhasil mengubah');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('Success', 'Berhasil menghapus');
    }
}
