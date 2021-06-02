<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\menu;
use UxWeb\SweetAlert\SweetAlert;
use App\Models\Pesanan;
use App\Models\PesananDetail;
Use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
        public function index ()
        {
            $menu = DB::table('menus')->get();

            return view('index' , ['menus' => $menu]);
        }

        public function detailData($id)
        {
            $detail = DB::table('menus')->where('id', $id)->first();
            return view ('deskripsi' , ['menus' => $detail]);
        }
        public function pesan (Request $request , $id)
        {
            $menu = DB::table('menus')->where('id', $id)->first();
            $tanggal = Carbon::now();
            //cek melebihi pesanan apa tidak
            if($request->jumlah_pesanan > $menu->stok_menu)
            {
                return redirect('detail/'. $id);
            }

            //simpan ke database pesanan
            //cek validasi pesanan
            $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where ('status', 0)->first();
            if(empty($cek_pesanan))
            {
            $pesanan = new Pesanan();
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal_pesanan = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga_pesanan=0;
            $pesanan->save();
            }

            $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where ('status', 0)->first();
            //simpan ke database pesanan detail

            //cek pesanan detail
            $cek_pesanan_detail  =PesananDetail::where('menu_id', $menu->id)->where('pesanan_id', $pesanan_baru->id)->first();
            if(empty($cek_pesanan_detail))
            {
                $pesanan_detail = new PesananDetail;
                $pesanan_detail->menu_id = $menu->id;
                $pesanan_detail->pesanan_id =$pesanan_baru->id;
                $pesanan_detail->jumlah = $request->jumlah_pesanan;
                $pesanan_detail->jumlah_harga = $menu->harga_menu*$request->jumlah_pesanan;
                $pesanan_detail->save();

            } else
            {
                $pesanan_detail  =PesananDetail::where('menu_id', $menu->id)->where('pesanan_id', $pesanan_baru->id)->first();
                $pesanan_detail->jumlah =$pesanan_detail->jumlah+$request->jumlah_pesanan;

                //harga sekarang
                $harga_pesanan_detail_baru =$menu->harga_menu*$request->jumlah_pesanan;
                $pesanan_detail->jumlah_harga =$pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
                $pesanan_detail->update();
            }

            //jumlah total
            $pesanan =Pesanan::where('user_id', Auth::user()->id)->where ('status', 0)->first();
            $pesanan->jumlah_harga_pesanan =$pesanan->jumlah_harga_pesanan+$menu->harga_menu*$request->jumlah_pesanan;
            $pesanan->update();


            SweetAlert::success('Success Message', 'Optional Title');

            return redirect('home');


        }

        public function check_out()
        {
            $pesanan =Pesanan::where('user_id', Auth::user()->id)->where ('status', 0)->first();
            $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();

            return view('check_out', compact('pesanan', 'pesanan_detail'));
        }
}
