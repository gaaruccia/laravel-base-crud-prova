<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cagnolino_model;
class CagnoliniController extends Controller
{
    public function index(){
        $allCagnolini = Cagnolino_model::all();
      return view('esseri.cagnolini.homeCagnolini', compact('allCagnolini'));
    }

    public function showCagnolino($id){
        $cagnolino = Cagnolino_model::findOrFail($id);
      return view('esseri.cagnolini.showCagnolino', compact('cagnolino'));
    }
}
