<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
     <div class="carousel-item active">
         <div class="responsive-block">
           <a href="/diwali-campaign">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/diwali_web_banner2.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/diwali_web_banner2.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/diwali_mobile_banner2.jpg')"></div>
                    </div>
                    </a>
                </div>
        </div>
        
                 <div class="carousel-item">
         <div class="responsive-block">
           
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/admiror-01.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/admiror-01.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/admiror (mobile)-01.jpg')"></div>
                    </div>
                   
                </div>
        </div>
        
       <div class="carousel-item">
         <div class="responsive-block">
        
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/pura-01.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/pura-01.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/pura (mobile)-01.jpg')"></div>
                    </div>
                </div>
        </div>
        
         <div class="carousel-item">
         <div class="responsive-block">
           <a href="/products/liber-new-generation">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/lifestyle_banner_web1.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/lifestyle_banner_web1.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/lifestyle_banner_mob1.jpg')"></div>
                    </div>
                    </a>
                </div>
        </div>
        
        <div class="carousel-item">
                <div class="responsive-block">
                <a href="/products/liber-new-generation">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/lifestyle_banner_web2.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/lifestyle_banner_web2.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/lifestyle_banner_mob2.jpg')"></div>
                    </div>
                    </a>
                </div>
            </div>
                           
        
        <div class="carousel-item">
                <div class="responsive-block">
                <a href="/products/liber-new-generation">
                    <div class="banner-block responsive-item">
                        @if( App::isLocale('en') )
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/lifestyle_banner_web3.jpg')"></div>
                        @else
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/lifestyle_banner_web3.jpg')"></div>
                        @endif
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/lifestyle_banner_mob3.jpg')"></div>
                    </div>
                    </a>
                </div>
            </div>
                         
         <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item d-flex align-items-center">
                        <video class="leadin-video video-bgv2" muted playsinline autoplay loop>
                            <source src="/videos/AVITALiberNewGeneration.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
       
          <ol class="carousel-indicators">
                <li data-target="#home_banner" data-slide-to="0" class="active"></li>
                <li data-target="#home_banner" data-slide-to="1"></li>
                <li data-target="#home_banner" data-slide-to="2"></li>
                <li data-target="#home_banner" data-slide-to="3"></li>
                <li data-target="#home_banner" data-slide-to="4"></li>
                <li data-target="#home_banner" data-slide-to="5"></li> 
		<li data-target="#home_banner" data-slide-to="6"></li>


            </ol>
        </div>
</section>


@section('css')
    <style type="text/css">
        #home_banner video{
            position: absolute;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }
    </style>
    
@endsection
@section('js')
    <script type="text/javascript">

        var imageTimer = null;

     /*   $('video').on('ended', function(){
            $('#home_banner').carousel('next');
        });
    */
        $('#home_banner').on('init slide.bs.carousel', function (e) {

            clearTimeout( imageTimer );
              imageTimer = setTimeout( function( ){
                    $('#home_banner').carousel('next');
                }, 6000 );


        /* $(this).find('video')[0].play();

            var new_video = $(e.relatedTarget).find('video')[0];

            if ( new_video ) {
                new_video.play();
            } else {

                imageTimer = setTimeout( function( ){
                    $('#home_banner').carousel('next');
                }, 3000 );

            }
            */
        }).trigger('init');

    </script>
@endsection
