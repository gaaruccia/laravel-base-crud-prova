<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cagnolino_model;
class CagnoliniController extends Controller
{
    // public function index(){
    //     $allCagnolini = Cagnolino_model::all();
    //   return view('esseri.cagnolini.homeCagnolini', compact('allCagnolini'));
    // }
    //
    // public function showCagnolino($id){
    //     $cagnolino = Cagnolino_model::findOrFail($id);
    //   return view('esseri.cagnolini.showCagnolino', compact('cagnolino'));
    // }
    public function index(){
        $cagnolini = Cagnolino_model::all();
      return view('esseri.cagnolini.homeCagnolini', compact('cagnolini'));
    }
    public function showCagnolino($id){
        $cagnolino = Cagnolino_model::findOrFail($id);
      return view('esseri.cagnolini.showCagnolino', compact('cagnolino'));
    }
    public function createCagnolino(){
      return view('esseri.cagnolini.createCagnolino');
    }
    public function storeCagnolino(Request $request){
        $cagnolino = $request -> all();

        $cagnolinoDaCreare = new Cagnolino_model;
        $cagnolinoDaCreare -> nome = $cagnolino['nome'];
        $cagnolinoDaCreare -> tipo = $cagnolino['tipo'];
        $cagnolinoDaCreare -> altezza = $cagnolino['altezza'];
        $cagnolinoDaCreare -> peso = $cagnolino['peso'];

        $cagnolinoDaCreare -> save();

      return redirect() -> route('homeCagnolini');
    }
    public function editCagnolino($id){
        $cagnolino = Cagnolino_model::findOrFail($id);
      return view('esseri.cagnolini.editCagnolino', compact('cagnolino'));
    }
    public function updateCagnolino(Request $request, $id){
        $cagnolino = $request -> all();
        $cagnolinoDaModificare = Cagnolino_model::findOrFail($id);

        $cagnolinoDaModificare -> nome = $cagnolino['nome'];
        $cagnolinoDaModificare -> tipo = $cagnolino['tipo'];
        $cagnolinoDaModificare -> altezza = $cagnolino['altezza'];
        $cagnolinoDaModificare -> peso = $cagnolino['peso'];

        $cagnolinoDaModificare -> save();

      return redirect() -> route('showCagnolino',$cagnolinoDaModificare['id']);
    }
    public function deleteCagnolino($id){
        $cagnolino = Cagnolino_model::findOrFail($id);
        $cagnolino -> delete();
      return redirect() -> route('homeCagnolini');
    }
}
