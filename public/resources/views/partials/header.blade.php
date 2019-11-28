<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png"/>
        </a>
        
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a class="" href="/"><img src="/images/logo.png"/></a>
                </li>


        <li class="nav-item has-dropdown">
            <input id="header_product" type="checkbox" hidden="">
                <a class="nav-link"><label for="header_product">@lang('site.products')</label></a>


        <div class="dropdown">
            <ul class="list-unstyled">

            <li class="nav-item has-dropdown">
                <input id="header_product_liber" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"><label for="header_product_liber" class="d-block mb-0">@lang('site.laptops')</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        @if(!$HAVE_LIBER_12)

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber']) }}">LIBER Series</a>
                                            </li>
                                        @else

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber12']) }}">AVITA LIBER 12.5"</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="/products/liber-new-generation">AVITA LIBER 13.3" & 14"</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', 'magus12-2in1-laptop') }}">@lang('magus.name')</a>
                                            </li>

                                        @endif

                                    </ul>
                                </div>
                            </li>
                                        <li class="nav-item has-dropdown">
                <input id="header_product_device" type="checkbox" hidden="">
                  <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">@lang('site.smart_device')</label></a>
                            <div class="dropdown">
                              <ul class="list-unstyled">
                                  <li class="nav-item">
                                 <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['imago']) }}">@lang('site.imago_series')</a>
                            </li>
                   <li class="nav-item">
                           <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['modus']) }}">@lang('site.modus_scale')</a>
                        </li>
                    </ul>
                </div>
             </li>   


        <li class="nav-item has-dropdown">
              <input id="header_product_accessories" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_accessories" class="d-block mb-0">@lang('site.accessories')</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <li class="nav-item">

                                            <a class="nav-link px-md-4 py-2" href="/accessories/mouse">@lang('site.mouse')</a>
                                        </li>

                                    </ul>
                 </div>
             </li>
                        </ul>
                    </div>
                </li>

      
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">@lang('site.news')</a>
                </li>

            <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.map', ['liber']) }}">@lang('site.header_where_to_buy')</a>
                </li>
                @if( $storeURL )

                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ $storeURL }}">@lang('site.header_store')</a>
                    </li>
            @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">@lang('site.service')</a>
                </li>

             <li class="nav-item has-dropdown">
                    <input id="header_buy_online" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"><label for="header_buy_online" class="d-block mb-0">Buy Online</label></a>
                    <div class="dropdown">
                         <ul class="list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank" href="https://www.flipkart.com/search?q=avita+laptops&otracker=search&otracker1=search&marketplace=FLIPKART&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.brand%255B%255D%3DAvita">Flipkart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2"  target="_blank" href="https://www.amazon.in/s?k=avita&rh=p_89%3AAVITA&dc&qid=1556975220&rnid=3837712031&ref=sr_nr_p_89_1">Amazon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2"  target="_blank" href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2&page=1&brand=510306">Paytm Mall</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link px-md-4 py-2"  target="_blank" href="https://ekhareedo.com/">E-Khareedo</a>
                            </li>
                            
                         </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>  


            </ul>
         </div>

    </div>
</nav>
       


                    


                  


<!-- ./Header -->
