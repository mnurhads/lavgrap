<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat_detail',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'status'
    ];

    public function employee(){
        return $this->belongsTo('App\Models\Employee','alamat_id');
    }
}
