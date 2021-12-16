<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $fillable = ['email','id_pesanan','total_harga','created_at','updated_at'];
}
