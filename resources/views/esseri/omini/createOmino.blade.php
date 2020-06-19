@extends('layouts.layout')
@section('content')
<div class="omino">
  <h1>Il nostro omino:</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors -> all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form class="" action="{{route('storeOmino')}}" method="post">
    @csrf
    @method('post')
    <ul>
      <li><b>Nome:</b><input type="text" name="nome" value={{old('nome')}}></li>
      <li><b>Cognome:</b><input type="text" name="cognome" value={{old('cognome')}}></li>
      <li><b>Eta:</b><input type="text" name="eta" value={{old('eta')}}></li>
      <li><b>Indirizzo:</b><input type="text" name="indirizzo" value={{old('indirizzo')}}></li>
      <li><b>Capelli:</b><input type="text" name="capelli" value={{old('capelli')}}></li>
      <li><b>Occhi:</b><input type="text" name="occhi" value={{old('occhi')}}></li>
      <li><b>Altezza:</b><input type="text" name="altezza" value={{old('altezza')}}></li>
      <li><b>Peso:</b><input type="text" name="peso" value={{old('peso')}}></li>
      <li><b>Sesso:</b><input type="text" name="sesso" value={{old('sesso')}}></li>
    </ul>
    <button type="submit" name="submit">Crea!</button>
</form>

</div>

@endsection
