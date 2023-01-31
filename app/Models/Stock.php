<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stok';
    protected $guarded = [];
    
    protected $fillable = [
        'stok',
        'barang_id',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
