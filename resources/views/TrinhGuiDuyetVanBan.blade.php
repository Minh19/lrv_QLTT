@extends('layouts.enduser')

@section('main')
<!-- Trang Level 1 -->

<div class="container p-0 my-4">
            <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <!-- <li class="breadcrumb-item"><a href="">Level 1</a></li> -->
              <li class="breadcrumb-item active" aria-current="page">Level 1</li>
            </ol>
          </nav>

            <div class="card text-white bg-light mb-3 border-0 rounded-3" >
              <div class="card-body row px-0 m-0">
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{url('public/site')}}/assets/loki.jpg" width="400">
                </div>
                <div class="col-6 textuser" >
                    <h4 class="text-center mb-4 "><b>CỔNG HOẠT ĐỘNG ĐOÀN HỘI</b></h4>
                <ul><h5><b>Các hoạt động đang diễn ra</b></h5></ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>
                <ul><h5><b>Các hoạt động theo chuỗi</b></h5></ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. </p>
                <ul><h5><b>Các hoạt động khác</b></h5></ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.  </p>
              </div>
              </div>
            </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="text-center carduser" style="height: 15rem;">
              <div class="position-absolute top-50 start-50 translate-middle">
                <h4><b>Các hoạt động đang diễn ra</b></h4>
                <a href="Level 2.html"><button type="button" class=" btnlv1  mt-3">Gửi duyệt</button></a>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="text-center carduser" style="height: 15rem;">
              <div class="position-absolute top-50 start-50 translate-middle">
                <h4><b>Các hoạt động đang diễn ra</b></h4>
                <a href="Level 2.html"><button type="button" class="btnlv1 mt-3">Gửi duyệt</button></a>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="text-center carduser" style="height: 15rem;">
              <div class="position-absolute top-50 start-50 translate-middle">
               <h4><b>Các hoạt động đang diễn ra</b></h4>
                  <a href="Level 2.html"><button type="button" class="btnlv1 mt-3">Gửi duyệt</button></a>
            </div>
            </div>
          </div>
        </div>
        </div>



@stop()