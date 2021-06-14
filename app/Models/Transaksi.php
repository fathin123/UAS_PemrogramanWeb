<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Transaksi as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; 

class Transaksi extends Model
{
    protected $table = "transaksi";

    protected $fillable = ["tanggal, nama, jumlah, harga, total"];
}