<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Product::all();
        // dump($barang); or below
        // dd($barang); //dump and die
        return view('admin.barang.list', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show view create
        // return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'kd_brg' => 'required',
            'nm_brg' => 'required',
        ]);

        // //without fillable in model
        // $brg = new Product;
        // $brg->kd_brg = $request->kd_brg;
        // $brg->nm_brg = $request->nm_brg;
        // $brg->satuan = $request->satuan; //dan seterusnya
        // $brg->save();

        // // with fillable cara pertama
        // Product::create([
        //     'kd_brg' => $request->kd_brg,
        //     'nm_brg' => $request->nm_brg,
        //     'satuan' => $request->satuan,
        // ]);

        // with fillable cara kedua
        Product::create($request->all());

        return redirect('/barang')->with('status', 'Data Telah ditambahkan!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('barang.show', compact($product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //validasi
        $request->validate([
            'kd_brg' => 'required',
            'nm_brg' => 'required',
        ]);
        Product::where('id', $product->id)
            ->update([
                'kd_brg' => $request->kd_brg,
                'nm_brg' => $request->nm_brg,
                'satuan' => $request->satuan,
                'harga' => $request->harga,
                'harga_beli' => $request->harga_beli,
                'stok' => $request->stok,
                'stok_min' => $request->stok_min
            ]);

        return redirect('/barang')->with('status', 'Data berhasil diupdate');
        // return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/barang')->with('status', 'Data berhasil dihapus!');

        // return $product;
    }
}
