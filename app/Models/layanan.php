<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "layanan";
    protected $fillable = ['kode_layanan', 'nama_layanan', 'deskripsi', 'biaya_layanan', 'durasi_layanan', 'kategori_layanan', 'created_at'];
}
