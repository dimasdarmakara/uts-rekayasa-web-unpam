<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('pelanggan.page.home', ['title' => 'Home']);
    }

    public function shop()
    {
        $produks = DB::table('produks')->get(); 
        return view('pelanggan.page.shop', ['title' => 'Shop', 'produks' => $produks]);
    }

    public function transaksi($id)
    {
        $produk = DB::table('produks')->where('id', $id)->first();
        
        
        if (!$produk) {
            abort(404);
        }

        return view('pelanggan.page.transaksi', ['title' => 'Transaksi', 'produk' => $produk]);
    }

    public function contact()
    {
        return view('pelanggan.page.contact', ['title' => 'Kontak']);
    }
}
