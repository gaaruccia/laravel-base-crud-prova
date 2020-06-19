@extends('layouts.layout')
@section('content')
<div class="cagnolino">
  <h1>Il nostro cagnolino:</h1>
  <form class="" action="{{route('updateCagnolino',$cagnolino['id'])}}" method="post">
    @csrf
    @method('post')
    <ul>
      <li><b>Nome:</b><input type="text" name="nome" value="{{$cagnolino['nome']}}"></li>
      <li><b>Cognome:</b><input type="text" name="tipo" value="{{$cagnolino['tipo']}}"></li>
      <li><b>Altezza:</b><input type="text" name="altezza" value="{{$cagnolino['altezza']}}"></li>
      <li><b>Peso:</b><input type="text" name="peso" value="{{$cagnolino['peso']}}"></li>
    </ul>
    <button type="submit" name="submit">Modifica</button>
</form>


</div>

@endsection
