@extends('admin.home')

@section('rightDashboardContent')
<div>
    <div class="text-right py-4"><a class="btn btn-success" href="{{route('admin.plates.create')}}">Create Plate</a></div>
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
                <input type="checkbox" name="visibility" class="customToggle" @if( $plate->visibility == 1) checked @else unchecked @endif value="{{$plate->visibility}}" >
                <label>
                    <i><div class="fa fa-hamburger"></div></i>
                  </label>
                  <span></span>
                </div>
              </form>
            
            </td>
            <td>
              <div class="btn">
                <a href="{{route('admin.plates.show', $plate->id)}}" class="btn btn-warning">Details</a>
              </div>
            </td>
          </tr>
          @empty
          <td colspan="6">No plates</td>
          @endforelse
        </tbody>
      </table>
</div>
<div>
    {{$plates->links()}}
    <details class="text-white">
        <summary>Total</summary>
        {{($plates->total())}}
    </details>
</div>
@endsection


@section('script')

<!--Submit Toggle-->
  <script>
    const check = document.querySelectorAll('.customToggle');
    check.forEach(function(element){
      const form = document.querySelectorAll('.form-toggle');
        check.addEventListener('change', function(){
          form.forEach(function(element){
            console.log(element)
            form.submit();

          }) 
          
        } )
        
            
    });
  
  </script>
@endsection