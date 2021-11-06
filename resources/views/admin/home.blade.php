@extends('layouts.app')

@section('content')
    <div class="container p-4 rounded bg-white shadow-lg">
        <div class="row">
            <div class="col-3 border-right">
                <h2>{{ __('Dashboard') }}</h2>
                <p>
                    <a class="btn" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
                      Pages
                    </a>
                  </p>
                  <ul class="collapse" id="collapseMenu">
                    <li>
                        <a href="{{ route('admin.plates.index') }}">Plates</a>
                    </li>
                  </ul>
            </div>
            <div class="col-9">
                <h2>
                    {{'You are logged in ' . Auth::user()->name . '!'}}
                </h2>
    
            </div>
        </div>
    </div>
@endsection
