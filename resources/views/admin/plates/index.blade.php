@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            @forelse($plates as $plate)
        <div class="card my-4 shadow-lg" style="width: 18rem;">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/17/ad/2f/16/double-burger.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$plate->name}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          @empty
        'No plates'
        @endforelse
        </div>
        {{$plates->links()}}
        <details class="text-white">
            <summary>Total</summary>
            {{($plates->total())}}
        </details>
    </div>
@endsection