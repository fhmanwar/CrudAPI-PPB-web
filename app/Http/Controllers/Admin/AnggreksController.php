<?php

namespace App\Http\Controllers\Admin;

use App\Anggrek;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggreksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Anggrek::all();
        return view('admin.anggrek.list', compact('data'));
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
                'name' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            $path = url('image/upload/anggrek/');
            $ext = $image->getClientOriginalExtension();
            $new_name = $path.'/'.time().'.'.$ext;
            $image->move(public_path('image/upload/anggrek/'),$new_name);

            // with fillable cara pertama
            Anggrek::create([
                'name' => $request->name,
                'desc' => $request->desc,
                'price' => $request->price,
                'image' => $new_name
            ]);
        } else {
            Anggrek::create([
                'name' => $request->name,
                'desc' => $request->desc,
                'price' => $request->price,
            ]);
        }

        // $ext = $image->getClientOriginalExtension();
        // $new_name = time().'.'.$ext;
        // $image->move(public_path('image/upload/anggrek'),$new_name);

        // // with fillable cara pertama
        // Anggrek::create([
        //     'name' => $request->name,
        //     'desc' => $request->desc,
        //     'price' => $request->price,
        //     'image' => $new_name
        // ]);

        return redirect('/anggrek')->with('status', 'Data Telah ditambahkan!');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggrek  $anggrek
     * @return \Illuminate\Http\Response
     */
    public function show(Anggrek $anggrek)
    {
        return $anggrek;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggrek  $anggrek
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggrek $anggrek)
    {
        return view('anggrek.list', compact($anggrek));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggrek  $anggrek
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Anggrek $anggrek)
    public function update(Request $request,$id)
    {
        $imageName = $request->hidden_image;
        $image = $request->file('image');

        if ($image != '') {
            $request->validate([
                'name' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            $path = url('image/upload/anggrek/');
            $ext = $image->getClientOriginalExtension();
            $imageName = $path.'/'.rand($min = 1,$max = 100).'.'.$ext;
            $image->move(public_path('image/upload/anggrek/'),$imageName);
        } else {
            $request->validate([
                'name' => 'required',
            ]);
        }

        // Anggrek::where('id', $anggrek->id)
        //     ->update([
        //         'name' => $request->name,
        //         'desc' => $request->desc,
        //         'price' => $request->price,
        //         'image' => $imageName
        //     ]);

        Anggrek::whereId($id)
            ->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'image' => $imageName
        ]);

        return redirect('/anggrek')->with('status', 'Data berhasil diupdate');
        // return $imageName;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggrek  $anggrek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = Anggrek::findOrFall($id);
        Anggrek::destroy($id);
        return redirect('/anggrek')->with('status', 'Data berhasil dihapus!');
    }
}
