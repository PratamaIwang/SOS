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
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        
        print($data);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        Menu::create([
            'nama_menu' => $data['nama_menu'],
            'harga' =>$data['harga'],
            'deskripsi_smenu' => $data['deskripsi_menu'],
            'foto_menu' => $imageName,
        ]);
        return redirect("ahmed") -> withSuccess("anda telah menambah menu");

    }

    public function hapusMenu(Request $request){

    }

    
}
