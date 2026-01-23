<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;

class Layanan extends Model
{
    protected $table = 'tb_layanan';

    public $timestamps = false;
    protected $primaryKey = 'id_layanan';

    protected $fillable = [
        'nama_layanan',
        'harga_per_kg'
    ];

    Public function Layanan (){
        return $this-> hasMany(Transaksi::class,'layanan','nama_layanan');
    }
        
}
