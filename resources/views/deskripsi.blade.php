@extends('layout.v_template')
@section('content')
<div class="yellow_bg">
    <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>About Our Food</h2>

                   </div>
                </div>
            </div>
           </div>
        </div>
        <!-- about -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i><img src="{{asset('images/title.png')}}" alt="#"/></i>

                            <span> Restoran kami menyediakan berbagai makanan berkualitas, dengan bahan bahan pilihan yang segar dan sehat.
                    <br> Kami menjamin kenyaman dan kesehatan
                 </span>
              </div>
           </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="about_box">
                  <h3>{{$menus -> nama_menu}}</h3>
                  <p>DESKRIPSI MAKANAN </p>
                  <span>  <i aria-hidden="true" style="font-size:x-large ; color: rgb(202, 202, 6);" >Rp. {{$menus->harga_menu}}</i>
                    <br>


                    <form method="post" action="{{url('detail/pesan/')}}/{{$menus->id}}">
                        @csrf
                    <input type="text" name="jumlah_pesanan" class="form-control" required="">
                    <button type="submit" class="btn btn-primary mt-2"><i class=" fa fa-shopping-cart"></i>MASUKAN KERANJANGF</button>

                  </span>
                </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
              <div class="about_img">
                  <figure><img src="{{url('./images/' . $menus -> gambar_menu) }}" alt="#/" style="width: 100%"></figure>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- end about -->

 @endsection
