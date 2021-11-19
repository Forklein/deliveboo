@component('mail::message')

Thank you for your order, {{ $order->name }}!

Your order #{{$order->id}} will be deliverd to {{ $order->address }} - 21137 Milano. 

@endcomponent