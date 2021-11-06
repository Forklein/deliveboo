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
                        <a href="{{ route('admin.orders.index') }}">Orders</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.plates.index') }}">Plates</a>
                    </li>
                  </ul>
            </div>
            <div class="col-9">
                <h2>
                    {{'You are logged in ' . Auth::user()->name . '!'}}
                </h2>
                @yield('rightDashboardContent')
                <!--<div class="container cards">
                    <div class="row">
                        <div class="col-12">
                            <div class="card w-100" style="width: 18rem;">
                                <img src="https://cdn.corporatefinanceinstitute.com/assets/line-graph.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>-->
    
            </div>
        </div>
    </div>
@endsection
