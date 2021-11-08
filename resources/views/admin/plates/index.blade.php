@extends('admin.home')

@section('rightDashboardContent')
<div>
  <div class="d-flex justify-content-between">
    <div><h1>Your Plates</h1></div>
    <div class="py-2"><a class="btn btn-success" href="{{route('admin.plates.create')}}"><i class="fas fa-plus"></i></a></div>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Plate ID</th>
            <th scope="col">Plate name</th>
            <th scope="col">Plate ingredients</th>
            <th scope="col">Plate description</th>
            <th scope="col">Plate course</th>
            <th scope="col">Plate price</th>
            <th scope="col">Visibility</th>
            <th scope="col">
              <details class="text-dark text-center">
                <summary>Total Plates</summary>
                <span>{{($plates->total())}}</span>
              </details>
            </th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse($plates as $plate)
          <tr>
            <th scope="row">{{$plate->id}}</th>
            <td>{{$plate->name}}</td>
            <td>{{Str::limit($plate->ingredients, 20, '...')}}</td>
            <td>{{Str::limit($plate->description, 20, '...')}}</td>
            <td>{{$plate->course}}</td>
            <td>{{$plate->price}}</td>
            <td>

              <form method="POST" action="{{ route('admin.plates.update', $plate->id)}}" class="form-toggle" >
                @method('PATCH')
                @csrf
                <div class="switch">
                  <input type="checkbox" class="customToggle" @if( $plate->visibility == 1) checked @else unchecked @endif>
                  <input type="hidden" name="visibility" id="customHidden" value="{{$plate->visibility}}">
                  <label>
                    <i><div class="fa fa-hamburger"></div></i>
                  </label>
                  <span></span>
                </div>
              </form>
            
            </td>
            <td></td>
            <td class="d-flex justify-content-end">
              <a href="{{route('admin.plates.show', $plate->id)}}" class="btn btn-oxford mr-2">Details</a>
              <a href="{{route('admin.plates.edit', $plate->id)}}" class="btn btn-warning"><i class="fas fa-pencil"></i></a>
            </td>
          </tr>
          @empty
          <td colspan="6">No plates</td>
          @endforelse
        </tbody>
      </table>
  </div>
    
</div>
<div class="d-flex justify-content-end">
    {{$plates->links()}}
    
</div>
@endsection


@section('script')

<!--Submit Toggle-->
  <script>
  const forms = document.querySelectorAll('.form-toggle');

  forms.forEach(function(form){
    const checks = document.querySelectorAll('.customToggle');
    checks.forEach(function(check){
      check.addEventListener('change', function(){
      if(check.checked){
        // const hidden = document.getElementById('customHidden');
        hidden.value = 1;
        form.submit();
      } else{
        // const hidden = document.getElementById('customHidden');
        hidden.value = 0;
        form.submit();
      }
    })
    })
  })

  // forms.forEach((form) => {
  //   checks.forEach((check) => {
  //     check.addEventListener('change', function(){
  //       if(check.checked){
  //       check.value = '1';
  //       form.submit();
  //     }else{
  //       check.value = '0';
  //       form.submit();
  //     }
  //   }
  // })


  // checks.forEach(function(el){
  //   el.addEventListener('change', function(){
  //     forms.forEach(function(form){
  //       if(el.checked){
  //       el.value = '1';
  //       form.submit();
  //     }else{
  //       el.value = '0';
  //       form.submit();
  //     }
  //     })
  //   })
  // })
    // check.forEach(function(element){
    //   
    //     check.addEventListener('change', function(){
    //       form.forEach(function(element){
    //         console.log(element)
    //         ;

    //       }) 
    //     })   
    // });
  </script>
@endsection