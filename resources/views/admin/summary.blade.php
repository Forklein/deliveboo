@extends('admin.home')

@section('rightDashboardContent')
<div class="container text-center">
    <h1>Summary</h1>
    <div class="info d-flex align-items-baseline">
        <p class="font-weight-bold">Orders total</p><i class="fas fa-receipt mx-2"></i>
        <strong>{{count($orders)}}</strong>
    </div>
    <div class="info d-flex align-items-baseline">
        <p class="font-weight-bold">Plates total</p><i class="fas fa-utensils mx-2"></i>
        <strong>{{count($plates)}}</strong>
    </div>
    <div class="info d-flex align-items-baseline">
        <p class="font-weight-bold">Plates deleted</p><i class="fas fa-trash mx-2"></i>
        <strong>{{count($plates_trashed)}}</strong>
    </div>
</div>

@endsection