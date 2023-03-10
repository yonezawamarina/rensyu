<?php

namespace App\Http\Controllers;
use App\Models\Dango;
use Illuminate\Http\Request;

class DangoController extends Controller
{
    //
    
    // チャート表示用
    public function chart(){
        $dangos=Dango::all();
        return view('vote.dangovote', compact('dangos'));
    }
    
}
