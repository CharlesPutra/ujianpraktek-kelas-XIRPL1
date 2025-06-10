<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServisInfinix extends Model
{
    use HasFactory;

    protected $table = 'servis_infinix';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pemilik',
        'merek_hp',
        'image',
        'kerusakan',
        'tanggal',
        'biaya_servis'	
    ];
}
