@extends('admin.home')

@section('rightDashboardContent')
    <div class="container"> 
        <div class="card mb-4">
            <div class="card-header">
                <h1 class="txt-oxford">{{$plate->name}}</h1>
            </div>
            <div class="card-body">{{$plate->description}}</div>
            <div class="card-footer d-flex justify-content-between">
                <div><strong>Price: {{$plate->price}}</strong></div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{route('admin.plates.index')}}">Back</a>
        </div>
    </div>
@endsection