@extends('layouts.ominiLayout')
@section('content')
<div class="omino">
  <h1>Il nostro omino:</h1>
  <ul>
    <li><b>Nome:</b> {{$omino['nome']}}</li>
    <li><b>Cognome:</b> {{$omino['cognome']}}</li>
    <li><b>Eta:</b> {{$omino['eta']}}</li>
    <li><b>Indirizzo:</b> {{$omino['indirizzo']}}</li>
    <li><b>Capelli:</b> {{$omino['capelli']}}</li>
    <li><b>Occhi:</b> {{$omino['occhi']}}</li>
    <li><b>Altezza:</b> {{$omino['altezza']}}</li>
    <li><b>Peso:</b> {{$omino['peso']}}</li>
    <li><b>Sesso:</b> {{$omino['sesso']}}</li>
  </ul>
  <a href="{{route('editOmino',$omino['id'])}}">Modifica</a>
  <a href="{{route('deleteOmino',$omino['id'])}}">Elimina</a>


</div>

@endsection
