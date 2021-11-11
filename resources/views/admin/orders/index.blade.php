@extends('admin.home')

@section('rightDashboardContent')
<div>
    <div>
        <div><h1 class="txt-oxford">Your Orders</h1></div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Date</th>
                    <th scope="col">Total</th>
                    <th scope="col">
                        <details class="text-dark text-center">
                            <summary>Total Orders</summary>
                            <span>{{count($orders)}}</span>
                        </details>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->surname}}</td>
                            <td>{{$order->getFormattedDate('created_at')}}</td>
                            <td>{{$order->total}}€</td>
                            <td></td>
                            <td class="text-right"><a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-oxford">Show Details</a></td>
                            @empty
                            <tr><td colspan="6">No Orders</td></tr>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection

