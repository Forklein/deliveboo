@extends('admin.home')

@section('rightDashboardContent')
    <div class="container"> 
        <div class="card my-4">
            <div class="card-header bg-oxford">
                <h1 class="text-white"><strong>{{$plate->name}}</strong></h1>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row flex-wrap-reverse">
                        <div class="col col-md-6">
                            <h4 class="my-2"><strong>Plate Description</strong></h4>
                            <hr>
                            <p>{{$plate->description}}</p>
                            <h4 class="my-2"><strong>Plate Ingredients</strong></h4>
                            <hr>
                            <ul>
                                <li>{{$plate->ingredients}}</li>
                            </ul>
                        </div>
                        <div class="col col-md-6">
                            @if($plate->image)
                                <img src="{{$plate->image}}" alt="{{$plate->name}}" class="img-fluid shadow">
                            @else
                                <img src="{{asset('img/placeholder-photo.jpg')}}" alt="{{$plate->name}}" class="img-fluid shadow">
                            @endif
                        </div>
                    </div>
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
            <a href="{{route('admin.plates.edit', $plate->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
        </div>
    </div>
@endsection