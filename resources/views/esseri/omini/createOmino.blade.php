@extends('layouts.layout')
@section('content')
<div class="omino">
  <h1>Il nostro omino:</h1>
  <form class="" action="{{route('storeOmino')}}" method="post">
    @csrf
    @method('post')
    <ul>
      <li><b>Nome:</b><input type="text" name="nome" value=""></li>
      <li><b>Cognome:</b><input type="text" name="cognome" value=""></li>
      <li><b>Eta:</b><input type="text" name="eta" value=""></li>
      <li><b>Indirizzo:</b><input type="text" name="indirizzo" value=""></li>
      <li><b>Capelli:</b><input type="text" name="capelli" value=""></li>
      <li><b>Occhi:</b><input type="text" name="occhi" value=""></li>
      <li><b>Altezza:</b><input type="text" name="altezza" value=""></li>
      <li><b>Peso:</b><input type="text" name="peso" value=""></li>
      <li><b>Sesso:</b><input type="text" name="sesso" value=""></li>
    </ul>
    <button type="submit" name="submit">Crea!</button>
</form>

</div>

@endsection
