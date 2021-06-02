<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public function pesanan_detail()
    {
        return $this->hasMany('app\PesananDesain', 'menu_id', 'id');
    }
}
