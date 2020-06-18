@extends('layouts.cagnoliniLayout')
@section('content')
<div class="allCagnolini">
  <h1>I nostri cagnolini:</h1>
  <table>
    <tbody>
      <a href="{{route('createCagnolino')}}">Crea nuovo Cagnolino</a>
    @foreach ($cagnolini as $cagnolino)
      <tr>
        <td>{{$cagnolino["nome"]}}</td>
        <td><a href="{{route('showCagnolino', $cagnolino["id"])}}">Vedi</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
