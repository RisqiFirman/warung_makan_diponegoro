<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Warung Makan Diponegoro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset(('css/bootstrap.min.css'))}}">
    <!-- owl css -->
    <link rel="stylesheet" href="{{asset(('css/owl.carousel.min.css'))}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset(('css/style.css'))}}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{asset(('css/responsive.css'))}}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html"><img src="../images/logowar3.png" style="width: 40%"; alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone"><img style="margin-right: 15px;"><a href="#">wardipo@gmail.com</a></li>
                                <li class="dinone"><img
                                        style="margin-right: 15px;height: 21px;position: relative;top: -2px;"
                                        src="../images/location_icon.png" alt="#"><a href="#">Jl. Diponegoro Np.676 Bojonegoro. Jatim</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="../images/mail_icon.png"
                                            alt="#"><a href="#">0878-4564-6789</a></li>
                                <?php
                                $pesanan_utama =\App\Models\Pesanan::where('user_id', Auth::user()->id)->where ('status',0)->first();
                                ?>

                               <li class="dinone">
                                        <a class="nav-link" style="margin-right: 15px;" href="{{url('check-out')}}"><i class="fa fa-shopping-cart fa-2x" style="color: white" >
                                        </i></a>
                                </li>
                               <li class="dinone"><img style="margin-right: 15px;"><a href="{{ route('logout') }}" class="btn btn-danger">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    @include('sweet::alert')
@yield('content')


    <footer>
        <div class="footer">
                <div class="row">
                    <div class="col-md">
                        <div class="footer_logo">
                            <a href="index.html"><img src="{{asset(('images/logowar3.png'))}}" style="width: 20%" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            <li> <a href="index.html">Home</a></li>
                            <li> <a href="/blok">About</a></li>
                            <li> <a href="recipe.html">Recipe</a></li>
                            <li> <a href="blog.html">Blog</a></li>
                            <li> <a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

</div>
</div>
<div class="overlay"></div>
<!-- Javascript files-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min" ></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});
</script>

<style>
#owl-demo .item {
    margin: 3px;
}

#owl-demo .item img {
    display: block;
    width: 100%;
    height: auto;
}
</style>


<script>
$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 5
            }
        }
    })
})
</script>

</body>

</html>

