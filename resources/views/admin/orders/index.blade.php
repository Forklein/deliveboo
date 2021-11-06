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
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach($plates as $plate)
                    @if($plate->orders)
                    @foreach($plate->orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->surname}}</td>
                        <td>{{$order->total}}€</td>
                    </tr>
                    @endforeach
                    @else
                    <tr colspan="4">No Orders</tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection

