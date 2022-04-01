<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Factory;

class Sinhvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaSv',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'SoDT',
    ];
}
