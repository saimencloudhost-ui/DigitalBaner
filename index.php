<?php
/**
 * PORTAL DIGITAL BANER - TV SIGNAGE LANDING PAGE
 * Modern, Formal, Elegant, Responsive Digital Signage Promotion Landing Page
 * Brand: DigitalBaner (digitalbaner.id)
 * Language: PHP 8.x, Bootstrap 5.3, Vanilla JS & Custom CSS
 */

$pageTitle = "DigitalBaner - Solusi TV Signage & Digital Display Board Modern";
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DigitalBaner - Platform Management TV Signage Digital Terpercaya untuk Restoran, Kantor, Rumah Sakit, & Retail. 1 Kali Beli, Pakai Selamanya!">
    <meta name="keywords" content="digitalbaner, TV signage, digital signage indonesia, menu board digital, portal digital baner, layar antrean rs, display promosi toko">
    <meta name="author" content="DigitalBaner Team">
    
    <title><?= htmlspecialchars($pageTitle); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#home">
                <span class="brand-icon"><i class="bi bi-tv-fill"></i></span>
                <span>Digital<span class="text-primary">Baner</span></span>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur Utama</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solusi">Solusi Industri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#harga">Harga Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <a href="#demo" class="btn btn-primary-custom">
                        <i class="bi bi-calendar2-check-fill me-1"></i> Coba Demo Gratis
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <div class="pe-lg-3">
                        <div class="badge-tag mb-3">
                            <span class="pulse-dot"></span>
                            PLATFORM DIGITAL SIGNAGE CLOUD NO. 1
                        </div>
                        <h1 class="hero-title mb-4">
                            Ubah Layar TV Biasa Menjadi <span class="text-gradient">Media Informasi & Promosi</span> Modern
                        </h1>
                        <p class="hero-desc mb-4">
                            Kelola tampilan TV Signage di berbagai lokasi secara terpusat lewat <strong>DigitalBaner</strong>. Solusi hemat: 1 Kali Beli, Pakai Selamanya tanpa biaya langganan bulanan!
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#demo" class="btn btn-primary-custom btn-lg">
                                <i class="bi bi-rocket-takeoff-fill me-2"></i> Mulai Demo Gratis
                            </a>
                            <a href="#fitur" class="btn btn-outline-custom btn-lg">
                                <i class="bi bi-grid-fill me-2 text-primary"></i> Lihat Fitur Utama
                            </a>
                        </div>

                        <!-- Trust Mini Badges -->
                        <div class="mt-4 pt-3 border-top d-flex align-items-center gap-4 text-muted small">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-shield-check text-success fs-5"></i>
                                <span>1x Beli Pakai Selamanya</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-hdd-network text-primary fs-5"></i>
                                <span>Suport Multi-Hardware</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TV Showcase Preview Frame -->
                <div class="col-lg-6">
                    <div class="tv-container">
                        <div class="tv-frame">
                            <!-- Overlay Top Header -->
                            <div class="tv-overlay-header">
                                <span class="tv-channel-badge" id="tvBadge">DIGITAL MENU BOARD</span>
                                <div class="tv-clock">
                                    <i class="bi bi-clock-history text-cyan"></i>
                                    <span id="tvClockText">14:00:00 WIB</span>
                                </div>
                            </div>

                            <!-- Screen Display Area -->
                            <div class="tv-screen">
                                <img id="tvScreenImg" src="assets/images/menu_board.jpg" alt="DigitalBaner Signage Screen" class="img-fluid">
                            </div>

                            <!-- Overlay Ticker Bar -->
                            <div class="tv-ticker">
                                <span class="tv-ticker-tag" id="tvTickerTag">PROMO SPESIAL</span>
                                <div class="tv-ticker-text" id="tvTickerText">
                                    🔥 PROMO HARI INI: Diskon 30% Paket Combo Burger & Drinks | Buka setiap hari 10:00 - 22:00 WIB
                                </div>
                            </div>

                            <div class="tv-brand-logo">DIGITALBANER DISPLAY</div>
                            <div class="tv-led"></div>
                        </div>
                        <div class="tv-stand"></div>
                        <div class="tv-stand-base"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="fitur" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-subtitle">FITUR UNGGULAN</span>
                <h2 class="section-title">Semua Kontrol Layar Dalam Satu Dashboard</h2>
                <p class="section-desc">
                    Dirancang untuk memudahkan pengelolaan konten digital display dari mana saja tanpa perlu mengoperasikan setiap TV secara manual.
                </p>
            </div>

            <div class="row g-4">
                <!-- Feature Item 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon-box">
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                        </div>
                        <h4>Kelola Terpusat via Cloud</h4>
                        <p>Upload video, gambar, poster, dan update harga produk ke puluhan TV secara serentak hanya lewat web browser.</p>
                    </div>
                </div>

                <!-- Feature Item 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon-box">
                            <i class="bi bi-grid-1x2-fill"></i>
                        </div>
                        <h4>Layout Multi-Zone Widget</h4>
                        <p>Bagi layar TV menjadi beberapa zona: video promosi, Banner Infromasi,Promo Produk.</p>
                    </div>
                </div>

                <!-- Feature Item 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon-box">
                            <i class="bi bi-wifi-off"></i>
                        </div>
                        <h4>Mode Offline Handal</h4>
                        <p>Tampilan TV akan tetap berjalan secara lancar tanpa henti meskipun koneksi internet di lokasi terputus sementara.</p>
                    </div>
                </div>

                <!-- Feature Item 4 -->
                
                <!-- Feature Item 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon-box">
                            <i class="bi bi-display-fill"></i>
                        </div>
                        <h4>Mendukung Banyak Hardware</h4>
                        <p>Kompatibel dengan Android Smart TV, WebOS LG, Tizen Samsung, Windows PC, hingga Set-Top Box windows terjangkau.</p>
                    </div>
                </div>

                <!-- Feature Item 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon-box">
                            <i class="bi bi-infinity"></i>
                        </div>
                        <h4>1 Kali Beli, Pakai Selamanya</h4>
                        <p>Lisensi hemat tanpa biaya langganan bulanan maupun tahunan. Sekali investasi untuk pemakaian jangka panjang.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS & COUNTER BANNER -->
    <section class="container my-4" id="statsSection">
        <div class="stats-banner text-center">
            <div class="row gy-4">
                <div class="col-6 col-md-3">
                    <div class="stat-number" data-target="1500" data-suffix="+">0</div>
                    <div class="stat-label">Layar TV Terhubung</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number" data-target="99" data-suffix=".9%">0</div>
                    <div class="stat-label">System Uptime</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number" data-target="450" data-suffix="+">0</div>
                    <div class="stat-label">Klien Bisnis Terpercaya</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number" data-target="24" data-suffix="/7">0</div>
                    <div class="stat-label">Dukungan Teknis</div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRY SOLUTIONS SECTION -->
    <section id="solusi" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-subtitle">SOLUSI SEKTOR</span>
                <h2 class="section-title">Didesain Khusus Untuk Berbagai Industri</h2>
                <p class="section-desc">
                    Tingkatkan efisiensi komunikasi visual dan penjualan Anda dengan template yang dirancang khusus per sektor bisnis.
                </p>
            </div>

            <div class="row g-4">
                <!-- Solution 1: Restaurant -->
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card h-100">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="bi bi-shop"></i>
                            </div>
                            <h5 class="mb-0">Kuliner & F&B</h5>
                        </div>
                        <div class="solution-body">
                            <ul class="solution-list">
                                <li><i class="bi bi-check-circle-fill"></i> Digital Menu Board Dinamis</li>
                                <li><i class="bi bi-check-circle-fill"></i> Highlight Menu Best Seller</li>
                                <li><i class="bi bi-check-circle-fill"></i> Update Harga Instant</li>
                                <li><i class="bi bi-check-circle-fill"></i> Integrasi Nomor Panggilan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Solution 2: Corporate -->
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card h-100">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>
                            <h5 class="mb-0">Perkantoran</h5>
                        </div>
                        <div class="solution-body">
                            <ul class="solution-list">
                                <li><i class="bi bi-check-circle-fill"></i> Dashboard KPI & Target</li>
                                <li><i class="bi bi-check-circle-fill"></i> Jadwal Ruang Rapat</li>
                                <li><i class="bi bi-check-circle-fill"></i> Pengumuman HRD & Event</li>
                                <li><i class="bi bi-check-circle-fill"></i> Ucapan Selamat Datang Tamu</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Solution 3: Healthcare -->
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card h-100">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div>
                            <h5 class="mb-0">Rumah Sakit</h5>
                        </div>
                        <div class="solution-body">
                            <ul class="solution-list">
                                <li><i class="bi bi-check-circle-fill"></i> Tampilan Nomor Antrean Pasien</li>
                                <li><i class="bi bi-check-circle-fill"></i> Jadwal Praktik Dokter</li>
                                <li><i class="bi bi-check-circle-fill"></i> Edukasi & Tips Kesehatan</li>
                                <li><i class="bi bi-check-circle-fill"></i> Denah & Info Fasilitas</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Solution 4: Retail -->
                <div class="col-lg-3 col-md-6">
                    <div class="solution-card h-100">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="bi bi-cart-fill"></i>
                            </div>
                            <h5 class="mb-0">Retail & Store</h5>
                        </div>
                        <div class="solution-body">
                            <ul class="solution-list">
                                <li><i class="bi bi-check-circle-fill"></i> Video Commercial Produk</li>
                                <li><i class="bi bi-check-circle-fill"></i> Banner Flash Sale & Diskon</li>
                                <li><i class="bi bi-check-circle-fill"></i> New Arrival Collection</li>
                                <li><i class="bi bi-check-circle-fill"></i> Katalog Interaktif</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SINGLE LIFETIME PRICING SECTION -->
    <section id="harga" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-subtitle">PAKET & INVESTASI</span>
                <h2 class="section-title">Pilihan Paket Sesuai Skala Bisnis Anda</h2>
                <p class="section-desc">
                    Nikmati kemudahan pengelolaan TV Signage tanpa beban biaya bulanan. Solusi sekali investasi untuk bisnis Anda.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <!-- Single Lifetime Plan Featured Card -->
                    <div class="pricing-card popular text-center p-4 p-md-5">
                        <span class="pricing-badge">PROMO TERTERBATAS &bull; ONE-TIME PAYMENT</span>
                        
                        <div class="my-3">
                            <h3 class="display-6 font-weight-bold mb-2">Paket Lifetime DigitalBaner</h3>
                            <div class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-pill font-weight-bold fs-6 my-2">
                                🔥 1 Kali Beli, Pakai Selamanya!
                            </div>
                        </div>

                        <p class="text-muted max-w-600 mx-auto">
                            Bebas dari biaya langganan bulanan maupun tahunan. Bayar sekali dan nikmati seluruh fitur canggih DigitalBaner tanpa batas waktu.
                        </p>

                        <div class="pricing-price justify-content-center my-4">
                            <span class="text-decoration-line-through text-muted fs-4 me-2">Rp 2.500.000</span>
                            <span class="text-primary font-weight-bold">Rp 990.000</span>
                            <span class="fs-6 text-success font-weight-bold d-block mt-1"><i class="bi bi-check-circle-fill me-1"></i> Lisensi Permanen (Tanpa Biaya Bulanan)</span>
                        </div>

                        <hr class="my-4 opacity-10">

                        <!-- Features Grid (2 Columns) -->
                        <div class="row text-start g-3 my-2">
                            <div class="col-md-6">
                                <ul class="pricing-features my-0">
                                    <li><i class="bi bi-patch-check-fill text-success fs-5"></i> <span><strong>Lisensi Permanen</strong>: 1x Beli Pakai Selamanya</span></li>
                                    <li><i class="bi bi-patch-check-fill text-success fs-5"></i> <span><strong>Unlimited Media</strong>: Bebas Upload Video,Gambar dan Device.</span></li>
                                    <li><i class="bi bi-patch-check-fill text-success fs-5"></i> <span><strong>Multi-Zone Layout</strong>: Desain Tampilan TV Bebas Area</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="pricing-features my-0">
                                    <li><i class="bi bi-patch-check-fill text-success fs-5"></i> <span><strong>Mode Offline Resilience</strong>: Tetap Tayang Tanpa Internet</span></li>
                                    <li><i class="bi bi-patch-check-fill text-success fs-5"></i> <span><strong>Free Software Update</strong>: Pembaruan Fitur Gratis Selamanya</span></li>
                                    <li><i class="bi bi-patch-check-fill text-success fs-5"></i> <span><strong>Garansi & Priority Support</strong>: Bantuan via WhatsApp 24/7</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 pt-3">
                            <a href="#demo" class="btn btn-primary-custom btn-lg px-5 py-3 fs-5 shadow-lg">
                                <i class="bi bi-cart-check-fill me-2"></i> Dapatkan Lisensi Lifetime Sekarang
                            </a>
                            <p class="text-muted small mt-3 mb-0">
                                <i class="bi bi-info-circle-fill text-primary me-1"></i> *Harga diluar dari Biaya Cloud Domain Hosting dan VPS.!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ ACCORDION SECTION -->
    <section id="faq" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-subtitle">PERTANYAAN UMUM</span>
                <h2 class="section-title">Sering Ditanyakan (FAQ)</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-custom" id="faqAccordion">
                        <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq0">
                                    Apakah benar-benar 1 kali beli dan tanpa biaya bulanan?
                                </button>
                            </h2>
                            <div id="faq0" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Ya, betul sekali! Sistem lisensi DigitalBaner menggunakan metode <i>One-Time Payment</i>. Anda cukup membayar satu kali saat pembelian dan dapat menggunakannya selamanya tanpa perlu khawatir tagihan bulanan atau tahunan.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apakah saya butuh Smart TV khusus untuk menggunakan DigitalBaner?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Tidak harus! Anda bisa menggunakan Smart TV berbasis Android atau TV biasa yang dihubungkan dengan Android TV Box / Set-Top Box terjangkau.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Bagaimana jika koneksi internet di toko saya terputus?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Sistem DigitalBaner memiliki teknologi <i>Offline Caching</i>. Semua konten media akan tersimpan secara lokal di perangkat, sehingga TV akan tetap tayang secara normal meskipun koneksi internet terputus.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm">
                           
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Sangat bisa. Anda dapat mengatur playlist tayangan berdasarkan hari, tanggal, jam tertentu, atau mengonfigurasi pergantian menu sarapan pagi ke menu makan siang secara otomatis.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REQUEST DEMO FORM SECTION -->
    <section id="demo" class="section-padding cta-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <span class="section-subtitle">KONSULTASI & DEMO GRATIS</span>
                    <h2 class="section-title">Siap Transformasi Tampilan Layar TV Bisnis Anda?</h2>
                    <p class="section-desc mb-4">
                        Isi formulir di samping untuk mendapatkan akses uji coba gratis platform DigitalBaner dan konsultasi langsung mengenai penawaran lisensi lifetime 1 kali beli pakai selamanya.
                    </p>

                    <div class="d-flex flex-column gap-3 mb-4">
                        <a href="https://wa.me/6289613629203?text=Halo%20DigitalBaner,%20saya%20ingin%20tanya%20mengenai%20layanan%20TV%20Signage" target="_blank" class="text-decoration-none text-dark d-flex align-items-center gap-3">
                            <div class="brand-icon bg-success text-white fs-4">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Layanan Konsultasi WhatsApp (Klik untuk Chat)</small>
                                <strong class="text-success fs-5">+62 896-1362-9203</strong>
                            </div>
                        </a>
                        <a href="mailto:segeryudi@gmail.com" class="text-decoration-none text-dark d-flex align-items-center gap-3">
                            <div class="brand-icon bg-cyan text-white fs-5">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Email Pertanyaan Bisnis</small>
                                <strong>segeryudi@gmail.com</strong>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-card">
                        <h4 class="mb-3">Jadwalkan Live Demo / Pemesanan</h4>
                        <p class="text-muted small mb-4">Dapatkan akun uji coba tanpa perlu memasukkan kartu kredit.</p>

                        <div id="formAlert" class="d-none"></div>

                        <form id="demoForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label font-weight-semibold">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-custom" id="inputName" placeholder="Contoh: Budi Santoso" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-weight-semibold">Nama Perusahaan / Resto</label>
                                    <input type="text" class="form-control form-control-custom" id="inputCompany" placeholder="Contoh: Kopi Jaya Cafe" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-weight-semibold">Email Bisnis</label>
                                    <input type="email" class="form-control form-control-custom" id="inputEmail" placeholder="nama@perusahaan.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-weight-semibold">Nomor WhatsApp</label>
                                    <input type="tel" class="form-control form-control-custom" id="inputPhone" placeholder="089613629203" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label font-weight-semibold">Estimasi Jumlah Layar TV</label>
                                    <select class="form-select form-select-custom" id="selectScreens">
                                        <option value="1-3">1 - 3 Layar TV</option>
                                        <option value="4-10">4 - 10 Layar TV</option>
                                        <option value="10+">Lebih dari 10 Layar TV</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary-custom w-100 py-3">
                                        <i class="bi bi-send-fill me-2"></i> Kirim Permintaan Demo / Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand d-flex align-items-center gap-2 text-white mb-3" href="#">
                        <span class="brand-icon"><i class="bi bi-tv-fill"></i></span>
                        <span>Digital<span class="text-info">Baner</span></span>
                    </a>
                    <p class="text-muted small">
                        Solusi platform TV Signage & Digital Display Management terdepan dengan sistem 1 Kali Beli, Pakai Selamanya! Modernisasi media informasi dan promosi bisnis Anda di seluruh Indonesia.
                    </p>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5>Navigasi</h5>
                    <ul class="footer-links">
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#fitur">Fitur Utama</a></li>
                        <li><a href="#solusi">Solusi Industri</a></li>
                        <li><a href="#harga">Harga Paket</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>Sektor Industri</h5>
                    <ul class="footer-links">
                        <li><a href="#solusi">Restoran & Digital Menu</a></li>
                        <li><a href="#solusi">Display Kantor & B2B</a></li>
                        <li><a href="#solusi">Sistem Antrean Rumah Sakit</a></li>
                        <li><a href="#solusi">Retail & Fashion Display</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>Hubungi Kami</h5>
                    <p class="text-muted small mb-2"><a href="https://wa.me/6289613629203?text=Halo%20DigitalBaner,%20saya%20ingin%20tanya%20mengenai%20layanan%20TV%20Signage" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-whatsapp text-success me-2 fs-6"></i> +62 896-1362-9203</a></p>
                    <p class="text-muted small"><a href="mailto:segeryudi@gmail.com" class="text-decoration-none text-muted"><i class="bi bi-envelope-fill text-info me-2"></i> segeryudi@gmail.com</a></p>
                </div>
            </div>

            <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center gap-3">
                <p class="mb-0 text-muted small">&copy; <?= $currentYear; ?> DigitalBaner TV Signage. Hak Cipta Dilindungi Undang-Undang.</p>
                <div class="d-flex gap-3 text-muted small">
                    <span>Privacy Policy</span> &bull; <span>Terms of Service</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Direct Chat Button -->
    <a href="https://wa.me/6289613629203?text=Halo%20DigitalBaner,%20saya%20ingin%20tanya%20mengenai%20layanan%20TV%20Signage" target="_blank" rel="noopener" class="wa-float-btn shadow-lg" title="Chat Via WhatsApp">
        <i class="bi bi-whatsapp"></i>
        <span>Chat WhatsApp</span>
    </a>

    <!-- Bootstrap 5.3 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
