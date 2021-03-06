@extends('admin.home')

@section('rightDashboardContent')
<div><h1 class="txt-oxford">Your Orders</h1></div>
<div class="table-responsive overflow-auto vh-40">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Date</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
            <th>Utilities</th>
          </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td class="align-middle">{{$order->id}}</td>
                    <td class="align-middle">{{$order->name}}</td>
                    <td class="align-middle">{{$order->surname}}</td>
                    <td class="align-middle">{{$order->getFormattedDate('created_at')}}</td>
                    <td class="align-middle">{{$order->total}}€</td>
                    <td class="align-middle text-center font-weight-bold {{($order->status) ? 'text-success' : 'text-danger'}}">{{($order->status) ? 'Paid' : 'Unpaid'}}</td>
                    <td class="align-middle"><a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-oxford button-trigger">Show Details</a></td>
                </tr>
            @empty
                <tr colspan="4">No Orders</tr>
            @endforelse
        </tbody>
    </table>
</div>



    
@endsection

