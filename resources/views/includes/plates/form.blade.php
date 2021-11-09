@if($plate->exists)
<form method="post" action="{{route('admin.plates.update', $plate->id)}}">
    @method('PATCH')
@else
<form method="post" action="{{route('admin.plates.store')}}">
@endif
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $plate->name) }}" placeholder="Enter the name of your plate">
        <div class="invalid-feedback">
            @error('name') {{ $message }} @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="ingredients">Ingredients</label>
        <input type="text" class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" id="ingredients" value="{{ old('ingredients', $plate->ingredients) }}" placeholder="List all the ingredients">
        <div class="invalid-feedback">
            @error('ingredients') {{ $message }} @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Give a description of your plate">{{ old('description', $plate->description) }}</textarea>
        <div class="invalid-feedback">
            @error('description') {{ $message }} @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="course">Course</label>
        <input type="text" class="form-control @error('course') is-invalid @enderror" name="course" id="course" value="{{ old('course', $plate->course) }}" placeholder="Specify the kind">
        <div class="invalid-feedback">
            @error('course') {{ $message }} @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image', $plate->image) }}" placeholder="Enter an image url">
        <div class="invalid-feedback">
            @error('image') {{ $message }} @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price', $plate->price) }}">
        <div class="invalid-feedback">
            @error('price') {{ $message }} @enderror
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-oxford mr-2" href="{{route('admin.plates.index')}}">Back</a>
        <button type="submit" class="btn btn-oxford">Submit</button>
    </div>
</form>