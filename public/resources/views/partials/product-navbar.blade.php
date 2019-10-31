<div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">

                @if(!$HAVE_LIBER_12)
                    <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'liber') }}">@lang('site.productnav_overview')</a></li>
                @else

                    <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'liber12') }}">@lang('site.productnav_overview_12')</a></li>
                    <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'liber') }}">Overview 13.3" & 14"</a></li>
                @endif

                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', 'liber') }}">@lang('site.productnav_spec')</a></li>
             

                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.support')</a></li>
                
                    <li class="nav-item">
                        <a class="nav-link py-1" href="{{ route('product.map', 'liber') }}">@lang('site.productnav_wheretobuy')</a>
                    </li>
               
            </ul>
        </div>
    </div>
</div>
