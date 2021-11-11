@extends('admin.home')


@section('rightDashboardContent')
@include('includes.session')
<div>
  <div class="d-flex justify-content-between">
    <div><h1>Your Plates</h1></div>
    <div class="py-2"><a class="btn btn-success" href="{{route('admin.plates.create')}}"><i class="fas fa-plus"></i></a></div>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Plate name</th>
            <th scope="col">Plate course</th>
            <th scope="col">Plate price</th>
            <th scope="col">Visibility</th>
            <th scope="col">Utilities</th>
          </tr>
        </thead>
        <tbody>
            @forelse($plates as $plate)
          <tr>
            <td>{{$plate->name}}</td>
            <td>{{$plate->course}}</td>
            <td>{{$plate->price}}</td>
            <td>
              <form method="POST" action="{{ route('admin.plates.update', $plate->id)}}" class="formToggle" >
                @method('PATCH')
                @csrf
                <div class="switch">
                  <input type="checkbox" @if( $plate->visibility == 1) checked @else unchecked @endif>
                  <input type="hidden" name="visibility" class="customHidden" value="{{$plate->visibility}}">
                  <label>
                    <i><div class="fa fa-hamburger"></div></i>
                  </label>
                  <span></span>
                </div>
              </form>
            </td>
            <td class="d-flex">
              <a href="{{route('admin.plates.show', $plate->id)}}" class="btn btn-oxford">Details</a>
              <a href="{{route('admin.plates.edit', $plate->id)}}" class="btn btn-warning mx-2"><i class="fas fa-pencil-alt"></i></a>
              <form method="POST" action="{{route('admin.plates.destroy', $plate->id)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @empty
          <td colspan="6">No plates</td>
          @endforelse
        </tbody>
      </table>
  </div>
    
</div>
<div class="container">
  <div class="row justify-content-between">
    <div class="col-md-4">
      <details class="text-dark">
        <summary>Total Plates</summary>
        <span>{{($plates->total())}}</span>
      </details>
    </div>
    <div class="col-md-4">
      <div class="d-flex justify-content-end">
        {{$plates->links()}}
    </div>
    </div>
  </div>
</div>
@endsection


@section('script')

<script>
  const forms = document.querySelectorAll('.formToggle');

  forms.forEach(function(form){
    form.addEventListener('change', function(event) {
      const hiddens = document.querySelectorAll('.customHidden');
      hiddens.forEach(function(hidden){
        if(hidden.value == 1){
          hidden.value = 0;
        }else{hidden.value = 1;}
        form.submit();
      })
    });
  })
</script>
@endsection