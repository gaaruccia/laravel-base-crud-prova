@extends('layouts.cagnoliniLayout')
@section('content')
<div class="allCagnolini">
  <h1>I nostri cagnolini:</h1>
  <table>
    <tbody>
    @foreach ($allCagnolini as $cagnolino)
      <tr>
        <td>{{$cagnolino["nome"]}}</td>
        <td><a href="{{route('showCagnolino', $cagnolino["id"])}}">Vedi</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
