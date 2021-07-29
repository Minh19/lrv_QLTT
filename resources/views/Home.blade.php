@extends('layouts.enduser')

@section('main')
<!-- Trang Chủ -->
<div class="container-fluid p-0">
    <!-- Silder -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('public/site')}}/assets/slide/Slide_1.png" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="{{url('public/site')}}/assets/slide/Slide_2.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="{{url('public/site')}}/assets/slide/Slide_3.jpg" class="d-block w-100" >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container p-0">
<!--News -->
    <div class="news">
        <div class="row m-0">
            <div class="col-6 row row-cols-1 g-4"><h2>Tin tức</h2></div>
            <div class="col-6 row row-cols-1 g-4"><h2>Sự kiện</h2></div>
        </div>
        
        <div class="row m-0">
            <!-- Tin tức -->
            <div class="col-6 row row-cols-1 row-cols-2 g-4">
                <div class="col-6 mt-2">
                    <div class="card card-home h-60 ">
                        <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title title-home max-lines-3"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                            <p class="card-text max-lines-4">This is a longer card with supporting text below as a natural lead-in to additional content. This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text "><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="card card-home h-60 ">
                        <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title title-home max-lines-3"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                            <p class="card-text max-lines-4">This is a longer card with supporting text below as a natural lead-in to additional content. This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text "><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card card-home h-60">
                        <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title title-home"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card card-home h-60">
                        <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title title-home"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sự kiện -->
            <div class="col-6 g-4 bg-light">
                <div class="card card-home mt-2 " style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title title-home max-lines-3"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                                <p class="card-text max-lines-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text d-flex align-items-end"><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-home mt-2 " style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title title-home max-lines-3"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                                <p class="card-text max-lines-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text d-flex align-items-end"><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-home mt-2 " style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title title-home max-lines-3"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                                <p class="card-text max-lines-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text d-flex align-items-end"><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-home mt-2 " style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url('public/site')}}/assets/News/EZ_thumnails.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title title-home max-lines-3"><b>“Tham quan từ xa” với công nghệ Virtual Tour 3D/360 hiện đại của Ajinomoto Việt Nam</b></h6>
                                <p class="card-text max-lines-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text d-flex align-items-end"><small class="text-muted"> <i class="fas fa-clock"></i> Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
        <div class="row m-0">
            <div class="col-6 row row-cols-1 my-3"><a  style="text-decoration: none" href="#"><button type="button" class="btn card-home btn-primary btn-block"><h5 class="text-white"><b>Xem thêm Tin tức</b></h5></button></a></div>
            <div class="col-6 row row-cols-1 my-3"><a  style="text-decoration: none" href="#"><button type="button" class="btn card-home btn-warning btn-block"><h5 class="text-white"><b>Xem thêm Sự kiện</b></h5></button></a></div>
        </div>
    
 </div>



@stop();