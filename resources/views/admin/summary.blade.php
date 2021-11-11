@extends('admin.home')

@section('rightDashboardContent')
<div class="container text-center">
    <h1>Summary</h1>
    <div class="col-2 d-flex align-items-center border border-success rounded-pill">
        <p class="font-weight-bold m-0">Orders total</p><i class="fas fa-receipt mx-2"></i>
        <strong>{{count($orders)}}</strong>
    </div>
    <div class="col-2 d-flex align-items-center border border-warning rounded-pill my-2">
        <p class="font-weight-bold m-0">Plates total</p><i class="fas fa-utensils mx-2"></i>
        <strong>{{count($plates)}}</strong>
    </div>
    <div class="col-2 d-flex align-items-center border border-danger rounded-pill">
        <p class="font-weight-bold m-0">Plates deleted</p><i class="fas fa-trash mx-2"></i>
        <strong>{{count($plates_trashed)}}</strong>
    </div>
</div>

@endsection