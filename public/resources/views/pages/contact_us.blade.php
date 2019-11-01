@extends('layouts.app')

@section('title')
    @lang('title.contact_us')
@stop

@section('content')

    <main>

        <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">

                <div class="container">
                    <h1 class="section-title mt-0 mb-5 my-md-5 font-weight-light">@lang('site.contactus_contactus') <hr/></h1>

                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="contact_us_title">Sales & Corporate Enquiries :</h2>

                            <div class="mb-2">+91-7827845054</div>

                            <div class="mb-2"><b>Email :</b><br>
                                insales@nexstgo.com</div>

                            <div><b>@lang('site.contactus_operating') :</b><br>
                                Monday to Friday : 09:00 am - 06:00 pm</div>


                            <div class="mb-2"><b>Address :</b><br>
                                211B - 211C,  2nd Floor,  Elegance Tower, Jasola Vihar,  New Delhi-110025</div>
                            <h2 class="contact_us_title">For Service :</h2>
                            <div class="mb-2">Toll Free : +91 120 4848166</div>

                        </div>
                        <div class="col-sm-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.0533242758497!2d77.2863191150805!3d28.538116882455064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce6aa9cfc4f99%3A0x665909b7d4962e0c!2sElegance+Tower%2C+Jasola+Vihar%2C+New+Delhi%2C+Delhi+110025!5e0!3m2!1sen!2sin!4v1556101695940!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

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
