<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cagnolini_model;
class Cagnolini extends Controller
{
    public function showCagnolini(){
        $allCagnolini = Cagnolini_model::all();
      return view('index', compact('allCagnolini'));
    }

    public function showCagnolino($id){
        $cagnolino = Cagnolini_model::findOrFail($id);
      return view('showCagnolino/{{id}}', compact('cagnolino'));
    }
}
