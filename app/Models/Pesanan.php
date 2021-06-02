<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\user', 'user_id', 'id');
    }
    public function pesanan_desain()
    {
        return $this->hasMany('app\PesananDetail', 'pesanan_id', 'id');
    }
}
