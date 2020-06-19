@extends('layouts.layout')
@section('content')
<div class="omino">
  <h1>Il nostro omino:</h1>

  @if (session('success'))
    <h5>{{session('success')}}</h5>
  @endif
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
  <div class="buttons">
    <form action="{{route('editOmino',$omino['id'])}}" method="get">
      <input class="edit-button" type="submit" value="Modifica">
    </form>
    <form action="{{route('deleteOmino',$omino['id'])}}" method="get">
      <input class="delete-button" type="submit" value="Elimina">
    </form>
  </div>
</div>

@endsection
