<?php

namespace Screaminlean\LaraGapi\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaraGapiController extends Controller
{
    public function index() {

    	return 'Index';
    }

    public function save(Request $request) {

    	return $request->all(); // just test commit
    }
}
