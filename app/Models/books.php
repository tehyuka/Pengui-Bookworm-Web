<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    
    protected $guarded =['id'];

   //protected $fillable = [
      //  'judul_buku',
        //'penulis',
        //'penerbit',
        //'tahun_terbit'];
}
