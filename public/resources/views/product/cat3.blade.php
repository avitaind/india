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
                        <li class="nav-item"><a class="nav-link py-1" href="/customMagus">Magus</a></li>
                        <li class="nav-item"><a class="nav-link py-1" href="/customYSeries">Liber</a></li>
                         <li class="nav-item"><a class="nav-link py-1" href="/customUSeries">Liber New Generation</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------->
        <section style="background-color:#fff">
            
            <div id="container" class="cf">
            <div class="product-slider">
                <div class="row">
                    <div class="col-md-2">
                       <div class="colorSelector">
                           <label class="block">
                           <input type="radio" name="color" value="Charcoal Grey" checked>
                           <img height="75px" width="75px" src="images/custom/colors/Charcoal Grey.jpg">
                           </label>
                           <label  class="block">
                           <input type="radio" name="color" value="Pastel Violet">
                           <img height="75px" width="75px" src="images/custom/colors/Pastel Violet.jpg">
                           </label>
                           <label  class="block">
                           <input type="radio" name="color" value="Seashell Pink">
                           <img height="75px" width="75px" src="images/custom/colors/Seashell Pink.jpg">
                           </label>
                           <label  class="block">
                           <input type="radio" name="color" value="Steel Blue">
                           <img height="75px" width="75px" src="images/custom/colors/Steel Blue.jpg">
                           </label>
                       </div>
                    </div>
                    <div class="col-md-8">
                        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                                <div class="item active"> <img id="1a" height="500px" src="images/custom/Magus/Charcoal Grey/MAIN.jpg"> </div>
                                <div class="item"> <img id="2a" height="500px" src= "images/custom/Magus/Charcoal Grey/PTO1.jpg"> </div>
                                <div class="item"> <img id="3a" height="500px" src= "images/custom/Magus/Charcoal Grey/PTO2.jpg"> </div>
                                <div class="item"> <img id="4a" height="500px" src= "images/custom/Magus/Charcoal Grey/PTO3.jpg"> </div>
                                <div class="item"> <img id="5a" height="500px" src= "images/custom/Magus/Charcoal Grey/PTO4.jpg"> </div>
                                <div class="item"> <img id="6a" height="500px" src= "images/custom/Magus/Charcoal Grey/PTO5.jpg"> </div>
                                <div class="item"> <img id="7a" height="500px" src= "images/custom/Magus/Charcoal Grey/PTO6.jpg"> </div>
                                <div class="item"> <img id="8a" height="500px" src= "images/custom/Magus/Charcoal Grey/PTO7.jpg"> </div>
                            </div>
                            <!-- Left and right controls -->
                              <a class="left carousel-control" href="#carousel" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                              </a>
                              <a class="right carousel-control" href="#carousel" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                              </a>
                        </div>
                        <div class="clearfix">
                            <div id="thumbcarousel" class="carousel slide" data-interval="false">
                                <div class="item active">
                                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img height="50px" id="1b" src= "images/custom/Magus/Charcoal Grey/MAIN.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img height="50px" id="2b" src= "images/custom/Magus/Charcoal Grey/PTO1.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img height="50px" id="3b" src= "images/custom/Magus/Charcoal Grey/PTO2.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img height="50px" id="4b" src= "images/custom/Magus/Charcoal Grey/PTO3.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="4" class="thumb"><img height="50px" id="5b" src= "images/custom/Magus/Charcoal Grey/PTO4.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="5" class="thumb"><img height="50px" id="6b" src= "images/custom/Magus/Charcoal Grey/PTO5.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="6" class="thumb"><img height="50px" id="7b" src= "images/custom/Magus/Charcoal Grey/PTO6.jpg"></div>
                                    <div data-target="#carousel" data-slide-to="7" class="thumb"><img height="50px" id="8b" src= "images/custom/Magus/Charcoal Grey/PTO7.jpg"></div>
                                </div>
                                <!-- /thumbcarousel --> 
                            </div>
                        </div>
                    </div>
                    <!-- col ends-->
                    <div class="col-md-2">
                        <!-- <div class="patternSelector text-right " style="margin-top: 10px">
                            <label class="block">
                            <img height="75px" width="75px" src="images/custom/patterns/Batik in Champagne Gold.jpg">
                            <input type="radio" name="pattern" value="Batik in Champagne Gold" checked>
                            </label>
                            <label  class="block">
                            <img height="75px" width="75px" src="images/custom/patterns/Batik in Urban Ruby.jpg">
                            <input type="radio" name="pattern" value="Batik in Urban Ruby">
                            </label>
                            <label  class="block">
                            <img height="75px" width="75px" src="images/custom/patterns/Cherry Blossom.jpg">
                            <input type="radio" name="pattern" value="Cherry Blossom Sakura">
                            </label>
                            <label  class="block">
                            <img height="75px" width="75px" src="images/custom/patterns/Flowers in Sunflower.jpg">
                            <input type="radio" name="pattern" value="Flowers in Sunflower Yellow">
                            </label>
                            <label  class="block">
                            <img height="75px" width="75px" src="images/custom/patterns/Paisley in Lilac.jpg">
                            <input type="radio" name="pattern" value="Paisley in Lilac">
                            </label>
                        </div> -->
                    </div>
                </div>
                <!-- row ends-->
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
.carousel-inner>.item {
    position: relative;
    display: none;
    -webkit-transition: .6s ease-in-out left;
    -o-transition: .6s ease-in-out left;
    transition: .6s ease-in-out left;
}
.carousel-inner > .item.active.left, .carousel-inner > .item.prev {
    left: 0;
    -webkit-transform: translate3d(-100%,0,0);
    transform: translate3d(-100%,0,0);
}

.carousel-inner > .item.active, .carousel-inner > .item.next.left, .carousel-inner > .item.prev.right {
    left: 0;
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
.carousel-inner > .next.left, .carousel-inner > .prev.right {
    left: 0;
}
.carousel-inner > .item.active.right, .carousel-inner > .item.next {
    left: 0;
    -webkit-transform: translate3d(100%,0,0);
    transform: translate3d(100%,0,0);
}
.carousel-inner>.active {
    left: 0;
}
.carousel-inner > .next {
    left: 100%;
}
.carousel-inner > .item {

    -webkit-transition: -webkit-transform .6s ease-in-out;
    -o-transition: -o-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;

}
.carousel-inner > .item {
   position: relative;
    display: none;
    -webkit-transition: .6s ease-in-out left;
    -o-transition: .6s ease-in-out left;
    transition: .6s ease-in-out left;
}
.carousel-inner > .next, .carousel-inner > .prev {
   position: absolute;
    top: 0;
    width: 100%;
}
.carousel-inner > .active, .carousel-inner > .next, .carousel-inner > .prev {
     display: block;
}

input[type="radio"] {
  margin-top: -1px;
  vertical-align: middle;
}

.block {
  display: block;
}

.main{
    float: center;
}


.product-slider {
    padding: 45px; 
}

.product-slider #carousel { 
  margin: 0; 
  height: 500px;
  overflow: hidden;
  
}

.product-slider #thumbcarousel { 
  margin: 12px 0 0; 
  padding: 0 45px; 
}

.product-slider #thumbcarousel .item,.product-slider #carousel .item { 
  text-align: center; 
}

.product-slider #thumbcarousel .item .thumb { 
  border: 2px solid #cecece; 
  width: 20%; 
  margin: 2%; 
  display: inline-block; 
  vertical-align: middle; 
  cursor: pointer; 
  max-width: 98px; 
}

.product-slider #thumbcarousel .item .thumb:hover { border-color: #1089c0; }

.product-slider .item img { width: auto; height: 450px; }
.product-slider .thumb img { width: 50px; height: 50px; }

.carousel-control { color: #0284b8; text-align: center; text-shadow: none; font-size: 30px; width: 30px; height: 30px; line-height: 20px; top: 23%; }

.carousel-control:hover, .carousel-control:focus, .carousel-control:active { 
  color: #333; 
}

.carousel-caption, .carousel-control .fa {

 font: normal normal normal 50px/36px FontAwesome; 

}

.carousel-control {

 background-color: rgba(0, 0, 0, 0);
 bottom: auto; font-size: 20px; 
 left: 0; 
 position: absolute; 
 top: 30%; 
 width: auto; 
}

.carousel-control.right {
    right: 0;
    left: auto;
    
}

.carousel-control {
    position: absolute;
    top: 46%;
    bottom: 0;
    left: 0;
    width: 15%;
    font-size: 20px;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    background-color: rgba(0,0,0,0);
    filter: alpha(opacity=50);
    opacity: .5;
}
@media screen and (min-width: 768px){
.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
    margin-left: -10px;
}
}


/*.carousel-control.right, .carousel-control.left { 
    background-color: rgba(0, 0, 0, 0); background-image: none; 
}*/

input {
    visibility:hidden;
}

input:checked +label img{

  border:1px solid #021a40;
}
.block img{
    cursor: pointer;
}

</style>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="screen" /> -->
@endsection

@section('js')
<script>
    $(document).on('click', 'input[name="color"]',function(){
    
        var dir = "images/custom/Magus/";
        var colorName = $(this).val();
        var files = ['MAIN.jpg','PTO1.jpg','PTO2.jpg','PTO3.jpg','PTO4.jpg','PTO5.jpg','PTO6.jpg','PTO7.jpg'];
    
    
        fillSlider(dir,colorName,files);
    
      });
    
      $(document).on('click', 'input[name="pattern"]',function(){
    
        var dir = "images/custom/Magus Pattern/";
        var colorName = $(this).val();
    
    
        $('#8b').hide();
        $('#9b').hide();
    
         var files = ['MAIN.jpg','PTO1.jpg','PTO2.jpg','PTO3.jpg','PTO4.jpg','PTO5.jpg','PTO6.jpg'];
    
          fillSlider(dir,colorName,files);
    
      });
    
      
      var fillSlider = function (dir,colorName,files) {
      
      $.each(files, function(index,value){
    
      var i = index+1;
    
      var img = $('#' + i.toString() + 'a');
      var img2 = $('#'+ i.toString() + 'b');
    
      img.attr('src', dir + colorName +"/"+ files[index]);
      img2.attr('src',dir + colorName +"/"+ files[index]);
    
      });
    
        
      }
        
</script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <!-- <script type="text/javascript" src="{{ asset('js/magus.js') }}"></script> -->


@endsection
