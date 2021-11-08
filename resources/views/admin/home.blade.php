@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4 rounded">
        <div class="row shadow-lg">
            <!--Left Dashboard Section-->
            <div class="col-side-left bg-oxford bg-dash-left text-white py-4">
                <!--Logo Restaurant-->
                <figure class="p-4 d-flex justify-content-center">
                    <img src="{{Auth::user()->image}}" alt="profile.pic" class="img-fluid logo">
                </figure>
                <hr class="bg-white">
                <!--Home Route-->
                <a href="{{route('admin.home')}}" class="mt-2 @if (request()->routeIs('admin.home')) active @else link-white @endif">
                    <div class="d-flex justify-content-center justify-content-md-start side-link-bg">
                        <div class="mr-md-4"><i class="fas fa-home fa-2x"></i></div>
                        <div class="d-none d-md-inline"><h4>Home</h4></div>
                    </div>
                </a>
                <!--Plates Route-->
                <a href="{{route('admin.plates.index')}}" class="mt-2 @if (request()->routeIs('admin.plates.index')) active @else link-white @endif">
                    <div class="d-flex justify-content-center justify-content-md-start side-link-bg">
                        <div class="mr-md-4 text-center"><i class="fas fa-utensils fa-2x"></i></div>
                        <div class="d-none d-md-inline"><h4>Plates</h4></div>
                    </div>
                </a>
                                
                <!--Order Route-->
                <a href="{{route('admin.orders.index')}}" class="mt-2 @if (request()->routeIs('admin.orders.index')) active @else link-white @endif">
                    <div class="d-flex justify-content-center justify-content-md-start side-link-bg">
                        <div class="mr-md-4"><i class="fas fa-receipt fa-2x"></i></div>
                        <div class="d-none d-md-inline"><h4>Orders</h4></div>
                    </div>
                </a>

            </div>

            <!--Right Dashboard Section-->
            <div class="col-side-right bg-dash-right p-4">
                <h2 class="pb-4">
                    {{Auth::user()->name.', here are your restaurant details'}}
                </h2>
                <hr class="py-4">
                @yield('rightDashboardContent')
                
    
            </div>
        </div>
    </div>
    @yield('script');
@endsection
