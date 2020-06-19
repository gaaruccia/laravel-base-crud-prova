<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cagnolino_model;
class CagnoliniController extends Controller
{
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
        // $cagnolino = $request -> all();
        $validateData = $request -> validate([
          'nome' => 'required|alpha',
          'tipo' => 'required|alpha',
          'altezza' => 'required',
          'peso' => 'required'
        ]);

        $cagnolinoDaCreare = new Cagnolino_model;
        $cagnolinoDaCreare -> nome = $validateData['nome'];
        $cagnolinoDaCreare -> tipo = $validateData['tipo'];
        $cagnolinoDaCreare -> altezza = $validateData['altezza'];
        $cagnolinoDaCreare -> peso = $validateData['peso'];

        $cagnolinoDaCreare -> save();

      return redirect() -> route('homeCagnolini')
                        -> withSuccess('Cagnolino '.$cagnolinoDaCreare['nome'].
                          ' creato con successo!');
    }
    public function editCagnolino($id){
        $cagnolino = Cagnolino_model::findOrFail($id);
      return view('esseri.cagnolini.editCagnolino', compact('cagnolino'));
    }
    public function updateCagnolino(Request $request, $id){
        // $cagnolino = $request -> all();
        $validateData = $request -> validate([
          'nome' => 'required|alpha',
          'tipo' => 'required|alpha',
          'altezza' => 'required',
          'peso' => 'required'
        ]);
        $cagnolinoDaModificare = Cagnolino_model::findOrFail($id);

        $cagnolinoDaModificare -> nome = $validateData['nome'];
        $cagnolinoDaModificare -> tipo = $validateData['tipo'];
        $cagnolinoDaModificare -> altezza = $validateData['altezza'];
        $cagnolinoDaModificare -> peso = $validateData['peso'];

        $cagnolinoDaModificare -> save();

      return redirect()
                -> route('showCagnolino',$cagnolinoDaModificare['id'])
                -> withSuccess('Cagnolino '.$cagnolinoDaModificare['nome'].
                    ' modificato con successo!');
    }
    public function deleteCagnolino($id){
        $cagnolino = Cagnolino_model::findOrFail($id);
        $cagnolino -> delete();
      return redirect() -> route('homeCagnolini');
    }
}
