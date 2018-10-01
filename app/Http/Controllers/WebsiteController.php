<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class WebsiteController extends Controller
{

    public function index(){

        return view( 'websites.website-collection' );

    }

    public function create(){

        return view( 'websites.create' );

    }

    public function show( Website $website ){



    }
}
