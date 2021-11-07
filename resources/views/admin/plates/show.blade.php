@extends('admin.home')

@section('rightDashboardContent')
    <div class="container">
        <div class="card">
            <div class="card-header">{{$plate->name}}</div>
            <div class="card-body">{{$plate->description}}</div>
            <div class="card-footer">{{$plate->price}}</div>
        </div>
        <a class="btn btn-primary" href="{{route('admin.plates.index')}}">Back</a>
    </div>
@endsection