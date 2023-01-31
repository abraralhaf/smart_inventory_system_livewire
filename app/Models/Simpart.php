<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpart extends Model
{
    use HasFactory;
    protected $table = 'simpart';
    protected $guarded = [];

    protected $fillable = [
        'min_stok',
        'no1sd6pit',
        'no7sd10pit',
        'no10pit',
        'barang_id',
    ];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
