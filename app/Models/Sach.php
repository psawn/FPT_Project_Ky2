<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    protected $table = "Sach";
    protected $fillable = ["tensach ","tacgia","nhaxuatban","namxuatban","noinhap","gianhap","giaban","nguoitao","ngaytao","nguoisua","ngaysua", "soluong","is_active"];
    protected $dates = ['ngaytao','ngaysua'];
}
