@extends('layouts.layout')
@section('content')
<div class="homeOmini">
  <h1>I nostri omini:</h1>
  <table>
    <tbody>
      <form action="{{route('createOmino')}}">
          <input class="create-button" type="submit" value="Crea" />
      </form>
    @foreach ($omini as $omino)
      <tr>
        <td>{{$omino["nome"]}}</td>
        <td>{{$omino["cognome"]}}</td>
        <td>
          <form action="{{route('showOmino', $omino["id"])}}">
            <input class="show-button" type="submit" value="->" />
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
