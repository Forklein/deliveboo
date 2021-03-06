@extends('admin.home')


@section('rightDashboardContent')
@include('includes.session')
<div>
  <div class="d-flex justify-content-between plates">
    <div><h1>Your Plates</h1></div>
    <div class="py-2"><a class="btn btn-success button-trigger" href="{{route('admin.plates.create')}}"><i class="fas fa-plus"></i></a></div>
  </div>
  <div class="table-responsive overflow-auto vh-40">
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
            <td class="align-middle">{{$plate->name}}</td>
            <td class="align-middle">{{$plate->course}}</td>
            <td class="align-middle">{{$plate->price}}</td>
            <td class="align-middle">
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
            <td class="d-flex justify-content-center align-items-center">
              <a href="{{route('admin.plates.show', $plate->id)}}" class="btn btn-oxford button-trigger">Details</a>
              <a href="{{route('admin.plates.edit', $plate->id)}}" class="btn btn-warning mx-2 button-trigger"><i class="fas fa-pencil-alt"></i></a>
              <form method="POST" action="{{route('admin.plates.destroy', $plate->id)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger button-trigger" onclick="play()"><i class="fas fa-trash"></i></button>
                <audio id="audio" src="https://freesound.org/data/previews/508/508597_11110115-lq.mp3"></audio>
              </form>
            </td>
          </tr>
          @empty
          <td class="align-middle" colspan="6">No plates</td>
          @endforelse
        </tbody>
      </table>
  </div>
</div>
<div class="mt-4">
    {{$plates->links()}}
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
  });
  function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
</script>
@endsection