@extends('layouts.layout')
@section('content')
<div class="cagnolino">
  <h1>Aggiungi un cagnolino:</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors -> all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form class="" action="{{route('storeCagnolino')}}" method="post">
    @csrf
    @method('post')
    <ul>
      <li><b>Nome:</b><input type="text" name="nome" value="{{old('nome')}}"></li>
      <li><b>Tipo:</b><input type="text" name="tipo" value="{{old('tipo')}}"></li>
      <li><b>Altezza:</b><input type="text" name="altezza" value="{{old('altezza')}}"></li>
      <li><b>Peso:</b><input type="text" name="peso" value="{{old('peso')}}"></li>
    </ul>
    <button type="submit" name="submit">Crea!</button>
</form>

</div>

@endsection
