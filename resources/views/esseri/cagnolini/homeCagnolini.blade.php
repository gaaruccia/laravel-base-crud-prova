@extends('layouts.layout')
@section('content')
<div class="homeCagnolini">
  <h1>I nostri cagnolini:</h1>
  @if (session('success'))
    <h5>{{session('success')}}</h5>
  @endif
  <form action="{{route('createCagnolino')}}">
    <input class="create-button" type="submit" value="Crea" />
  </form>
  <div class="lista-esserini">
    <table>
      <tbody>
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
</div>

@endsection
