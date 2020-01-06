<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KonsumenResource;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = auth()->attempt($request->only('email','password'));
        if ($data) {
            $currentUser = auth()->user();
            return (new KonsumenResource($currentUser))->additional([
                'meta' => [
                    'token' => $currentUser->api_token,
                ],
            ]);
        } else {
            return response()->json([
                'error' => 'not Found, you must register',
            ]);
        }

        return response()->json([
            'error' => 'your credential not match',
        ],404);

    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = User::forceCreate([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'akses' => 'user',
            'api_token' => Str::random(80),
        ]);
        // return response()->json($data);
        return (new KonsumenResource($data))->additional([
            'meta' => [
                'token' => $data->api_token,
            ],
        ]);
    }

    public function me()
    {
        $data = auth()->user();
        return new KonsumenResource($data);
    }

}
