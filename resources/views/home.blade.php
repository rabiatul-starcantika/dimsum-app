@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="py-5" style="background-color:#FFF8F0;">
    <div class="container">

        <div class="row align-items-center">

            <!-- Kiri -->
            <div class="col-lg-6">

                <h5 class="text-danger fw-bold">
                    Selamat Datang 👋
                </h5>

                <h1 class="display-4 fw-bold">
                    Dimsum House
                </h1>

                <p class="lead text-secondary">
                    Nikmati berbagai pilihan dimsum yang lezat,
                    fresh setiap hari dengan harga yang terjangkau.
                </p>

                <a href="/list" class="btn btn-danger btn-lg mt-3">
                    Lihat Daftar Harga
                </a>

            </div>

            <!-- Kanan -->
            <div class="col-lg-6 text-center">

                <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?w=700"
                    class="img-fluid rounded shadow"
                    style="max-height:400px;">

            </div>

        </div>

    </div>
</section>

<!-- Keunggulan -->
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Kenapa Memilih Kami?
            </h2>

        </div>

        <div class="row">

            <div class="col-md-4">

                <div class="card border-0 shadow p-4 text-center h-100">

                    <i class="bi bi-award-fill text-danger display-4"></i>

                    <h4 class="mt-3">
                        Bahan Berkualitas
                    </h4>

                    <p class="text-secondary">
                        Menggunakan bahan pilihan terbaik sehingga rasa tetap lezat.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow p-4 text-center h-100">

                    <i class="bi bi-heart-fill text-danger display-4"></i>

                    <h4 class="mt-3">
                        Rasa Favorit
                    </h4>

                    <p class="text-secondary">
                        Dimsum dibuat dengan resep spesial yang disukai banyak pelanggan.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow p-4 text-center h-100">

                    <i class="bi bi-truck text-danger display-4"></i>

                    <h4 class="mt-3">
                        Siap Disajikan
                    </h4>

                    <p class="text-secondary">
                        Fresh dibuat setiap hari dan siap dinikmati kapan saja.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection