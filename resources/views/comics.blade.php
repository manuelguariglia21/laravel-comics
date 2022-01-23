@extends('layouts.main')

@section('content')
<main>
  <div class="container text">
      <div class="current-series">Current series</div>
    </div>
  <div class="container boxes">
    @foreach ($comics as $comic)
      <section>
        <div class="card">
          <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        </div>
        <div class="desc">
          {{$comic['title']}}
        </div>
        
      </section>
    @endforeach
    {{-- <Card 
    v-for="(card, index) in cards" 
    :key="index"
    :cardName="card.series"
    :cardImage="card.thumb"
    />  --}}
  </div>
</main>
@endsection