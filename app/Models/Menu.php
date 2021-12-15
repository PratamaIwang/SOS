<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['id_menu','nama_menu','harga','deskripsi_menu','foto_menu','kategori','created_at','updated_at'];
}
