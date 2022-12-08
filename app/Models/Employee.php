<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'alamat_id',
        'supervisor',
        'position',
        'status_employee',
    ];

    public function user(){
        return $this->hasMany('App\Models\User','id','user_id');
    }

    public function alamat(){
        return $this->belongsTo('App\Models\Alamat','id','alamat_id');
    }

}
