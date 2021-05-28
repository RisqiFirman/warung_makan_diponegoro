@extends('layout.v_template')
<!-- body -->
@section('content')
@foreach ($makanan as $makan)
    
@endforeach
<body class="main-layout">
    <!-- loader  -->
    <div class="wrapper">
        <!-- end loader -->
        <!-- start slider section -->
        <div class="slider_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div id="main_slider" class="carousel vert slide" data-ride="carousel"
                                    data-interval="5000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="slider_cont">
                                                        <h3>Discover Restaurants<br>That deliver near You</h3>
                                                        <p>It is a long established fact that a reader will be
                                                            distracted by the readable content of a page when looking at
                                                            its layout.</p>
                                                            <a class="main_bt_border" href="#">Order Now</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="slider_image full text_align_center">
                                                        <img class="img-responsive" src="../images/burger_slide.png"
                                                            alt="#" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="slider_cont">
                                                        <h3>Discover Restaurants<br>That deliver near You</h3>
                                                        <p>It is a long established fact that a reader will be
                                                            distracted by the readable content of a page when looking at
                                                            its layout.</p>
                                                        <a class="main_bt_border" href="#">Order Now</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 full text_align_center">
                                                    <div class="slider_image">
                                                        <img class="img-responsive" src="../images/burger_slide.png"
                                                            alt="#" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#main_slider" role="button"
                                        data-slide="prev">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#main_slider" role="button"
                                    data-slide="next">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                                <h2>Our Recipes</h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel owl-theme">

                                        <div class="item">
                                            <a href="/deskripsi ">
                                            <div class="product_blog_img">
                                                <img src="../images/rs1.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Homemade</h3>
                                                <h4><span class="theme_color">$</span>10</h4>
                                            </div>
                                        </a>
                                        </div>
                                        <div class="item">
                                            <a href="/deskripsi ">
                                            <div class="product_blog_img">
                                                <img src="../images/rs2.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Noodles</h3>
                                                <h4><span class="theme_color">$</span>20</h4>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs3.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Egg</h3>
                                                <h4><span class="theme_color">$</span>30</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs4.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Sushi Dizzy</h3>
                                                <h4><span class="theme_color">$</span>40</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs5.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>The Coffee Break</h3>
                                                <h4><span class="theme_color">$</span>50</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs1.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Homemade</h3>
                                                <h4><span class="theme_color">$</span>10</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs2.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Noodles</h3>
                                                <h4><span class="theme_color">$</span>20</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs3.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Egg</h3>
                                                <h4><span class="theme_color">$</span>30</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs4.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Sushi Dizzy</h3>
                                                <h4><span class="theme_color">$</span>40</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs5.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>The Coffee Break</h3>
                                                <h4><span class="theme_color">$</span>50</h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="resip_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Our Drink</h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel owl-theme">

                                        <div class="item">
                                            <a href="deskripsi.html ">
                                            <div class="product_blog_img">
                                                <img src="../images/rs1.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Homemade</h3>
                                                <h4><span class="theme_color">$</span>10</h4>
                                            </div>
                                        </a>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs2.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Noodles</h3>
                                                <h4><span class="theme_color">$</span>20</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs3.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Egg</h3>
                                                <h4><span class="theme_color">$</span>30</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs4.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Sushi Dizzy</h3>
                                                <h4><span class="theme_color">$</span>40</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs5.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>The Coffee Break</h3>
                                                <h4><span class="theme_color">$</span>50</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs1.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Homemade</h3>
                                                <h4><span class="theme_color">$</span>10</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs2.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Noodles</h3>
                                                <h4><span class="theme_color">$</span>20</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs3.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Egg</h3>
                                                <h4><span class="theme_color">$</span>30</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs4.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>Sushi Dizzy</h3>
                                                <h4><span class="theme_color">$</span>40</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product_blog_img">
                                                <img src="../images/rs5.png" alt="#" />
                                            </div>
                                            <div class="product_blog_cont">
                                                <h3>The Coffee Break</h3>
                                                <h4><span class="theme_color">$</span>50</h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bg_bg">

            @endsection