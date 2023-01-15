<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urun extends Model
{
    
     protected $table = 'urun';
     public $timestamps = 'false';
    protected $primaryKey = 'uid';
    protected $fillable = ['urunadi', 'ambalajturu', 'stok', 'fiyat', 'kategori_id'];
    public function kategori()
    {

       
        return $this->belongsTo(kategori::class)->select('urunturu');
    }
}
