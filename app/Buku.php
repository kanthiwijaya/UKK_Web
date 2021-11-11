<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['id', 'judul', 'penerbit', 'pengarang', 'gambar'];
    protected $guarded = [];
}
