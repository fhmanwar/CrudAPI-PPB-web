<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResouce;
use App\Order;
use App\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class OrdersApiController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Order::all();
        $data = DB::table('orders')
                ->rightJoin('users','users.id', '=', 'orders.id_user')
                ->rightJoin('penjualans','penjualans.id_order', '=', 'orders.id')
                ->rightJoin('anggreks','anggreks.id', '=', 'penjualans.id_anggrek')
                ->where('users.akses','=','user')
                ->get();
        return $data;
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
        $request->validate([
            'total' => 'required',
            'bayar' => 'required',
        ]);

        // $data = Order::Create([
        //     'id_user' => $request->id_user,
        //     'total' => $request->total,
        //     'bayar' => $request->bayar,
        //     'kembalian' => $request->kembalian,
        // ]);
        // $data_jual = Penjualan::forceCreate([
        //     'id_order' => Input::getid('id'),
        //     'id_anggrek' => '12',
        //     'qty' => '3',
        //     'subtotal' => '200000',
        // ]);
        // return response()->json($data);
        // return new OrderResouce([$data, $data_jual]);
        // return new OrderResouce($data);

        $order = new Order();
        $order->id_user = $request->id_user;
        $order->total = $request->total;
        $order->bayar = $request->bayar;
        $order->kembalian = $request->kembalian;
        $order->save();

        $tn_order = new Penjualan();
        $tn_order->id_order = $order->id;
        $tn_order->id_anggrek =  '12';  // uses the previously save id
        $tn_order->qty = '3';
        $tn_order->subtotal = '200000';
        $tn_order->save();

        return response()->json([$order,$tn_order]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
