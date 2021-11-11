@extends('layouts.app')

@section('content')
    <div class="container p-4 rounded">
        <div class="row">
            <div class="col">
                <span class="h2">This is the control panel of: <strong><span class="text-capitalize h1 txt-oxford">{{Auth::user()->restaurant_name}}</span></strong></span>
                <address><em>Restaurant by {{Auth::user()->name}}</em></address>
                @foreach(Auth::user()->types as $type)
                    <span class="badge rounded-pill p-3" style="background-color: {{$type->color}}">{{$type->name}}</span>
                @endforeach
                <hr class="py-4">
            </div>
        </div>
        <div class="row shadow-lg border-custom">
            <!--Left Dashboard Section-->
            <div class="col-side-left bg-oxford bg-dash-left text-white py-4">
                <!--Logo Restaurant: If there is an image print it, otherwise print the name-->
                @if(Auth::user()->image)
                    <figure class="p-4 d-flex justify-content-center">
                        <img src="{{Auth::user()->image}}" alt="profile.pic" class="img-fluid">
                    </figure>
                @else
                    <h2 class="d-none d-md-block p-4 text-white text-center text-capitalize">{{Auth::user()->restaurant_name}}</h2>
                @endif
                <hr class="bg-white">
                <div class="overflow-auto vh-20">
                    <!--Home Route-->
                <a href="{{route('admin.home')}}" class="mt-2 @if (request()->routeIs('admin.home')) active @else link-white @endif">
                    <div class="d-flex justify-content-center justify-content-md-start side-link-bg">
                        <div class="mr-md-4"><i class="fas fa-home fa-2x"></i></div>
                        <div class="d-none d-md-inline"><h4>Home</h4></div>
                    </div>
                </a>
                <!--Finance Route-->
                <a href="{{route('admin.finances.index')}}" class="mt-2 @if (request()->routeIs('admin.finances.index')) active @else link-white @endif">
                    <div class="d-flex justify-content-center justify-content-md-start side-link-bg">
                        <div class="mr-md-4"><i class="fas fa-2x fa-chart-line"></i></div>
                        <div class="d-none d-md-inline"><h4>Finances</h4></div>
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
                <hr class="d-md-none bg-white">
            </div>
            <!--Right Dashboard Section-->
        </div>
        <div class="col-side-right bg-dash-right p-4">
            @yield('rightDashboardContent')
        </div>
    </div>
    @yield('script')
@endsection
