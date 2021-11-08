@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 rounded">
        <div class="row">
            <div class="col-3 bg-dash-left text-white py-4" style="min-height: 500px">
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
            <div class="col-9 bg-dash-right shadow-lg py-4" style="min-height: 500px">
                <h2>
                    {{Auth::user()->name.', here are your restaurant details'}}
                </h2>
                @yield('rightDashboardContent')
                
    
            </div>
        </div>
    </div>
    @yield('script');
@endsection
