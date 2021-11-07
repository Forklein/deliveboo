@extends('admin.home')

@section('rightDashboardContent')
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
        <input type="text" class="form-control" name="description" id="description">
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
    <div class="form-group">
        <label for="visibility">Visibility</label>
        <input type="text" class="form-control" name="visibility" id="visibility">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection