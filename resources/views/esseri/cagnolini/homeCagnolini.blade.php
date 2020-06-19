@extends('layouts.layout')
@section('content')
<div class="homeCagnolini">
  <h1>I nostri cagnolini:</h1>
  @if (session('success'))
    <h5>{{session('success')}}</h5>
  @endif
  <table>
    <tbody>
      <form action="{{route('createCagnolino')}}">
          <input class="create-button" type="submit" value="Crea" />
      </form>
    @foreach ($cagnolini as $cagnolino)
      <tr>
        <td>{{$cagnolino["nome"]}}</td>
        <td>
          <form action="{{route('showCagnolino', $cagnolino["id"])}}">
            <input class="show-button" type="submit" value="->" />
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
