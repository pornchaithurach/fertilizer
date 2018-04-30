@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image"> <img src="images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
                            <div class="profile-name">
                                <p class="name">{{ Auth::user()->name }}</p>
                                <p class="designation">Manager</p>
                                <div class="badge badge-teal mx-auto mt-3">Online</div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a id="dashboard" class="nav-link" href="#"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">ภาพรวม</span></a></li>
                    <li class="nav-item"><a id="organisation" class="nav-link" href="#"><img class="menu-icon" src="images/menu_icons/02.png" alt="menu icon"><span class="menu-title">บันทึกข้อมูลศูนย์ฯ</span></a></li>
                    <li class="nav-item"><a id="member" class="nav-link" href="#"><img class="menu-icon" src="images/menu_icons/03.png" alt="menu icon"><span class="menu-title">บันทึกข้อมูลสมาชิก</span></a></li>
                    <li class="nav-item"><a id="report" class="nav-link" href="#"><img class="menu-icon" src="images/menu_icons/04.png" alt="menu icon"><span class="menu-title">รายงาน</span></a></li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">จัดการระบบ</span><i class="menu-arrow"></i></a>
                        <div class="collapse" id="general-pages">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a id="plant" class="nav-link" href="#">ข้อมูลพืช</a></li>
                                <li class="nav-item"> <a id="soil" class="nav-link" href="#">ข้อมูลชุดดิน</a></li>
                                <li class="nav-item"> <a id="" class="nav-link" href="#">Register</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">404</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">500</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                <div id="result_page">
                </div>
                <!-- content-wrapper ends -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.ictc.doae.go.th/" target="_blank">ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Pornchai made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
@endsection
@section('javascripts')

    <!-- plugins:js -->
        <script src="{{ asset('star/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{ asset('star/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{ asset('star/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="{{ asset('star/chart.js/dist/Chart.min.js')}}"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{ asset('js/off-canvas.js')}}"></script>
        <script src="{{ asset('js/misc.js')}}"></script>
        <!-- endinject -->
        {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>--}}
        <script src="{{ asset('js/maps.js')}}"></script>
        <!-- End custom js for this page-->
        <script>
            //call dashboard
            $( "#result_page" ).load( "/dashboards" );

            // event click partial dashboard
            $('#dashboard').on('click', function () {
                $.get('/dashboards', function (data) {
                    //TODO - how do we show the response data
                    $("#result_page").html(data).fadeIn();
                });
            });

            // event click partial organisation
            $('#organisation').on('click', function () {
                $.get('/organisations', function (data) {
                    //TODO - how do we show the response data
                    $("#result_page").html(data).fadeIn();
                });
            });

            // event click partial member
            $('#member').on('click', function () {
                $.get('/members', function (data) {
                    //TODO - how do we show the response data
                    $("#result_page").html(data).fadeIn();
                });
            });

            // event click partial report
            $('#report').on('click', function () {
                $.get('/reports', function (data) {
                    //TODO - how do we show the response data
                    $("#result_page").html(data).fadeIn();
                });
            });

            // event click partial report
            $('#setup').on('click', function () {
                $.get('/setups', function (data) {
                    //TODO - how do we show the response data
                    $("#result_page").html(data).fadeIn();
                });
            });

        </script>
@endsection
