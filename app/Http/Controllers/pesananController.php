<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use App\Models\keranjangs;
use App\Models\Menu;
use App\Models\list_pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class pesananController extends Controller
{

    function setPesanan(Request $request){
        $email = 'dummy@gmail.com';
        $id_pesanan = $email.'-order-'.time();
        $cart = DB::table('keranjangs')
        ->select('keranjangs.id_menu','menus.nama_menu','menus.harga','menus.foto_menu','menus.kategori')
        ->join('menus','menus.id_menu','=','keranjangs.id_menu')
        ->get();
        $totalHarga=0;
        
        foreach ($cart as $carts){
        $totalHarga += $carts->{'harga'};
        list_pesanan::create([
            'id_pesanan' => $id_pesanan,  
            'id_menu' => $carts->{'id_menu'}, 
        ]);
        }
    pesanan::create([
        'email'=>$email,
        'id_pesanan' => $id_pesanan,
        'total_harga' => $totalHarga,
    ]);
    DB::table('keranjangs')->where('email', '=', $email)->delete();
    return redirect('keranjang');
    }


    function getPesanan(){
        $order = DB::table('pesanans')->get();
        return view('pesanan',['order' => $order]);
    }

    function getOrderList(Request $request){
        $id_pesanan = $request['idPesanan'];
        $listOrder = DB::table('pesanans')        
        ->select('pesanans.id_pesanan','list_pesanans.id_menu','menus.nama_menu','menus.harga','menus.foto_menu','menus.kategori')
        ->join('list_pesanans','list_pesanans.id_pesanan','=','pesanans.id_pesanan')
        ->join('menus','menus.id_menu','=','list_pesanans.id_menu')
        ->where('list_pesanans.id_pesanan', $id_pesanan)
        ->get();


        return view('listPesanan',['list'=>$listOrder]);
    }
}
