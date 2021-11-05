@extends('layouts.app')

@section('content')
    <div class="container">
        <details open>
            <summary>Count</summary>
            {{($plates->total())}}
        </details>
        <ul>
        @forelse($plates as $plate)
        <li>{{$plate->name}}</li>
        @empty
        'No plates'
        @endforelse
        </ul>
        {{$plates->links()}}
    </div>
@endsection