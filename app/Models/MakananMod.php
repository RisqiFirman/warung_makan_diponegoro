<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MakananMod extends Model
{
    public function datamakanan()
    {
        return DB::table('makanan')->get();
    }
}
