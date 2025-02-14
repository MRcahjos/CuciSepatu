@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Pesanan</h2>
    
    <form method="GET" action="{{ route('admin.orders.index') }}" class="mb-3">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Pesanan..." class="form-control">
    </form>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nomor Pesanan</th>
                <th>Nama Customer</th>
                <th>Metode Pengiriman</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ ucfirst($order->delivery_method) }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links() }}
</div>
@endsection