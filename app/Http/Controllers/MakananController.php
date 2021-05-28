<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\MakananMod;

class MakananController extends Controller
{
    public function __construct()
    {
        $this->MakananMod = new MakananMod();
    }


    public function index ()
    {
        $data = [
            'makanan'=> $this->MakananMod->allData(),
        ];
        return view('index'.$data);
    }
}
