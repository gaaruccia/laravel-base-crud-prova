@extends('layouts.layout')
@section('content')
<div class="omino">
  <h1>Il nostro omino:</h1>
  <form class="" action="{{route('updateOmino',$omino['id'])}}" method="post">
    @csrf
    @method('post')
    <ul>
      <li><b>Nome:</b><input type="text" name="nome" value="{{$omino['nome']}}"></li>
      <li><b>Cognome:</b><input type="text" name="cognome" value="{{$omino['cognome']}}"></li>
      <li><b>Eta:</b><input type="text" name="eta" value="{{$omino['eta']}}"></li>
      <li><b>Indirizzo:</b><input type="text" name="indirizzo" value="{{$omino['indirizzo']}}"></li>
      <li><b>Capelli:</b><input type="text" name="capelli" value="{{$omino['capelli']}}"></li>
      <li><b>Occhi:</b><input type="text" name="occhi" value="{{$omino['occhi']}}"></li>
      <li><b>Altezza:</b><input type="text" name="altezza" value="{{$omino['altezza']}}"></li>
      <li><b>Peso:</b><input type="text" name="peso" value="{{$omino['peso']}}"></li>
      <li><b>Sesso:</b><input type="text" name="sesso" value="{{$omino['sesso']}}"></li>
    </ul>
    <button type="submit" name="submit">Modifica</button>
  </form>
</div>

@endsection
