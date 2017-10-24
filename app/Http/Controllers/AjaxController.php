<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(Request $request){
        $fname = $request->input('fname');
        return view('ajax', [
            'fname' => $fname
        ])->render();
    }
}
