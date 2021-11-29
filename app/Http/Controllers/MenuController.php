<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

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

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        Menu::create([
            'nama_menu' => $nama_menu,
            'harga' =>$harga,
            'deskripsi_menu' => $desc,
            'foto_menu' => $imageName,
        ]);
        return redirect("ahmed") -> withSuccess("anda telah menambah menu");

    }

    public function hapusMenu(Request $request){

    }

    
}
