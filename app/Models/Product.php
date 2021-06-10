<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Product as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; 

class Product extends Model
{
    protected $table="products"; // Eloquent akan membuat model mahasiswamenyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id',
        'foto',
        'nama',
        'stok',
        'harga',
        'deskripsi',
    ];
}
