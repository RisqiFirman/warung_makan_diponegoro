@extends('layout.v_template')
@section('content')
            <!-- section -->
            <section class="resip_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Our Menu</h2>
                            </div>
                        </div>
                @foreach ($tbl_menu as $data)

                <div class="col-md-3" style="padding: 20px">
                    <div class="card text-white" style="background-color: #1f1f1f" >
                        <img class="card-img-top" src="{{url('./images/' . $data -> gambar_menu) }}" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title" style="color: white">{{$data -> nama_menu}}</h3>
                            <h4><span class="theme_color">Rp. {{$data -> harga_menu}}</span></h4>
                            <p class="card-text">Deskripsiiiiiiiiiiii</p>
                            <a href="/detail/{{$data->id_menu}}" class="btn btn-sm btn-success">Detail</a>
                            <br>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
