<?php

function bytesToHuman($bytes, $precision = 2)
{
    $units = [' bytes', ' KB', ' MB', ' GB', ' TB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . $units[$i];
}

function enabled_countries(  ) {
    //return ['hk', 'sg', 'tw', 'my', 'cn', 'th', 'vn', 'in', 'id', 'ph'];
	return ['in'];
}

function supported_language( $country ) {

    switch ( $country ) {
        case 'in':
            return ['en'];
        default:
            return ['en'];
    }

}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {
       // case 'hk':  return "https://www.facebook.com/AVITAHongKong/";
       // case 'sg':  return "https://www.facebook.com/AvitaSG/";
       // case 'tw':  return "https://www.facebook.com/AVITATaiwan/";
       // case 'th':  return 'https://www.facebook.com/AvitaTH/';
        case 'in':  return 'https://www.facebook.com/AvitaIndia/';
       // case 'cn':
       // case 'ph':
       // case 'vn':
       // case 'id':
        default:    return "";
    }
}

function instagramLinkForCountry( $country ) {

    switch ( $country ) {
       // case 'hk':  return "https://www.instagram.com/avitahongkong/";
       // case 'sg':  return "https://www.instagram.com/avitasingapore/";
       // case 'tw':  return "https://www.instagram.com/avita_taiwan/";
       // case 'th':  return 'https://www.instagram.com/avitathailand/';
        case 'in':  return 'https://www.instagram.com/avitaind/';
       // case 'cn':
       // case 'ph':
       // case 'vn':
       // case 'id':
        default:    return "";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://twitter.com/AvitaIndia';
       // case 'hk':
       // case 'sg':
       // case 'tw':
       // case 'th':
       // case 'cn':
       // case 'ph':
       // case 'vn':
       // case 'id':
        default:    return "";
    }
}
function whatsappLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://api.whatsapp.com/send?phone=917827845054';
       // case 'hk':
       // case 'sg':
       // case 'tw':
       // case 'th':
       // case 'cn':
       // case 'ph':
       // case 'vn':
       // case 'id':
        default:    return "";
    }
}
function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "AVITA INDIA Official Site | AVITA INDIA";

    switch ( $country ) {
        case 'hk':
            if ( $language == 'tc') {
                $keyword = "Shop at AVITA India for our lifestyle products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. AVITA India is a one-stop shop to buy the most stylish consumer lifestyle products designed and manufactured by AVITA.";
            } else {
                $keyword = "Shop at AVITA India for our lifestyle products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. AVITA India is a one-stop shop to buy the most stylish consumer lifestyle products designed and manufactured by AVITA.";
            }
            break;
        case 'cn':
            $keyword = 'Shop at AVITA India for our lifestyle products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. AVITA India is a one-stop shop to buy the most stylish consumer lifestyle products designed and manufactured by AVITA.';
            break;
        case 'th':
            $keyword = 'Shop at AVITA India for our lifestyle products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. AVITA India is a one-stop shop to buy the most stylish consumer lifestyle products designed and manufactured by AVITA.';
            break;

        case 'id':
            if ( $language = 'id') {
                $keyword = 'Shop at AVITA India for our lifestyle products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. AVITA India is a one-stop shop to buy the most stylish consumer lifestyle products designed and manufactured by AVITA.';
                break;
            }
    }

    return $keyword;
}

function metaDescriptionByCountryAndLanguage( $country, $language ) {

    // Default
    $description = "Check out AVITA India for our lifestyle technology products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. Explore AVITA India to discover the most stylish consumer lifestyle products designed and manufactured by AVITA.";

    switch ( $country ) {
        case 'hk':
            if ( $language == 'tc') {
                $description = "Check out AVITA India for our lifestyle technology products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. Explore AVITA India to discover the most stylish consumer lifestyle products designed and manufactured by AVITA.";
            } else {
                $description = "Check out AVITA India for our lifestyle technology products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. Explore AVITA India to discover the most stylish consumer lifestyle products designed and manufactured by AVITA.";
            }
            break;
        case 'cn':
            $description = "Check out AVITA India for our lifestyle technology products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. Explore AVITA India to discover the most stylish consumer lifestyle products designed and manufactured by AVITA.";
            break;
        case 'th':

            if ( $language == 'en') {
                $description = "Check out AVITA India for our lifestyle technology products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. Explore AVITA India to discover the most stylish consumer lifestyle products designed and manufactured by AVITA.";
            } else {
                $description = "Check out AVITA India for our lifestyle technology products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. Explore AVITA India to discover the most stylish consumer lifestyle products designed and manufactured by AVITA.";
            }

            break;

        case 'id':
            if ( $language = 'id') {
                $keyword = "Check out AVITA India for our lifestyle technology products like laptops for students, latest notebooks, mouse, smart scale, smart mirror and more. Explore AVITA India to discover the most stylish consumer lifestyle products designed and manufactured by AVITA.";
                break;
            }
    }

    return $description;

}


function googleAnalyticCode( $country ) {

    switch ( $country ) {
        case 'id' : return "UA-128035503-8";
        case 'ph' : return "UA-128035503-9";
        case 'vn' : return 'UA-128035503-7';
        case 'cn' : return 'UA-128035503-10';
        case 'in' : return 'UA-128035503-6';
        case 'my' : return 'UA-128035503-3';
        case 'sg' : return 'UA-128035503-5';
        case 'tw' : return 'UA-128035503-4';
        case 'th' : return 'UA-128035503-11';

    }


    return 'UA-106387992-1';    // Default


}
