<?php

namespace App\Http\Controllers\Admin;

use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use App\Order;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class OrdersController extends Controller
{
    public function index()
    {
        $data = DB::table('orders')
                ->leftJoin('users','users.id', '=', 'orders.id_user')
                ->leftJoin('penjualans','penjualans.id_order', '=', 'orders.id')
                ->leftJoin('anggreks','anggreks.id', '=', 'penjualans.id_anggrek')
                ->where('users.akses','=','user')
                ->get();
        // return $data;

        return view('admin.order.list', compact('data'));
    }

    public function downloadPDF($id) {
        $show = Order::find($id);
        $pdf = PDF::loadView('pdf', compact('show'));

        return $pdf->download('disney.pdf');
    }

    public function orderGlobaltoPDF()
    {
        $data = DB::table('orders')
                ->leftJoin('penjualans','penjualans.id_order', '=', 'orders.id')
                ->leftJoin('users','users.id', '=', 'orders.id_user')
                ->leftJoin('anggreks','anggreks.id', '=', 'penjualans.id_anggrek')
                ->where('users.akses','=','user')
                ->get();

    	$pdf = PDF::loadview('admin.order.pdf',compact('data'));
        // return $pdf->download('laporan-order-global.pdf');
        return $pdf->stream();
    }

    public function orderGlobaltoXls()
    {
        return Excel::download(new OrderExport, 'Penjualan_Global.xlsx');
    }
}
