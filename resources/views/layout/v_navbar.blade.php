@extends('layout.v_template')
<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">

            <li class="active">
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="recipe.html">Food</a>
            </li>
            <li>
                <a href="recipe.html">Drinks</a>
            </li>
            <li>
                <a href="blog.html">Blog</a>
            </li>
            <li>
                <a href="contact.html">Contact Us</a>
            </li>
        </ul>

    </nav>
</div>

<div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html"><img src="../images/logowar3.png" style="width: 70%; background-color: antiquewhite;" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">Contact Us : <img
                                        style="margin-right: 15px;margin-left: 15px;"
                                        src="../images/phone_icon.png" alt="#"><a href="#">987-654-3210</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="../images/mail_icon.png"
                                        alt="#"><a href="#">demo@gmail.com</a></li>
                                <li class="dinone"><img
                                        style="margin-right: 15px;height: 21px;position: relative;top: -2px;"
                                        src="../images/location_icon.png" alt="#"><a href="#">104 New york ,
                                        USA</a></li>
                                <li class="button_user"><a class="button active" href="#">Login</a><a
                                        class="button" href="#">Register</a></li>
                                <li><img style="margin-right: 15px;" src="../images/search_icon.png" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="../images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
