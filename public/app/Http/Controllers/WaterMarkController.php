<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WaterMarkController extends Controller
{
    public function textWatermark(Request $request)
    {
        $img_path = $request->input('img_path');
        $img_text = $request->input('img_text');
        $img = Image::make(public_path('images/'.$img_path));
        $img->text($img_text, 350, 250, function ($font) use ($request) {
            $font->file(public_path('font/Arial.ttf'));
            $font->size(30);
            $font->color('#ffffff');
            $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });

        $img->save(public_path('images/new-image.png'));

        $img->encode('png');
        $type = 'png';
        $new_image = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return view('show_watermark', compact('new_image'));
    }

}
