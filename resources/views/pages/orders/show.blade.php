@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detail Pesanan: {{ $order->order_number }}</h2>
    <p><strong>Nama Customer:</strong> {{ $order->customer_name }}</p>
    <p><strong>Metode Pengiriman:</strong> {{ ucfirst($order->delivery_method) }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    <p><strong>Catatan:</strong> {{ $order->notes ?: '-' }}</p>
    
    <h4>Item Pesanan</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Layanan</th>
                <th>Jumlah</th>
                <th>Gambar Sepatu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <td>{{ $item->serviceDetail->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>
                        @if ($item->shoe_images)
                            @foreach (json_decode($item->shoe_images) as $image)
                                <img src="{{ asset('storage/' . $image) }}" width="50" alt="Sepatu">
                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <form method="POST" action="{{ route('admin.orders.updateStatus', $order->id) }}">
        @csrf
        @method('PATCH')
        <label for="status">Ubah Status</label>
        <select name="status" id="status" class="form-control">
            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection