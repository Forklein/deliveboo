@extends('admin.home')
@section('rightDashboardContent')
@include('includes.errors')
<form method="post" action="{{route('admin.plates.update', $plate->id)}}">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$plate->name}}">
    </div>
    <div class="form-group">
        <label for="ingredients">Ingredients</label>
        <input type="text" class="form-control" name="ingredients" id="ingredients" value="{{$plate->ingredients}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description">{{$plate->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="course">Course</label>
        <input type="text" class="form-control" name="course" id="course" value="{{$plate->course}}">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image" id="image" value="{{$plate->image}}">
    </div>
    <div class="form-group">
        <label for="price">Price €</label>
        <input type="text" class="form-control" name="price" id="price" value="{{$plate->price}}" placeholder="0.00">
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-oxford mr-2" href="{{route('admin.plates.index')}}">Back</a>
        <button type="submit" class="btn btn-oxford">Submit</button>
    </div>
</form>
@endsection