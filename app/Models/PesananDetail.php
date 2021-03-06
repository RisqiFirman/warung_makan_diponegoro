<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function menu()
    {
        return $this->belongsTo('App\Menu', 'menu_id', 'id');
    }
    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan', 'pesanan_id', 'id');
    }
}
