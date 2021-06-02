@extends('layout.v_template')
<!-- body -->
@section('content')
<body class="main-layout">
    <div class="jumb">
        <div class="jumbotron jumbotron-fluid" style="background-color: #1f1f1f">
            <div class="container">
              <h1 class="display-4" style="color: white">WARUNG MAKAN DIPONEGORO</h1>

              <p class="lead">  COME FOR FRESH FOOD, STAY FOR FUN AND ENJOY IT :)</p>
            </div>
          </div>
    </div>
            <!-- end slider section -->
            <!-- section -->
            <section class="resip_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Our Menu</h2>

                            </div>
                        </div>
                @foreach ($menus as $data)

                <div class="col-md-3" style="padding: 20px">
                    <div class="card text-white" style="background-color: #1f1f1f" >
                        <img src="{{url('./images/'. $data->gambar_menu)}}" alt="">
                        <div class="card-body">
                            <h3 class="card-title" style="color: white">{{$data -> nama_menu}}</h3>
                            <h4><span class="theme_color">Rp. {{$data -> harga_menu}}</span></h4>
                            <p class="card-text">Deskripsiiiiiiiiiiii</p>
                            <a href="/detail/{{$data->id}}" class="btn btn-sm btn-warning">Detail</a>
                            <br>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

            <div class="bg_bg">

            @endsection
