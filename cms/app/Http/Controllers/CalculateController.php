<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
  public function show(Request $request){

    $data['exchange'] = $request->input('usdoller');
    $data['jpyen'] = ($data['exchange'] * 110);

    return view('calculate/num', $data);
    // return view('calculate/num',['dogfood' => $dogfood]);
    //
  }
}