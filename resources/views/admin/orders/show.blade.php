@extends('admin.home')

@section('rightDashboardContent')
<div>
  {{-- @if($order->plates->contains(Auth::id())) --}}
    <div>
      <h1>Customer Info</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->surname}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->mail}}</td>
                    </tr>
            </tbody>
        </table>
        <hr class="py-4">
        <h1 class="mt-4">Customer Cart</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Items</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach($order->plates as $plate)
                    <tr>
                        <td>{{$plate->name}}</td>
                        <td>{{$plate->pivot->quantity}}</td>
                        <td>{{$plate->price}}</td>
                    </tr>
                @endforeach
                <td class="font-weight-bold">Total: {{ $order->total }} </td>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
          <a href="{{route('admin.orders.index')}}" class="btn btn-primary">Back to Orders</a>
        </div>
    </div>
</div>
    
@endsection