<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
                ->where('akses', 'user')
                ->whereNull('deleted_at')
                ->get();
        return view('admin.konsumen.list', compact('data'));
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
        //validasi
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        Konsumen::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => Hash::make($request->password),
            'password' => bcrypt($request->password),
            'akses' => $request->akses,
        ]);
        return redirect('/konsumen')->with('status', 'Data Telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function show(Konsumen $konsumen)
    {
        return $konsumen;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsumen $konsumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        if (!empty($request->password)) {
            Konsumen::whereId($id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'akses' => $request->akses,
                ]);
        } else {
            Konsumen::whereId($id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'akses' => $request->akses,
                ]);
        }

        return redirect('/konsumen')->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Konsumen::destroy($id);
        // return redirect()->route('admin.konsumen')->with('status', 'Data berhasil dihapus!');
        return redirect('/konsumen')->with('status', 'Data berhasil dihapus!');
    }
}
