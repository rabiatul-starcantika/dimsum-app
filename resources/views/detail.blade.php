@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-lg border-0">

                <div class="row g-0">

                    <!-- Gambar -->
                    <div class="col-md-6">

                        <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?w=700"
                             class="img-fluid h-100 rounded-start"
                             style="object-fit: cover;">

                    </div>

                    <!-- Detail -->
                    <div class="col-md-6">

                        <div class="card-body p-4">

                            <h2 class="fw-bold text-danger">
                                {{ $dimsum['nama'] }}
                            </h2>

                            <hr>

                            <h4 class="text-success">
                                Rp {{ number_format($dimsum['harga'],0,',','.') }}
                            </h4>

                            <p class="mt-3 text-secondary">
                                {{ $dimsum['deskripsi'] }}
                            </p>

                            <div class="mt-4">

                                <a href="/list" class="btn btn-secondary">
                                    ← Kembali
                                </a>

                                <a href="/" class="btn btn-danger">
                                    Home
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection