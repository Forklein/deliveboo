@extends('layouts.app')

@section('content')
    <div class="container p-4 rounded">
        <div class="row">
            <div class="col-3 bg-primary text-white rounded py-4" style="height: 900px">
                <h2>{{ __('Dashboard') }}</h2>
                <p>
                    <a class="text-white" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
                      Pages
                    </a>
                  </p>
                  <ul class="collapse list-unstyled pl-3" id="collapseMenu">
                    <li>
                        <a class="text-white" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li>
                        <a class="text-white" href="{{ route('admin.orders.index') }}">Orders</a>
                    </li>
                    <li>
                        <a class="text-white" href="{{ route('admin.plates.index') }}">Plates</a>
                    </li>
                  </ul>
            </div>
            <div class="col-9 bg-white shadow-lg rounded py-4" style="height: 900px">
                <h2>
                    {{Auth::user()->name.', here are your restaurant details'}}
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
