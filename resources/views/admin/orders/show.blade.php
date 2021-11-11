@extends('admin.home')

@section('rightDashboardContent')
<div>
  {{-- @if($order->plates->contains(Auth::id())) --}}
    <div>
      <h1 class="txt-oxford">Customer Info</h1>
      <div class="table-responsive">
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
      </div>
        <hr class="py-4">
        <h1 class="mt-4 txt-oxford">Customer Cart</h1>
        <div class="table-responsive">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Items</th>
                  <th scope="col">Single Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total Price</th>
                </tr>
              </thead>
              <tbody>
                @if($plates)
                  @foreach($plates as $plate_trashed)
                  <p>{{$plate_trashed->id}}</p>
                  @endforeach
                @endif
                  @foreach($order->plates as $plate)
                      <tr>
                          <td>{{$plate->name}}</td>
                          <td>{{$plate->price}}€</td>
                          <td>{{$plate->pivot->quantity}}</td>
                          <td>{{$plate->price * $plate->pivot->quantity}}€</td>
                      </tr>
                  @endforeach
                  <td class="font-weight-bold">Total: {{ $order->total }}€ </td>
              </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-end">
          <a href="{{route('admin.orders.index')}}" class="btn btn-oxford">Back to Orders</a>
        </div>
    </div>
</div>
    
@endsection