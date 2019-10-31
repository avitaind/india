@extends('layouts.app')

@section('title')
    @lang('title.customization')
@stop
@section('content')
<br/>
<main>
    <div class="row justify-content-center">
           <div class="col-md-8" style="margin-top:50px;">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('create')}}" style="margin-top: 23px;">
	                     
                            <div class="form-group row">
                                <label for="product_type"  class="col-md-4 col-form-label text-md-right">Color / Pattern </label>
                                <div class="col-md-6">
                                    <select id="product_type" name="img_path" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        <option value="" disabled>Color</option>
                                        <option value="himalayan_blue.png">Angel Blue</option>
                                        <option value="02">Avita Purple</option>
                                        <option value="03">Champagne Gold</option>
                                        <option value="04">Cloud Silver</option>
                                        <option value="05">Fragrant Lilac</option>
                                        <option value="06">Matt Black</option>
                                        <option value="07">Peacock Green</option>
                                        <option value="08">Pearl White</option>
                                        <option value="09">Princess Pink</option>
                                        <option value="10">Shamrock Green</option>
                                        <option value="11">Space Grey</option>
                                        <option value="12">Sunflower Yellow</option>
                                        <option value="13">Sunrise Orange</option>
                                        <option value="14">Urban Ruby</option>
                                        <option value="" disabled>Pattern</option>
                                        <option value="21">Batik in Champagne Gold</option>
                                        <option value="22">Batik in Urban Ruby</option>
                                        <option value="23">Cherry Blossom</option>
                                        <option value="24">Flowers in Sunflower</option>
                                        <option value="25">Paisley in Lilac</option>
                                        <option value="26">Snow Flake</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img_text" class="col-md-4 col-form-label text-md-right">Your Text </label>
                                <div class="col-md-6">
                                  <input type="text" name="img_text" placeholder="Write Your Text Here" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_image" class="col-md-4 col-form-label text-md-right">Font Style</label>
                                <div class="col-md-6">
                                    <select id="font_style" name="font_path" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        <option value="font/Arial.ttf">Arial</option>
                                        <option value="font/Arial_Black.ttf">Arial Black</option>
                                        <option value="font/Bookman.ttf">Bookman</option>
                                        <option value="font/COMIC.TTF">Comic Sans MS</option>
                                        <option value="font/cour.ttf">Courier New</option>
                                        <option value="font/Courier Regular.ttf">Courier</option>
                                        <option value="font/Helvetica.ttf">Helvetica</option>
                                        <option value="font/impact.ttf">Impact</option>
                                        <option value="font/mvboli.ttf">MV Boli</option>
                                        <option value="font/Times_New_Romance.ttf">Times New Roman</option>
                                        <option value="font/TIMESR.ttf">Times</option>
                                        <option value="font/Trebuchet MS.ttf">Trebuchet MS</option>
                                        <option value="font/Verdana.ttf">Verdana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="font_size" class="col-md-4 col-form-label text-md-right">Font Size</label>
                                <div class="col-md-6">
                                    <select id="font_size" name="font_size" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        <option value="10">10</option>
                                        <option value="12">12</option>
                                        <option value="14">14</option>
                                        <option value="16">16</option>
                                        <option value="18">18</option>
                                        <option value="20">20</option>
                                        <option value="22">22</option>
                                        <option value="24">24</option>
                                        <option value="26">26</option>
                                        <option value="28">28</option>
                                        <option value="30">30</option>
                                        <option value="32">32</option>
                                        <option value="34">34</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-color" class="col-md-4 col-form-label text-md-right">Text Color</label>
                                <div class="col-md-6">
                                <input type="color" id="font-color" class="form-control" value="#ffffff">
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 text-md-right">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Preview') }}
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-primary">
                                        {{ __('Refresh') }}
                                    </button>
                                </div>
                            </div>
                          </form>

                    </div>
                </div>
</div>

</main>
   <br/>
@endsection
