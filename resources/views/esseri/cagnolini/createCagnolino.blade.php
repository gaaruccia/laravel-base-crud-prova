@extends('layouts.cagnoliniLayout')
@section('content')
<div class="cagnolino">
  <h1>Il nostro cagnolino:</h1>
  <form class="" action="{{route('storeCagnolino')}}" method="post">
    @csrf
    @method('post')
    <ul>
      <li><b>Nome:</b><input type="text" name="nome" value=""></li>
      <li><b>Tipo:</b><input type="text" name="tipo" value=""></li>
      <li><b>Altezza:</b><input type="text" name="altezza" value=""></li>
      <li><b>Peso:</b><input type="text" name="peso" value=""></li>
    </ul>
    <button type="submit" name="submit">Crea!</button>
</form>

</div>

@endsection
