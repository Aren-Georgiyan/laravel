<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function information(){
//        dd('ghg');
        $info=Information::get();
        return view('/information.information')->with(compact('info'));
    }
    
    public function create(){
        return view('information.create');
    }
    
}
