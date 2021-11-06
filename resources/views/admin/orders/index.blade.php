@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @dd($orders->plates)
                @forelse($plates->orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                </tr>
                @empty No orders
                @endforelse
            </tbody>
        </table>
    </div>
@endsection