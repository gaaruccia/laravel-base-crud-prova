@extends('layouts.layout')
@section('content')
<div class="cagnolino">
  <h1>Il nostro cagnolino:</h1>

  @if (session('success'))
    <h5>{{session('success')}}</h5>
  @endif
  <ul>
    <li><b>Nome:</b> {{$cagnolino['nome']}}</li>
    <li><b>Tipo:</b> {{$cagnolino['tipo']}}</li>
    <li><b>Peso:</b> {{$cagnolino['peso']}}</li>
    <li><b>Altezza:</b> {{$cagnolino['altezza']}}</li>
  </ul>
  <div class="buttons">
    <form action="{{route('editCagnolino',$cagnolino['id'])}}" method="get">
      <input class="edit-button" type="submit" value="Modifica">
    </form>
    <form action="{{route('deleteCagnolino',$cagnolino['id'])}}" method="get">
      <input class="delete-button" type="submit" value="Elimina">
    </form>
  </div>
</div>

@endsection
