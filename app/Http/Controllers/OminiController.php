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
      // $omino = $request -> all();
      $validateData = $request -> validate([
        'nome' => 'required|alpha',
        'cognome' => 'required|alpha',
        'eta' => 'required',
        'indirizzo' => 'required',
        'capelli' => 'required|alpha',
        'occhi' => 'required|alpha',
        'altezza' => 'required',
        'peso' => 'required',
        'sesso' => 'required|alpha|between:1,1'
      ]);
      $ominoDaCreare = new Omino_model;
      $ominoDaCreare -> nome = $validateData['nome'];
      $ominoDaCreare -> cognome = $validateData['cognome'];
      $ominoDaCreare -> eta = $validateData['eta'];
      $ominoDaCreare -> indirizzo = $validateData['indirizzo'];
      $ominoDaCreare -> capelli = $validateData['capelli'];
      $ominoDaCreare -> occhi = $validateData['occhi'];
      $ominoDaCreare -> altezza = $validateData['altezza'];
      $ominoDaCreare -> peso = $validateData['peso'];
      $ominoDaCreare -> sesso = $validateData['sesso'];

      $ominoDaCreare -> save();

    return redirect() -> route('homeOmini')
                      -> withSuccess('Omino '.$ominoDaCreare['nome'].
      ' creato con successo!');
  }
  public function editOmino($id){
      $omino = Omino_model::findOrFail($id);
    return view('esseri.omini.editOmino', compact('omino'));
  }
  public function updateOmino(Request $request, $id){
      // $omino = $request -> all();
      $validateData = $request -> validate([
        'nome' => 'required|alpha',
        'cognome' => 'required|alpha',
        'eta' => 'required',
        'indirizzo' => 'required',
        'capelli' => 'required|alpha',
        'occhi' => 'required|alpha',
        'altezza' => 'required',
        'peso' => 'required',
        'sesso' => 'required|alpha|between:1,1'
      ]);
      $ominoDaModificare = Omino_model::findOrFail($id);

      $ominoDaModificare -> nome = $validateData['nome'];
      $ominoDaModificare -> cognome = $validateData['cognome'];
      $ominoDaModificare -> peso = $validateData['peso'];
      $ominoDaModificare -> indirizzo = $validateData['indirizzo'];
      $ominoDaModificare -> capelli = $validateData['capelli'];
      $ominoDaModificare -> occhi = $validateData['occhi'];
      $ominoDaModificare -> altezza = $validateData['altezza'];
      $ominoDaModificare -> peso = $validateData['peso'];
      $ominoDaModificare -> sesso = $validateData['sesso'];

      $ominoDaModificare -> save();

    return redirect() -> route('showOmino',$ominoDaModificare['id'])
                      -> withSuccess('Omino '.$ominoDaModificare['nome'].
                            ' modificato con successo!');;
  }
  public function deleteOmino($id){
      $omino = Omino_model::findOrFail($id);
      $omino -> delete();
    return redirect() -> route('homeOmini');
  }
}
