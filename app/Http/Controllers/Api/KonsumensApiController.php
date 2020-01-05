<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsumensApiController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getKonsumen()
    {
        $data = DB::table('users')
                ->where('akses', 'user')
                ->whereNull('deleted_at')
                ->get();
        return $data;
    }

    // public function login(){
    //     $data = Auth::attempt(['email' => request('email'), 'password' => request('password')]);
    //     if ($data) {
    //         $konsumen = Auth::user();
    //         $suc
    //     } else {
    //         # code...
    //     }

    // }
}
