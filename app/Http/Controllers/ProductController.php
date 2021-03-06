<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        $data = array('title' => 'Produk');
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('img', 'public');
        }
        $request->validate([
            'id' => 'required',
            'foto' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        Product::create([
            'id' => $request->id,
            'foto' => $request->foto,
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('products.index')
        ->with('successs', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return view('product.detail', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'foto' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        Product::find($id)->update($request->all());

        return redirect()->route('products.index')
        ->with('successs', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')
            -> with('success', 'Data Berhasil Dihapus');
    }

    public function search (Request $request)
    {
        $search = $request->search;
        $products = Product::where('nama', 'like', "%" . $search . "%")->paginate(5);
        return view('product.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
