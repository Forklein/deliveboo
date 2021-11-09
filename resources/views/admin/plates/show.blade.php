@extends('admin.home')

@section('rightDashboardContent')
    <div class="container"> 
        <div class="card mb-4">
            <div class="card-header bg-oxford">
                <h1 class="text-white">{{$plate->name}}</h1>
            </div>
            <div class="card-body">
                <div>
                    <h4 class="my-2">Plate Description</h4>
                    <hr>
                    <p>{{$plate->description}}</p>
                    <h4 class="my-2">Plate Ingredients</h4>
                    <hr>
                    <ul>
                        <li>{{$plate->ingredients}}</li>
                    </ul>
                </div>
                
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div><strong>Course: {{$plate->course}}</strong></div>
                <div><strong>Price: {{$plate->price}}</strong></div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-end">
            <a class="btn btn-oxford mr-2" href="{{route('admin.plates.index')}}">Back</a>
            <a href="{{route('admin.plates.edit', $plate->id)}}" class="btn btn-warning"><i class="fas fa-pencil"></i></a>
        </div>
    </div>
@endsection