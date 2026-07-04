@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold text-danger">
            Daftar Harga Dimsum
        </h1>

        <p class="text-muted">
            Pilih menu dimsum favoritmu.
        </p>
    </div>

    <div class="row">

        @foreach($dimsums as $d)

        <div class="col-md-4 mb-4">

            <div class="card shadow border-0 h-100">

                <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?w=600"
                class="card-img-top"
                style="height:220px; object-fit:cover;">

                <div class="card-body">

                    <h4 class="fw-bold">
                        {{ $d['nama'] }}
                    </h4>

                    <h5 class="text-danger">
                        Rp {{ number_format($d['harga'],0,',','.') }}
                    </h5>

                    <p class="text-secondary">
                        {{ $d['deskripsi'] }}
                    </p>

                </div>

                <div class="card-footer bg-white border-0">

                    <a href="/detail/{{ $d['id'] }}"
                    class="btn btn-danger w-100">

                        Lihat Detail

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection