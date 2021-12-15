<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use App\Models\keranjangs;
use App\Models\list_pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class pesananController extends Controller
{

    function setPesanan(Request $request){
        $email = 'dummy@gmail.com';
        $id_pesanan = $email.'-order-'.time();
        $menu = DB::table('menus')->get();
        pesanan::create([
            'email'=>$email,
            'id_pesanan' => $id_pesanan,
        ]);
        foreach ($menu as $menus){
        list_pesanan::create([
            'id_pesanan' => $id_pesanan,  
            'id_menu' => $menus->{'id_menu'}, 
        ]);
    }
    DB::table('keranjangs')->where('email', '=', $email)->delete();
    return redirect('keranjang');
    }
}
