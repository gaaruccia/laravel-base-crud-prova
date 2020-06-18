@extends('layouts.cagnoliniLayout')
@section('content')
<div class="allCagnolini">

  <h1>Di quali esserini vuoi vedere i dettagli?</h1>

  <div class="index-esserino">
    <h2>
      <a href="{{route('homeCagnolini')}}">Cagnolini</a>
    </h2>
  </div>

  <div class="index-esserino">
    <h2>
      <a href="{{route('homeOmini')}}">Omini</a>
    </h2>
  </div>

</div>

@endsection
