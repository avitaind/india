@extends('layouts.app')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="screen" /> -->
@section('title')
    @lang('title.MAGUS_home')
@stop

@section('content')
    <main class="top-nav-padding">
        <!---------------- Submenu------------->
        <div class="nav-product-panel">
            <div class="container">
                <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                    <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
                </div>

                <div class="product-nav-collapse">
                    <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                        <li class="nav-item"><a class="nav-link py-1" href="/customMagus">Liber</a></li>
                        <li class="nav-item"><a class="nav-link py-1" href="/customUSeries">Liber New Generation</a></li>
                        <li class="nav-item"><a class="nav-link py-1" href="/customYSeries">Magus</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------->
        <section class="sec-product-gallery">
            <div class="container img-container">
                <div class="row">
                    <div class="col-md-2 gallery-thumbnails">
                        <div><img src= "images/custom/U Series/Angel Blue/MAIN.jpg"></div>
                        <div><img src= "images/custom/U Series/Angel Blue/PTO1.jpg"></div>
                        <div><img src= "images/custom/U Series/Angel Blue/PTO2.jpg"></div>
                        <div><img src= "images/custom/U Series/Angel Blue/PTO3.jpg"></div>
                        <div><img src= "images/custom/U Series/Angel Blue/PTO4.jpg"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-gallery">
                            <img src= "images/custom/U Series/Angel Blue/MAIN.jpg">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Color</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pattern</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active color-filter" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <img src="images/custom/colors/Angel Blue.jpg">
                                <img src="images/custom/colors/Avita Purple.jpg">
                                <img src="images/custom/colors/Blossom Pink.jpg">
                                <img src="images/custom/colors/Champagne Gold.jpg">
                                <img src="images/custom/colors/Cloud Silver.jpg">
                                <img src="images/custom/colors/Fragrant Lilac.jpg">
                                <img src="images/custom/colors/Himalayan Blue.jpg">
                                <img src="images/custom/colors/Matt Black.jpg">
                                <img src="images/custom/colors/Peacock Green.jpg">
                                <img src="images/custom/colors/Pearl White.jpg">
                                <img src="images/custom/colors/Shamrock Green.jpg">
                                <img src="images/custom/colors/Space Grey.jpg">
                                <img src="images/custom/colors/Sunflower Yellow.jpg">
                                <img src="images/custom/colors/Sunrise Orange.jpg">
                                <img src="images/custom/colors/Urban Ruby.jpg">
                                <img src="images/custom/colors/B07M5KHX2Z.jpg">
                                <img src="images/custom/colors/B07M8GDNLV.jpg">
                                <img src="images/custom/colors/B07MN1N8C3.jpg">
                                <img src="images/custom/colors/B07MN1TLPG.jpg">
                            </div>
                            <div class="tab-pane fade pattern-filter" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <img src="images/custom/patterns/Batik in Champagne Gold.jpg">
                                <img src="images/custom/patterns/Batik in Urban Ruby.jpg">
                                <img src="images/custom/patterns/Cherry Blossom.jpg">
                                <img src="images/custom/patterns/Flowers in Sunflower.jpg">
                                <img src="images/custom/patterns/Paisley in Lilac.jpg">
                                <img src="images/custom/patterns/Snow Flake.jpg">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('css/product-magus.css') }}"/> -->
<style>
.sec-product-gallery{
    background: url('/images/imago/bg.png') left top / auto no-repeat;
    background-color: #fff;
    padding-top: 30px;
    padding-bottom: 30px;
}
.img-container{
    padding: 4% 1% 2%;
}
.gallery-thumbnails{
    text-align: center;
}
.gallery-thumbnails > div{
    width: 80%;
    padding: 0px 15px;
    text-align: center;
    display: inline-block;
    box-shadow: 3px 4px 12px -5px #7a7a7a;
    margin-bottom: 15px;
    background-color: #fff;
}
.gallery-thumbnails img{
    width: 100%;
}
.product-gallery img{
    width: 100%;
}
.color-filter,.pattern-filter{
    padding: 20px;
    background-color: #fff;
}
.color-filter img{
    width: 50px;
    height: 50px;
    margin:5px;
    border-radius: 50%;
}
.pattern-filter img{
    width: 85px;
    height: 85px;
    margin:5px;
    border-radius: 50%;
}
#myTabContent .tab-pane.active{
    opacity: 1;
}
.product-gallery img{
    -webkit-animation: mover 2s  alternate;
    animation: mover 2s  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.color-filter img,.pattern-filter img{
    animation: 1s ease-out 0s 1 slideInFromLeft;
}
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-30%);
  }
  100% {
    transform: translateX(0);
  }
}
</style>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="screen" /> -->
@endsection

@section('js')
<script>

    
  
</script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <!-- <script type="text/javascript" src="{{ asset('js/magus.js') }}"></script> -->


@endsection
