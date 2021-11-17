@extends('admin.home')

@section('rightDashboardContent')
<div class="container text-center">
    <h1>Summary</h1>
    <span class="h2">This is the control panel of: <strong><span class="text-capitalize h1 txt-oxford">{{Auth::user()->restaurant_name}}</span></strong></span>
    <address><em>Restaurant by {{Auth::user()->name}}</em></address>
    @foreach(Auth::user()->types as $type)
    <span class="badge rounded-pill p-3" style="background-color: {{$type->color}}">{{$type->name}}</span>
    @endforeach
    <hr class="py-4">
    <div class="row justify-content-around">
        <div class="col-2 d-flex align-items-center border border-success rounded-pill">
            <p class="font-weight-bold m-0">Total orders</p><i class="fas fa-receipt mx-2"></i>
            <strong>{{count($orders)}}</strong>
        </div>
        <div class="col-2 d-flex align-items-center border border-warning rounded-pill">
            <p class="font-weight-bold m-0">Total plates</p><i class="fas fa-utensils mx-2"></i>
            <strong>{{count($plates)}}</strong>
        </div>
        <div class="col-2 d-flex align-items-center border border-danger rounded-pill">
            <p class="font-weight-bold m-0">Deleted plates</p><i class="fas fa-trash mx-2"></i>
            <strong>{{count($plates_trashed)}}</strong>
        </div>        
    </div>
    
</div>

@endsection