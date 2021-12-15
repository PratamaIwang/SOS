<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_pesanan extends Model
{
    protected $fillable = ['id_pesanan','id_menu','created_at','updated_at'];
}
