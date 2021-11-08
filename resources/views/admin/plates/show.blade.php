@extends('admin.home')

@section('rightDashboardContent')
    <div class="container"> 
        <div class="card mb-4">
            <div class="card-header">{{$plate->name}}</div>
            <div class="card-body">{{$plate->description}}</div>
            <div class="card-footer">{{$plate->price}}</div>
        </div>
        <hr>
        <div class="d-flex justify-content-end">
            <a class="btn btn-oxford" href="{{route('admin.plates.index')}}">Back</a>
        </div>
    </div>
@endsection