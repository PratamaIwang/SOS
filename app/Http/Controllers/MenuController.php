<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function tambahMenu(Request $request){
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $nama_menu = $request['nama_menu'];
        $harga = $request['harga'];
        $desc = $request['deskripsi_menu'];
        $kategori = $request['kategori'];
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        Menu::create([
            'nama_menu' => $nama_menu,
            'harga' =>$harga,
            'deskripsi_menu' => $desc,
            'kategori' => $kategori,
            'foto_menu' => $imageName,
        ]);
        return redirect("addmenu") -> withSuccess("anda telah menambah menu");

    }

    public function destroyMenu(Request $request){
        $id_menu = $request['id_menu'];
        Menu::where('id_menu',$id_menu)->delete();
        return redirect("ahmed") -> withSuccess("menu telah terhapus");
    }

    function getMenu(){
        $menu = DB::table('menus')->get();
        return view('menu',['menu' => $menu]);
    }

    
}
