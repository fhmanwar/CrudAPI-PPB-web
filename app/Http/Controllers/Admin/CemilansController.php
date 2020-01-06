<?php

namespace App\Http\Controllers\Admin;

use App\Cemilan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CemilansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cemilan::all();
        return view('admin.cemilan.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');

        if ($image) {
            //validasi
            $request->validate([
                'nm_brg' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            // $path = url('image/upload/cemilan/');
            $name = $image->getClientOriginalName();
            // $new_name = $path.'/'.$name;
            $image->move(public_path('image/upload/cemilan/'),$name);

            Cemilan::create([
                'nm_brg' => $request->nm_brg,
                'desc' => $request->desc,
                'price' => $request->price,
                'image' => $name
            ]);
            // $data = [
            //     'nm_brg' => $request->nm_brg,
            //     'desc' => $request->desc,
            //     'price' => $request->price,
            //     'image' => $name
            // ];
            // return $data;
        } else {
            Cemilan::create([
                'nm_brg' => $request->nm_brg,
                'desc' => $request->desc,
                'price' => $request->price,
            ]);
        }

        // return redirect('/cemilan')->with('status', 'Data Telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cemilan  $cemilan
     * @return \Illuminate\Http\Response
     */
    public function show(Cemilan $cemilan)
    {
        return $cemilan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cemilan  $cemilan
     * @return \Illuminate\Http\Response
     */
    public function edit(Cemilan $cemilan)
    {
        return view('cemilan.list', compact($cemilan));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cemilan  $cemilan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imageName = $request->hidden_image;
        $image = $request->file('image');

        if ($image != '') {
            $request->validate([
                'nm_brg' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            // $path = url('image/upload/cemilan/');
            $name = $image->getClientOriginalName();
            // $imageName = $path.'/'.$name;
            $image->move(public_path('image/upload/cemilan/'),$imageName);
        } else {
            $request->validate([
                'nm_brg' => 'required',
            ]);
        }

        Cemilan::whereId($id)
            ->update([
            'nm_brg' => $request->nm_brg,
            'desc' => $request->desc,
            'price' => $request->price,
            'image' => $name
        ]);

        return redirect('/cemilan')->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cemilan  $cemilan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cemilan $id)
    {
        Cemilan::destroy($id);
        return redirect('/cemilan')->with('status', 'Data berhasil dihapus!');
    }
}
