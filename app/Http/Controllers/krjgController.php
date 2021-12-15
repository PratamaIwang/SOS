<?php

namespace App\Http\Controllers;
use App\Models\keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class krjgController extends Controller
{
    function getCart(){
        $cart = DB::table('keranjangs')
        ->select('keranjangs.id_menu','menus.nama_menu','menus.harga','menus.foto_menu','menus.kategori')
        ->join('menus','menus.id_menu','=','keranjangs.id_menu')
        ->get();


        return view('keranjang',['cart'=>$cart]);
    }
}
