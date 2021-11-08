@extends('admin.home')

@section('rightDashboardContent')
<div>
    <div>
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
        <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th scope="col">Items</th>
                <th scope="col">Quantity</th>
              </tr>
            </thead>
            <tbody>
                @foreach($order->plates as $plate)
                    <tr>
                        <td>{{$plate->name}}</td>
                        <td>{{$plate->pivot->quantity}}</td>
                    </tr>
                @endforeach
                <td class="font-weight-bold">Total: {{ $order->total }} </td>
            </tbody>
        </table>
    </div>
</div>
    
@endsection