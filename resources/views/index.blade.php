@extends('layout')
@section('content')
<div class="allCagnolini">
  <h1>I nostri cagnolini:</h1>
  <table>
    <tbody>
    @foreach ($allCagnolini as $cagnolino)
      <tr>
        <td>{{$cagnolino["nome"]}}</td>
        <td>{{$cagnolino["tipo"]}}</td>
        <td>{{$cagnolino["peso"]}}kg</td>
        <td>{{$cagnolino["altezza"]}}cm</td>
        <td><a href="{{route('showCagnolino', $cagnolino["id"])}}">Vedi</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
