@extends('layouts.app')

@section('title')
    @lang('title.campus')
@stop

@section('content')
    <main class="top-nav-padding">
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/campus_banner.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/banner_mob.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber/brand.png">--}}
                        </div>
                        
                        <div class="an-scroll-wrap"><div class="an-scroll">
                       
                                <span>
                                   
                        </span>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section>

<div class="container">
  <div class="row">
    <div class="column">
 <h1>It’s time to unveil your talents and plunge into a world of colourful opportunities.</h1><br/>
<p>The Campus Ambassador Program by AVITA is an initiative to motivate the Indian Youth to showcase their skills and uniqueness like the AVITA Liber Series of Personalized Laptops.</p>
<p>Get ready to become the Face, Voice, and Evangelist of your Campus and build the most vibrant community of students striving to color up their lives!</p>

<h1>Who are we looking for?</h1>
<p>We are looking for students who-</p>
<ul>
    <li>Have a burning desire to make a change in the college student community in India.</li>
<li>Are interested to lead the student community in their college</li>
<li>Have taken initiatives/ held leadership positions in college</li>
<li>Love meeting new people and guiding them about opportunities at AVITA India</li>
<li>Have a great attitude to learn & an interest to guide students.</li>
<li>Have great communication skills</li>
</ul>
<h3 style="text-align:center;">Signup to receive your welcome kit for getting started</h3>
    </div>
    <div class="column">
        
        <h1 style="text-align:center;">Register Here</h1><br/>
   <!--   <form action="/action_page.php">
        <label for="name">Your Name</label>
        <input type="text" id="fname" name="name" placeholder="Your Name*">
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email*">
        <label for="phone">Phone</label>
        <input type="text" id="number" name="number" placeholder="Your Number*">
        <label for="college">College</label>
        <input type="text" id="college" name="college" placeholder="College">
        <input type="submit" value="Submit">
      </form>---->

        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSddLn-RkbFleRVBCQJyRcf3paACfkwE8AlE_NQAo73umk3Dog/viewform?embedded=true" width="100%" height="720px" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

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
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/campus.css') }}"/>
    
    
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
