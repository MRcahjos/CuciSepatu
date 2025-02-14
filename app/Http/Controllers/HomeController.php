<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Order;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data layanan dengan detailnya
        $services = Service::with('details')->get();

        // Ambil riwayat pesanan hanya untuk user yang login
        $orders = [];
        if (Auth::check()) {
            $query = Order::with(['items.serviceDetail'])
                ->where('user_id', Auth::id());

            // Filter berdasarkan nomor pesanan
            if ($request->has('order_number') && $request->order_number != '') {
                $query->where('order_number', 'LIKE', '%' . $request->order_number . '%');
            }

            // Filter berdasarkan tanggal
            if ($request->has('date') && $request->date != '') {
                $query->whereDate('created_at', $request->date);
            }

            // Filter berdasarkan status
            if ($request->has('status') && $request->status != '') {
                $query->where('status', $request->status);
            }

            // Ambil data pesanan dengan pagination
            $orders = $query->orderBy('created_at', 'desc')->paginate(10);
        }

        $testimonials = Order::whereNotNull('rating')
            ->whereNotNull('review')
            ->orderBy('rated_at', 'desc')
            ->take(6) // Ambil maksimal 6 testimoni terbaru
            ->get();

        return view('user', compact('services', 'orders', 'testimonials'));
    }

    public function getOrderDetails($id)
    {
        $order = Order::with(['items.serviceDetail'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);
    
        // Format tanggal status untuk ditampilkan di timeline
        $statusDates = [
            'pending' => $order->created_at->format('d M Y, H:i'),
            'processing' => $order->processing_at ? $order->processing_at->format('d M Y, H:i') : "-",
            'delivery' => $order->delivery_at ? $order->delivery_at->format('d M Y, H:i') : "-",
            'completed' => $order->completed_at ? $order->completed_at->format('d M Y, H:i') : "-"
        ];
    
        return response()->json([
            'order_number' => $order->order_number,
            'status' => $order->status,
            'status_dates' => $statusDates,
            'delivery_method' => $order->delivery_method,
            'pickup_address' => $order->pickup_address,
            'items' => $order->items->map(function ($item) {
                return [
                    'serviceDetail' => [
                        'item' => $item->serviceDetail->item,
                        'price' => $item->serviceDetail->price
                    ],
                    'quantity' => $item->quantity
                ];
            })
        ]);
    }
    

}
