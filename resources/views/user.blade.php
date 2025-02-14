<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry Sepatu - Bersihkan Sepatumu dengan Mudah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }

        .navbar-brand {
            font-weight: 600;
            color: #0d6efd;
        }

        .navbar-nav .nav-link {
    position: relative;
    padding: 0.5rem 1rem;
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #0d6efd;
    transform: translateX(-50%);
    transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover:before,
.navbar-nav .nav-link.active:before {
    width: 80%;
}

.navbar-nav .nav-link.active {
    color: #0d6efd !important;
    font-weight: 500;
}

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(13,110,253,0.9), rgba(13,110,253,0.6)), 
                        url('https://source.unsplash.com/1600x900/?shoes-cleaning') no-repeat center center/cover;
            min-height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            position: relative;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(to top, rgba(248,249,250,1), transparent);
        }

        /* Service Cards */
        .card-service {
            border: none;
            border-radius: 20px;
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-service:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: #e7f1ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: #0d6efd;
        }

        /* Order Form */
        .order-form {
            background: white;
            border-radius: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            padding: 40px;
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            padding: 15px;
            border-radius: 15px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #0d6efd;
            box-shadow: none;
        }

        /* Status Timeline */
        .status-timeline {
            position: relative;
            padding-left: 50px;
        }

        .status-point {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #0d6efd;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .status-point::before {
            content: '';
            position: absolute;
            height: 100%;
            width: 2px;
            background: #e9ecef;
            left: 50%;
            top: -100%;
        }

        /* Add to your existing <style> tag */
.price-tag {
    background: #e7f1ff;
    color: #0d6efd;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    display: inline-block;
}

.card-service {
    border: none;
    border-radius: 20px;
    transition: all 0.3s ease;
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.card-service:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.rounded-4 {
    border-radius: 20px;
}

.list-unstyled li {
    margin-bottom: 8px;
    font-size: 0.9rem;
}

/* Add to existing style */
.floating-whatsapp {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
    background: #25d366;
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.floating-whatsapp:hover {
    transform: scale(1.1);
    color: white;
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: #e7f1ff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    transition: all 0.3s ease;
}

.feature-icon:hover {
    transform: translateY(-5px);
    background: #0d6efd;
}

.feature-icon:hover i {
    color: white !important;
}

.timeline {
    position: relative;
    padding-left: 50px;
}

.timeline-item {
    position: relative;
    padding-bottom: 1.5rem;
    padding-left: 1.5rem;
    border-left: 2px solid #e9ecef;
}

.timeline-item.active {
    border-left-color: #0d6efd;
}

.timeline-item:last-child {
    padding-bottom: 0;
}

.status-point {
    width: 12px;
    height: 12px;
    background: #e9ecef;
    border-radius: 50%;
    position: absolute;
    left: -7px;
    top: 5px;
}

.timeline-item.active .status-point {
    background: #0d6efd;
}

.badge {
    padding: 0.5rem 1rem;
    border-radius: 30px;
}

.table th {
    font-weight: 600;
}

.footer-title {
    position: relative;
    padding-bottom: 0.5rem;
}

.footer-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 50px;
    background-color: #0d6efd;
}

.footer-links a {
    transition: all 0.3s ease;
}

.footer-links a:hover {
    color: #fff !important;
    padding-left: 5px;
}

.social-icon {
    transition: all 0.3s ease;
}

.social-icon:hover {
    color: #0d6efd !important;
    transform: translateY(-3px);
}

.contact-info i {
    width: 20px;
}

.skeleton {
    animation: skeleton-loading 1s linear infinite alternate;
}

/* Rating Stars Styles */
.rating-stars {
    display: inline-flex;
    flex-direction: row-reverse;
    gap: 0.5rem;
}

.rating-stars input {
    display: none;
}

.rating-stars label {
    cursor: pointer;
    font-size: 2rem;
    color: #e4e4e4;
    transition: all 0.2s ease;
}

.rating-stars label:hover,
.rating-stars label:hover ~ label,
.rating-stars input:checked ~ label {
    color: #ffc107;
}

.rating-stars label:hover,
.rating-stars label:hover ~ label {
    transform: scale(1.1);
}

@keyframes skeleton-loading {
    0% {
        background-color: hsl(200, 20%, 95%);
    }
    100% {
        background-color: hsl(200, 20%, 99%);
    }
}

        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero {
                min-height: 80vh;
                text-align: center;
            }

            .card-service {
        margin-bottom: 1rem;
    }

    .navbar-brand {
        font-size: 1.2rem;
    }

            .order-form {
                padding: 20px;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-shoe-prints me-2"></i>
                Laundry Sepatu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#order">Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#history">Pesanan Saya</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#profile"><i class="fas fa-user me-2"></i>Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate-fadeInUp">
                    <h1 class="display-4 fw-bold mb-4">Buat Sepatumu<br>Seperti Baru Lagi!</h1>
                    <p class="lead mb-4">Layanan profesional dengan teknologi modern untuk hasil terbaik</p>
                    <div class="d-flex gap-3">
                        <a href="#order" class="btn btn-light btn-lg">
                            <i class="fas fa-shopping-cart me-2"></i>Pesan Sekarang
                        </a>
                        <a href="#services" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-info-circle me-2"></i>Info Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold mb-2">LAYANAN KAMI</h6>
                <h2 class="fw-bold mb-4">Pilih Layanan Sesuai Kebutuhan</h2>
            </div>
    
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="card card-service h-100">
                            <div class="card-body text-center p-4">
                                <div class="service-icon">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <h5 class="card-title mb-3">{{ $service->name }}</h5>
                                <p class="card-text text-muted mb-3">{{ $service->description }}</p>
                                <ul class="list-unstyled text-start mb-4">
                                    @foreach ($service->details as $detail)
                                        <li>
                                            <i class="fas fa-check text-primary me-2"></i>
                                            {{ $detail->item }} - Rp {{ number_format($detail->price, 0, ',', '.') }}
                                        </li>
                                    @endforeach
                                </ul>
                                @auth
                                    <a href="#order" class="btn btn-primary w-100">Pesan Sekarang</a>
                                @else
                                    <button type="button" class="btn btn-primary w-100" onclick="showLoginAlert()">
                                        <i class="fas fa-lock me-2"></i>Login untuk Pesan
                                    </button>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold mb-2">FITUR UNGGULAN</h6>
                <h2 class="fw-bold mb-4">Mengapa Memilih Kami?</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Free Pickup & Delivery -->
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-truck text-primary fs-3"></i>
                        </div>
                        <h5 class="mb-2">Gratis Antar Jemput</h5>
                        <p class="text-muted mb-0">Dalam radius 5km</p>
                    </div>
                </div>
    
                <!-- Quick Process -->
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-clock text-primary fs-3"></i>
                        </div>
                        <h5 class="mb-2">Proses Cepat</h5>
                        <p class="text-muted mb-0">Selesai dalam 24 jam</p>
                    </div>
                </div>
    
                <!-- Online Tracking -->
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-map-marker-alt text-primary fs-3"></i>
                        </div>
                        <h5 class="mb-2">Tracking Online</h5>
                        <p class="text-muted mb-0">Pantau status cucian</p>
                    </div>
                </div>
    
                <!-- Professional Staff -->
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-user-tie text-primary fs-3"></i>
                        </div>
                        <h5 class="mb-2">Staff Profesional</h5>
                        <p class="text-muted mb-0">Tenaga ahli berpengalaman</p>
                    </div>
                </div>
    
                <!-- Quality Guarantee -->
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-medal text-primary fs-3"></i>
                        </div>
                        <h5 class="mb-2">Garansi Kualitas</h5>
                        <p class="text-muted mb-0">Jaminan hasil terbaik</p>
                    </div>
                </div>
    
                <!-- Customer Support -->
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto mb-3">
                            <i class="fas fa-headset text-primary fs-3"></i>
                        </div>
                        <h5 class="mb-2">Layanan 24/7</h5>
                        <p class="text-muted mb-0">Dukungan pelanggan online</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section id="order" class="py-5">
        <div class="container">
            @auth
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="order-form">
                        <div class="text-center mb-4">
                            <h6 class="text-primary fw-bold mb-2">PEMESANAN</h6>
                            <h2 class="fw-bold mb-4">Form Pemesanan</h2>
                        </div>
                        <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data" id="orderForm">
                            @csrf
                            <!-- Customer Information -->
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">
                                        <i class="fas fa-user-circle text-primary me-2"></i>
                                        Informasi Pemesan
                                    </h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                            <input type="text" 
                                                   class="form-control" 
                                                   name="customer_name" 
                                                   placeholder="Masukkan nama lengkap"
                                                   value="{{ Auth::user()->name }}" 
                                                   required>
                                            <div class="form-text">Nama sesuai dengan pesanan</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Nomor WhatsApp <span class="text-danger">*</span></label>
                                            <input type="tel" 
                                                   class="form-control" 
                                                   name="customer_phone"
                                                   placeholder="Contoh: 08123456789"
                                                   pattern="[0-9]{10,13}"
                                                   required>
                                            <div class="form-text">Pastikan nomor WhatsApp aktif</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Service Items -->
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title mb-0">
                                            <i class="fas fa-shopping-cart text-primary me-2"></i>
                                            Item Pesanan
                                        </h5>
                                        <button type="button" class="btn btn-primary btn-sm" id="add-service">
                                            <i class="fas fa-plus me-2"></i>Tambah Item
                                        </button>
                                    </div>
                                    
                                    <div id="service-container">
                                        <div class="service-group mb-4">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Pilih Layanan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="items[0][service_id]" required>
                                                        <option value="">Pilih layanan...</option>
                                                        @foreach($services as $service)
                                                        <optgroup label="{{ $service->name }}">
                                                            @foreach($service->details as $detail)
                                                                <option value="{{ $detail->id }}" 
                                                                        data-price="{{ $detail->price }}">
                                                                    {{ $detail->item }} - Rp {{ number_format($detail->price, 0, ',', '.') }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Jumlah <span class="text-danger">*</span></label>
                                                    <input type="number" 
                                                           class="form-control" 
                                                           name="items[0][quantity]" 
                                                           min="1" 
                                                           max="10"
                                                           value="1" 
                                                           required>
                                                    <div class="form-text">Maksimal 10 pasang per layanan</div>
                                                </div>
                                                <div class="col-md-2 d-flex align-items-end">
                                                    <button type="button" class="btn btn-outline-danger remove-service d-none">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Foto Sepatu</label>
                                                <input type="file" 
                                                       class="form-control" 
                                                       name="items[0][images][]" 
                                                       accept="image/*" 
                                                       multiple>
                                                <div class="form-text">Upload maksimal 3 foto (tampak depan, samping, sol)</div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Order Summary -->
                                    <div class="alert alert-primary mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Total Pembayaran:</span>
                                            <span class="h5 mb-0" id="totalPrice">Rp 0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Delivery Method -->
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">
                                        <i class="fas fa-truck text-primary me-2"></i>
                                        Metode Pengiriman
                                    </h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-check card p-3">
                                                <input class="form-check-input" type="radio" name="delivery_option" 
                                                       value="pickup" id="pickup" checked>
                                                <label class="form-check-label" for="pickup">
                                                    <h6 class="mb-1">Pickup</h6>
                                                    <small class="text-muted">Kami jemput ke lokasi Anda</small>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check card p-3">
                                                <input class="form-check-input" type="radio" name="delivery_option" 
                                                       value="dropoff" id="dropoff">
                                                <label class="form-check-label" for="dropoff">
                                                    <h6 class="mb-1">Drop Off</h6>
                                                    <small class="text-muted">Antar ke toko kami</small>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="mt-3 pickup-address">
                                        <label class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                                        <textarea class="form-control" 
                                                  name="pickup_address" 
                                                  rows="3" 
                                                  placeholder="Contoh: Jl. Nama Jalan No.123, RT/RW, Kelurahan, Kecamatan, Kota"
                                                  required></textarea>
                                        <div class="form-text">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Gratis pengiriman untuk radius 5km
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Additional Notes -->
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">
                                        <i class="fas fa-sticky-note text-primary me-2"></i>
                                        Catatan Tambahan
                                    </h5>
                                    <textarea class="form-control" 
                                              name="notes" 
                                              rows="3"
                                              placeholder="Contoh: Sepatu putih nike, ada noda di bagian depan, tolong bersihkan bagian sol juga"></textarea>
                                    <div class="form-text">Tambahkan detail spesifik tentang sepatu atau request khusus</div>
                                </div>
                            </div>
    
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-shopping-cart me-2"></i>Pesan Sekarang
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </section>

    <!-- History Section -->
    @if(auth()->check() && $orders->count())
        <section id="history" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h6 class="text-primary fw-bold mb-2">RIWAYAT PESANAN</h6>
                    <h2 class="fw-bold mb-4">Pantau Status Pesanan Anda</h2>
                </div>

                <!-- Search and Filter -->
                <form method="GET" action="{{ route('home') }}" class="row mb-4">
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" name="order_number" class="form-control" placeholder="Cari nomor pesanan..." value="{{ request('order_number') }}">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                    </div>
                    <div class="col-md-4">
                        <select name="status" class="form-select">
                            <option value="">Semua Status</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                            <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Dalam Proses</option>
                            <option value="delivery" {{ request('status') == 'delivery' ? 'selected' : '' }}>Dalam Pengiriman</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                </form>

                <!-- Order History Table -->
                <div class="card border-0 shadow-sm">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>No. Pesanan</th>
                                    <th>Tanggal</th>
                                    <th>Layanan</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr>
                                    <td>{{ $order->order_number }}</td>
                                    <td>{{ $order->created_at->format('d M Y') }}</td>
                                    <td>
                                        @foreach($order->items as $item)
                                            {{ $item->serviceDetail->item }} (x{{ $item->quantity }})<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @php
                                            $statusClass = [
                                                'pending' => 'bg-warning',
                                                'processing' => 'bg-info',
                                                'delivery' => 'bg-primary',
                                                'completed' => 'bg-success'
                                            ];
                                        @endphp
                                        <span class="badge {{ $statusClass[$order->status] ?? 'bg-secondary' }}">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                    <td>Rp {{ number_format($order->items->sum(fn($item) => $item->serviceDetail->price * $item->quantity)) }}</td>
                                    <td>
                                        {{-- <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye me-1"></i>Detail
                                        </a> --}}
                                        <button type="button" 
                                        class="btn btn-sm btn-primary" 
                                        onclick="showOrderDetail('{{ $order->id }}')"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#detailModal">
                                    <i class="fas fa-eye me-1"></i>Detail
                                </button>
                                        @if ($order->status == 'completed')
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#ratingModal">
                                            <i class="fas fa-star me-1"></i>Rate
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Belum ada pesanan</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-4 d-flex justify-content-center">
                    {{ $orders->links() }}
                </div>
            </div>
        </section>
    @endif

    

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold mb-2">TESTIMONI</h6>
                <h2 class="fw-bold mb-4">Apa Kata Mereka?</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=John+Doe" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-1">John Doe</h6>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mb-0">"Hasil cucian sangat bersih, seperti baru lagi. Pelayanan ramah dan professional."</p>
                        </div>
                    </div>
                </div>
                <!-- Add 2 more testimonial cards -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4 mb-4">
                    <div class="footer-brand mb-4">
                        <i class="fas fa-shoe-prints text-primary me-2"></i>
                        <span class="h4 text-white">Laundry Sepatu</span>
                    </div>
                    <p class="text-white mb-4">Kami menyediakan layanan profesional untuk perawatan sepatu, tas, topi, dan helm dengan teknologi modern untuk hasil terbaik.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white social-icon">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" class="text-white social-icon">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" class="text-white social-icon">
                            <i class="fab fa-tiktok fa-lg"></i>
                        </a>
                    </div>
                </div>
    
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-white mb-4 footer-title">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2">
                            <a href="#home" class="text-white-50 text-decoration-none">Beranda</a>
                        </li>
                        <li class="mb-2">
                            <a href="#services" class="text-white-50 text-decoration-none">Layanan</a>
                        </li>
                        <li class="mb-2">
                            <a href="#order" class="text-white-50 text-decoration-none">Pemesanan</a>
                        </li>
                        <li class="mb-2">
                            <a href="#testimonials" class="text-white-50 text-decoration-none">Testimoni</a>
                        </li>
                    </ul>
                </div>
    
                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-white mb-4 footer-title">Layanan Kami</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2">
                            <a href="#services" class="text-white-50 text-decoration-none">Deep Clean</a>
                        </li>
                        <li class="mb-2">
                            <a href="#services" class="text-white-50 text-decoration-none">Fast Clean</a>
                        </li>
                        <li class="mb-2">
                            <a href="#services" class="text-white-50 text-decoration-none">Unyellowing</a>
                        </li>
                        <li class="mb-2">
                            <a href="#services" class="text-white-50 text-decoration-none">Repair</a>
                        </li>
                    </ul>
                </div>
    
                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4 footer-title">Hubungi Kami</h5>
                    <div class="contact-info">
                        <div class="d-flex mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                            <p class="text-white-50 mb-0">Jl. Contoh No. 123, Kota, Provinsi 12345</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fas fa-phone text-primary me-3 mt-1"></i>
                            <p class="text-white-50 mb-0">+62 812-3456-7890</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                            <p class="text-white-50 mb-0">info@laundrysepatu.com</p>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-clock text-primary me-3 mt-1"></i>
                            <div class="text-white-50">
                                <p class="mb-0">Senin - Sabtu: 08:00 - 20:00</p>
                                <p class="mb-0">Minggu: 09:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Copyright -->
            <div class="border-top border-secondary pt-4 mt-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="text-white-50 mb-0">&copy; 2025 Laundry Sepatu. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-white-50 text-decoration-none">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Order Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pesanan #<span id="orderNumber"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalContent">
                <div class="text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rating Modal -->
<div class="modal fade" id="ratingModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Beri Rating & Ulasan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                {{-- <form action="{{ route('orders.rate') }}" method="POST" id="ratingForm"> --}}
                    @csrf
                    <input type="hidden" name="order_id" value="">
                    
                    <!-- Star Rating -->
                    <div class="text-center mb-4">
                        <div class="rating-stars">
                            <input type="radio" name="rating" value="5" id="star5">
                            <label for="star5"><i class="fas fa-star"></i></label>
                            
                            <input type="radio" name="rating" value="4" id="star4">
                            <label for="star4"><i class="fas fa-star"></i></label>
                            
                            <input type="radio" name="rating" value="3" id="star3">
                            <label for="star3"><i class="fas fa-star"></i></label>
                            
                            <input type="radio" name="rating" value="2" id="star2">
                            <label for="star2"><i class="fas fa-star"></i></label>
                            
                            <input type="radio" name="rating" value="1" id="star1">
                            <label for="star1"><i class="fas fa-star"></i></label>
                        </div>
                        <small class="text-muted">Klik untuk memberi rating</small>
                    </div>

                    <!-- Review Text -->
                    <div class="mb-3">
                        <label class="form-label">Ulasan Anda</label>
                        <textarea class="form-control" name="review" rows="3" 
                            placeholder="Bagikan pengalaman Anda menggunakan layanan kami"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Kirim Rating & Ulasan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

    {{-- // Add before closing body tag --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    });

    document.querySelectorAll('.card, .feature-icon').forEach((el) => observer.observe(el));

    // ratign form

     // Set order ID when opening rating modal
     const ratingModal = document.getElementById('ratingModal');
    if (ratingModal) {
        ratingModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const orderId = button.getAttribute('data-order-id');
            this.querySelector('input[name="order_id"]').value = orderId;
        });
    }

    // Handle rating form submission
    const ratingForm = document.getElementById('ratingForm');
    if (ratingForm) {
        ratingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Mengirim...';
            submitBtn.disabled = true;

            // Submit form
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Terima Kasih!',
                        text: 'Rating & ulasan Anda telah berhasil dikirim'
                    }).then(() => {
                        bootstrap.Modal.getInstance(ratingModal).hide();
                        window.location.reload();
                    });
                } else {
                    throw new Error(data.message || 'Terjadi kesalahan');
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: error.message
                });
            })
            .finally(() => {
                submitBtn.innerHTML = 'Kirim Rating & Ulasan';
                submitBtn.disabled = false;
            });
        });
    }
});

function showLoginAlert() {
    Swal.fire({
        title: 'Login Diperlukan',
        text: 'Silakan login terlebih dahulu untuk melakukan pemesanan',
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'Login',
        cancelButtonText: 'Nanti',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}";
        }
    });
}

// Add loading states
document.querySelector('form').addEventListener('submit', function(e) {
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
    submitBtn.disabled = true;
});

// Add price calculator
function updateTotalPrice() {
    const service = document.querySelector('select[name="service_type"]');
    const quantity = document.querySelector('input[type="number"]');
    const price = service.options[service.selectedIndex].dataset.price;
    const total = price * quantity.value;
    document.getElementById('totalPrice').textContent = `Rp ${total.toLocaleString()}`;
}

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    function onScroll() {
        const scrollPos = window.pageYOffset || document.documentElement.scrollTop;
        const navHeight = document.querySelector('.navbar').offsetHeight;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - navHeight - 20;
            const sectionBottom = sectionTop + section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });

        // Handle case when at the top of the page
        if (scrollPos < 100) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#home') {
                    link.classList.add('active');
                }
            });
        }
    }

    // Smooth scroll for navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetSection = document.querySelector(href);
                const navHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetSection.offsetTop - navHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    window.addEventListener('scroll', onScroll);
    onScroll(); // Call once on load
});

document.getElementById('add-service').addEventListener('click', function () {
        let container = document.getElementById('service-container');
        let index = container.getElementsByClassName('service-group').length;
        let newService = document.querySelector('.service-group').cloneNode(true);
        
        newService.querySelector('select').name = `items[${index}][service_detail_id]`;
        newService.querySelector('input[type=number]').name = `items[${index}][quantity]`;
        newService.querySelector('input[type=number]').value = 1;
        
        let removeBtn = newService.querySelector('.remove-service');
        removeBtn.classList.remove('d-none');
        removeBtn.addEventListener('click', function () {
            newService.remove();
        });
        
        container.appendChild(newService);
    });


    // Add this to your existing script section
    function showOrderDetail(orderId) {
    const modal = document.getElementById('detailModal');
    const modalContent = document.getElementById('modalContent');
    
    // Show loading state
    modalContent.innerHTML = `
        <div class="text-center py-4">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-2 text-muted">Memuat detail pesanan...</p>
        </div>
    `;

    // Fetch order details
    fetch(`/orders/${orderId}/detail`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('orderNumber').textContent = data.order_number;

            const statusLabels = {
                'pending': 'Menunggu Konfirmasi',
                'processing': 'Dalam Proses',
                'delivery': 'Dalam Pengiriman',
                'completed': 'Selesai'
            };

            const statusColors = {
                'pending': 'warning',
                'processing': 'info',
                'delivery': 'primary',
                'completed': 'success'
            };

            let html = `
                <div class="order-detail-container">
                    <!-- Status Section -->
                    <div class="mb-4">
                        <span class="badge bg-${statusColors[data.status]} rounded-pill fs-6">
                            ${statusLabels[data.status]}
                        </span>
                    </div>

                    <!-- Progress Timeline -->
                    <div class="progress-timeline mb-5">
                        <div class="row g-0 text-center">
                            ${Object.entries(statusLabels).map(([status, label]) => `
                            <div class="col">
                                <div class="timeline-step ${data.status === status || getStatusOrder(data.status, status) ? 'active' : ''}">
                                    <div class="step-icon">
                                        <i class="bi bi-${status === 'completed' ? 'check2-circle' : 'circle'}"></i>
                                    </div>
                                    <div class="step-label">
                                        <small class="d-block fw-bold">${label}</small>
                                        <small class="text-muted">
                                            ${data.status_updates && data.status_updates[status] 
                                                ? new Date(data.status_updates[status]).toLocaleDateString('id-ID', { 
                                                    day: 'numeric', 
                                                    month: 'short', 
                                                    year: 'numeric',
                                                    hour: '2-digit',
                                                    minute: '2-digit'
                                                }) 
                                                : '-'}
                                        </small>
                                    </div>
                                </div>
                            </div>
                            `).join('')}
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Order Items -->
                        <div class="col-lg-7">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 fw-bold"><i class="bi bi-receipt me-2"></i>Rincian Pesanan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="list-group list-group-flush">
                                        ${data.items.map(item => `
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">${item.service_detail.item}</h6>
                                                <small class="text-muted">${item.quantity} x Rp ${item.service_detail.price.toLocaleString('id-ID')}</small>
                                            </div>
                                            <span class="fw-bold">Rp ${(item.service_detail.price * item.quantity).toLocaleString('id-ID')}</span>
                                        </div>
                                        `).join('')}
                                    </div>
                                    <div class="mt-3 d-flex justify-content-between align-items-center bg-light p-3 rounded">
                                        <h5 class="mb-0">Total</h5>
                                        <h5 class="mb-0 fw-bold text-primary">Rp ${data.total.toLocaleString('id-ID')}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Info -->
                        <div class="col-lg-5">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 fw-bold"><i class="bi bi-truck me-2"></i>Informasi Pengiriman</h6>
                                </div>
                                <div class="card-body">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4">Nama</dt>
                                        <dd class="col-sm-8">${data.customer_name}</dd>

                                        <dt class="col-sm-4">WhatsApp</dt>
                                        <dd class="col-sm-8">${data.customer_phone}</dd>

                                        <dt class="col-sm-4">Metode</dt>
                                        <dd class="col-sm-8">${data.delivery_option === 'pickup' ? '<i class="bi bi-box-seam me-1"></i> Pickup' : '<i class="bi bi-house-door me-1"></i> Drop Off'}</dd>

                                        <dt class="col-sm-4">Alamat</dt>
                                        <dd class="col-sm-8">${data.pickup_address || '<em class="text-muted">-</em>'}</dd>

                                        <dt class="col-sm-4">Catatan</dt>
                                        <dd class="col-sm-8">${data.notes || '<em class="text-muted">-</em>'}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            modalContent.innerHTML = html;
        })
        .catch(error => {
            modalContent.innerHTML = `
                <div class="alert alert-danger d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <div>Gagal memuat detail pesanan. Silakan coba lagi.</div>
                </div>
            `;
            console.error('Error:', error);
        });
}

function getStatusOrder(currentStatus, checkStatus) {
    const statusOrder = ['pending', 'processing', 'delivery', 'completed'];
    const currentIndex = statusOrder.indexOf(currentStatus);
    const checkIndex = statusOrder.indexOf(checkStatus);
    return checkIndex <= currentIndex;
}
</script>
</body>
</html>