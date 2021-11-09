@extends('admin.home')

@section('rightDashboardContent')
@include('includes.errors')
<form method="post" action="{{route('admin.plates.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="ingredients">Ingredients</label>
        <input type="text" class="form-control" name="ingredients" id="ingredients">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
    </div>
    <div class="form-group">
        <label for="course">Course</label>
        <input type="text" class="form-control" name="course" id="course">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image" id="image">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-oxford mr-2" href="{{route('admin.plates.index')}}">Back</a>
        <button type="submit" class="btn btn-oxford">Submit</button>
    </div>
</form>
@endsection