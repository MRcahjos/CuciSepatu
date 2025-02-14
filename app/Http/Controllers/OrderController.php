<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Menampilkan daftar pesanan pelanggan
    public function index(Request $request)
    {
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

        // Ambil data pesanan
        $orders = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('user', compact('orders'));
    }

    // Menampilkan form pemesanan
    public function create()
    {
        $services = Service::with('details')->get(); // Mengambil layanan dan detailnya
        return view('orders.create', compact('services'));
    }

    // Menyimpan pesanan baru
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'items' => 'required|array',
            'items.*.service_detail_id' => 'required|exists:service_details,id', // Ubah dari service_detail_id ke service_id
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.images' => 'nullable|array', // Ubah dari shoe_images ke images agar sesuai dengan form
            'items.*.images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'delivery_option' => 'required|in:pickup,dropoff', // Ubah dari delivery_method ke delivery_option
            'pickup_address' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $orderNumber = Order::generateOrderNumber();

        $order = Order::create([
            'order_number' => $orderNumber,
            'user_id' => Auth::id(),
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'delivery_method' => $request->delivery_option, // Ubah sesuai form
            'pickup_address' => $request->pickup_address,
            'notes' => $request->notes,
            'status' => 'pending',
        ]);

        foreach ($request->items as $item) {
            $images = [];
            if (!empty($item['images'])) { // Ubah shoe_images ke images
                foreach ($item['images'] as $image) {
                    $path = $image->store('shoe_images', 'public');
                    $images[] = $path;
                }
            }
        
            OrderItem::create([
                'order_id' => $order->id,
               'service_detail_id' => $item['service_detail_id'],  // Ubah service_detail_id ke service_id
                'quantity' => $item['quantity'],
                'shoe_images' => json_encode($images), // Simpan dalam format JSON
            ]);
        }

        return redirect()->route('home')->with('success', "Pesanan berhasil dibuat! Nomor Order: $orderNumber");
    }

    // Menampilkan detail pesanan tertentu
    public function show(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        return view('orders.show', compact('order'));
    }

    public function detail(Order $order)
    {
        $order->load('items.serviceDetail');
        $order->total = $order->items->sum(function($item) {
            return $item->serviceDetail->price * $item->quantity;
        });
        
        return response()->json($order);
    }

    public function rate(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:500',
        ]);

        $order = Order::findOrFail($request->order_id);

        if ($order->status !== 'completed' || $order->hasRated()) {
            return response()->json(['success' => false, 'message' => 'Pesanan belum selesai atau sudah diberi rating'], 400);
        }

        $order->rating = $request->rating;
        $order->review = $request->review;
        $order->rated_at = now();
        $order->save();

        return response()->json(['success' => true]);
    }
}
