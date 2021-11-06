@extends('admin.home')

@section('rightDashboardContent')
<div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Plate name</th>
            <th scope="col">Plate ingredients</th>
            <th scope="col">Plate description</th>
            <th scope="col">Plate course</th>
            <th scope="col">Plate price</th>
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
          </tr>
          @empty
          'No plates'
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