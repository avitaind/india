<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png"/>
        </a>

        @if( $user = Auth::user( ) )
            <div class="navbar-user-toggle navbar-toggler-right hidden-md-up d-flex align-items-center justify-content-center lead text-muted">
                <a class="user-toggle" href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a>
            </div>
        @else

            @if( Request::is('login') || Request::is('register') )

                {{-- Do nothing, hide the right corner login button in register/login page --}}

            @else
                <div class="navbar-user-toggle navbar-toggler-right hidden-md-up d-flex align-items-center justify-content-center lead text-muted">
                    <a class="" href="{{ route('login' ) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                </div>
            @endif


        @endif

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
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber12']) }}">LIBER</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="/products/liber-new-generation">LIBER New Generation</a>
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
                                <input id="header_product_device" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">@lang('site.accessories')</label></a>
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
            <!----

                --->



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">@lang('site.service')</a>
                </li>

                <li class="nav-item has-dropdown">
                    <input id="header_product_device" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">Buy Online</label></a>
                    <div class="dropdown">
                        <ul class="list-unstyled">
                           <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" href="http://store.avita-india.com/">AVITA Store</a>
                            </li>

				           <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" href="https://ekhareedo.com/">E-Khareedo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" href="https://www.amazon.in/s?k=avita&rh=p_89%3AAVITA&dc&qid=1556975220&rnid=3837712031&ref=sr_nr_p_89_1">Amazon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" href="https://www.flipkart.com/search?q=avita+laptops&otracker=search&otracker1=search&marketplace=FLIPKART&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.brand%255B%255D%3DAvita">Flipkart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2&page=1&brand=510306">Paytm Mall</a>
                            </li>
                         </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>  <li class="nav-item">
                    <a class="nav-link" href="/diwali-campaign">Diwali Offer</a>
                </li>

            </ul>
        </div>

        <!-- <div id="overlay">

        </div> -->
    <!---    @if( $user = Auth::user( ) )
            <aside class="navbar-user-warp hidden-md-up">
                <div class="navbar-user navbar-md-user">
                    <div class="user-header pt-2 px-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="username">{{ $user->name }}</div>
                            <div class="ml-auto">
                                <a href="" onclick="event.preventDefault();">
                                    <span aria-hidden="true" class="close">&#10005;</span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-content px-3">
                        <div class="align-items-center px-2 pb-2">
                             <img src="../images/icon-member-small.jpg" alt=""> 
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4 ">{{ $user->email }}</a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}" class=" pl-4">@lang('site.member_center')</a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3">@lang('site.logout')</button></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </div>
                </div>
            </aside>

        @endif
--->
    </div>
</nav>
<!-- ./Header -->
