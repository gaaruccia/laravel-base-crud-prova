<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Omino_model;
class OminiController extends Controller
{
  public function index(){
      $omini = Omino_model::all();
    return view('esseri.omini.homeOmini', compact('omini'));
  }
  public function showOmino($id){
      $omino = Omino_model::findOrFail($id);
    return view('esseri.omini.showOmino', compact('omino'));
  }
  public function createOmino(){
    return view('esseri.omini.createOmino');
  }
  public function storeOmino(Request $request){
      $omino = $request -> all();

      $ominoDaCreare = new Omino_model;
      $ominoDaCreare -> nome = $omino['nome'];
      $ominoDaCreare -> cognome = $omino['cognome'];
      $ominoDaCreare -> eta = $omino['eta'];
      $ominoDaCreare -> indirizzo = $omino['indirizzo'];
      $ominoDaCreare -> capelli = $omino['capelli'];
      $ominoDaCreare -> occhi = $omino['occhi'];
      $ominoDaCreare -> altezza = $omino['altezza'];
      $ominoDaCreare -> peso = $omino['peso'];
      $ominoDaCreare -> sesso = $omino['sesso'];

      $ominoDaCreare -> save();

    return redirect() -> route('homeOmini');
  }
  public function editOmino($id){
      $omino = Omino_model::findOrFail($id);
    return view('esseri.omini.editOmino', compact('omino'));
  }
  public function updateOmino(Request $request, $id){
      $omino = $request -> all();
      $ominoDaModificare = Omino_model::findOrFail($id);

      $ominoDaModificare -> nome = $omino['nome'];
      $ominoDaModificare -> cognome = $omino['cognome'];
      $ominoDaModificare -> peso = $omino['peso'];
      $ominoDaModificare -> indirizzo = $omino['indirizzo'];
      $ominoDaModificare -> capelli = $omino['capelli'];
      $ominoDaModificare -> occhi = $omino['occhi'];
      $ominoDaModificare -> altezza = $omino['altezza'];
      $ominoDaModificare -> peso = $omino['peso'];
      $ominoDaModificare -> sesso = $omino['sesso'];

      $ominoDaModificare -> save();

    return redirect() -> route('showOmino',$ominoDaModificare['id']);
  }
  public function deleteOmino($id){
      $omino = Omino_model::findOrFail($id);
      $omino -> delete();
    return redirect() -> route('homeOmini');
  }
}
