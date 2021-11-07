@extends('admin.home')

@section('rightDashboardContent')
<div>
    <div class="text-right"><a class="btn btn-success" href="{{route('admin.plates.create')}}">Create Plate</a></div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Plate ID</th>
            <th scope="col">Plate name</th>
            <th scope="col">Plate ingredients</th>
            <th scope="col">Plate description</th>
            <th scope="col">Plate course</th>
            <th scope="col">Plate price</th>
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