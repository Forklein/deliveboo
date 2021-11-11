@extends('admin.home')

@section('rightDashboardContent')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <h1>Summary</h1>
        <div class="info d-flex align-items-baseline">
            <p>Plates deleted</p><i class="fas fa-trash mx-2"></i>
            <strong>{{count($plates)}}</strong>
        </div>
    </div>
</div>

@endsection