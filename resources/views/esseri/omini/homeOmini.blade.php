@extends('layouts.ominiLayout')
@section('content')
<div class="allOmini">
  <h1>I nostri omini:</h1>
  <table>
    <tbody>
      <a href="{{route('createOmino')}}">Crea nuovo Omino</a>
    @foreach ($omini as $omino)
      <tr>
        <td>{{$omino["nome"]}}</td>
        <td>{{$omino["cognome"]}}</td>
        <td><a href="{{route('showOmino', $omino["id"])}}">Info</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
