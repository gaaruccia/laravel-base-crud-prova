@extends('layouts.layout')
@section('content')
<div class="mainContent">

  <h1>Di quali esserini vuoi vedere i dettagli?</h1>

<div class="container-esserini">

  <div class="index-esserino">
    <a href="{{route('homeCagnolini')}}">
      <img src="/imgs/littleDog.png" alt="">
      <h3>Cagnolini</h3>
    </a>
  </div>

  <div class="index-esserino">
    <h2>
      <a href="{{route('homeOmini')}}">
        <img src="/imgs/littleMan.png" alt="">
        <h3>Omini</h3>
      </a>
    </h2>
  </div>

</div>

</div>

@endsection
