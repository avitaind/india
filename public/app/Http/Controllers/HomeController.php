<?php

namespace App\Http\Controllers;

use App;
use App\Country;
use App\Product;
use App\ProductModel;
use App\RepairTerm;
use App\ServiceCenter;
use App\Settings;
use App\Subscription;
use Illuminate\Http\Request;
use App\Mail\SendInMail;

class HomeController extends Controller
{

    public function redirectToHome( ) {

        return view('home');


    }

 public function blog( ) {

        return view('blog');


    }


    public function getTerms( ){

        $locale = app()->getLocale();

        if ( $locale == 'id' ) {
            $view_name = 'pages.terms_and_conditions_id';
        } elseif ( $locale == 'th')  {
            $view_name = 'pages.terms_and_conditions_thai';
        } else {
            $view_name = 'pages.terms_and_conditions';
        }

        return view($view_name);
    }

    public function getAboutUs( ) {
        return view('pages.about_us');
    }

    public function getSupport( ){
               $country = 'in';

	    $productModels = ProductModel::all();

        $serviceCenters = ServiceCenter::whereCountry($country)->get();

        return view('pages.support', compact('productModels', 'serviceCenters'));
    }

    public function handleSupportRedirect(Request $request) {

        $this->validate($request, [
            'product_number'   => 'required',
//            'product_model'  => 'required',
            'type'             => 'required',
            'series'           => 'required',
            'marketing_number' => 'required',
        ]);

        $product_model = $request->get('product_model');

        $product_number = $request->get('product_number');
        $product_type = $request->get('type');
        $product_series = $request->get('series');

        // Finding the short code

        $short_code = 'liber';

        $params = ['slug'   => $short_code,
                   'model'  => $product_model,
                   'pn'     => $product_number,
                   'type'   => $product_type,
                   'series' => $product_series,
                   'marketing_number' => $request->get('marketing_number')];

        return redirect()->route('product.support', $params);
    }

    public function getSearch_result( ){
        return view('pages.search_result');
    }

    public function showCountrySelections( ){
        return view('pages.global');
    }

    public function getContact_us( ){

        // Determine which contact_us page by region

        $country_code = session('country', 'in');

        $view_name = 'pages.contact_us_'.$country_code;

        if ( !\View::exists($view_name) ) {
            $view_name = 'pages.contact_us';
        }

        return view( $view_name );

    }

    public function getPromotionVanillaAir( ) {
        return view('pages.promotion_vanilla_air');
    }

    public function getRepairTerms( ){

        $title = __('site.footer_repair_tnc');

        $content =  null;

        $country = 'in';
		
        $locale = App::getLocale();

        $repair_term = RepairTerm::whereLocale($locale)->whereCountry($country)->first();

        if ( $repair_term ){
            return view('pages.terms', ['title' => $title, 'content' => $repair_term->message ]);
        } else {
            return view('pages.terms', ['title' => $title, 'content' => 'Content not found.']);
        }

    }

     public function handleSubscription(Request $request) {

        $this->validate($request, ['subscription_email' => 'required|email']);

        $email = $request->get('subscription_email');

        // Store to DB.
        $subscription = Subscription::firstOrCreate(['email' => $email]);

        $sub = new SendInMail;
        $sub->createUser($email);

        $data = [
            'status' => 'success',
            'message' => 'Thanks for Subscribing, We will connect you shortly.'
        ];

        return response( $data );
        
    }
	
	
    public function getImago(Request $request) {
        return view('product.imago');
    }

    public function getImagoSpec(Request $request){
        return view('product.imago_spec');
    }

    public function getModus() {
        return view('product.modus');
    }
}
