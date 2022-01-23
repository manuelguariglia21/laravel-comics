@extends('layouts.main')

@section('content')
<main>
  <div class="container text">
      <div class="current-series">Current series</div>
    </div>
  <div class="container boxes">
    Funziona!!
    {{-- <Card 
    v-for="(card, index) in cards" 
    :key="index"
    :cardName="card.series"
    :cardImage="card.thumb"
    />  --}}
  </div>
</main>
@endsection