<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cagnolini_model;
class CagnoliniController extends Controller
{
    public function index(){
        $allCagnolini = Cagnolini_model::all();
      return view('index', compact('allCagnolini'));
    }

    public function showCagnolino($id){
        $cagnolino = Cagnolini_model::findOrFail($id);
      return view('showCagnolino', compact('cagnolino'));
    }
}
