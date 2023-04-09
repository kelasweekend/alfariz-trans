@extends('layouts.frontend.utama')

@section('title')
    Alfariz Trans - Sewa Bus Pariwisata
@endsection

@section('header')
    <header>
        <div class="container">
            <div class="mt-4 p-5 bg-primary text-white jumbo" style="background-image: url({{ asset('fe/img/bus.webp') }})">
                <h2>ALFARIZ BUS</h2>
                <p>Sewa Bus Pariwisata</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="unggul" id="tentang">
        <div class="container">
            <div class="mt-4 p-5 jumbo">
                <h2>KEUNGGULAN LAYANAN KAMI</h2>
                <p class="text-center">
                    Naik bus lebih mudah dan aman bersama Alfariz Tranz, mitra utama Anda untuk kebutuhan
                    transportasi dalam grup besar.
                    Untuk kepuasan Anda, kami selalu mengutamakan ketepatan waktu, keselamatan, kenyamanan, dan
                    menyediakan pengemudi yang
                    profesional. Bus juga dilengkapi dengan fasilitas yang menunjang kenyamanan Anda, seperti
                    reclining seat, LCD screen,
                    dan USB charger. Sementara pada Luxury Bus, Anda dapat menikmati berbagai fasilitas, mulai dari
                    sofa, hingga peralatan
                    karaoke.
                </p>

                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="d-flex">
                            <div class="icon">
                                <img src="{{ asset('fe/img/Key_Benefits_31ef3eb670.svg') }}" alt="">
                            </div>
                            <h3>Tepat Waktu</h3>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex">
                            <div class="icon">
                                <img src="{{ asset('fe/img/Key_Benefits_ef3b898fa5.svg') }}" alt="">
                            </div>
                            <h3>Keselamatan & Kenyamanan</h3>
                        </div>
                    </div>
                    <div class="col-md-5 mt-4">
                        <div class="d-flex">
                            <div class="icon">
                                <img src="{{ asset('fe/img/Key_Benefits_d4aa37b083.svg') }}" alt="">
                            </div>
                            <h3>Pengemudi Profesional</h3>
                        </div>
                    </div>
                    <div class="col-md-5 mt-4">
                        <div class="d-flex">
                            <div class="icon">
                                <img src="{{ asset('fe/img/Key_Benefits_9617afd9cd.svg') }}" alt="">
                            </div>
                            <h3>Fasiltas Lengkap</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #e3e5f2 -->
        </div>
    </section>

    <section class="bus" id="armada">
        <div class="container">
            <div class="text-center">
                <h2>Pilihan Armada Bus</h2>
                <p class="desc">Beberapa Pilihan Yang Cocok Sesuai Kebutuhan Anda</p>
            </div>

            <div class="row justify-content-center">
                @foreach ($data as $bus)
                    <div class="col-md-3">
                        <a href="{{ route('index.detail', $bus->id) }}" class="kotak">
                            <div class="card p-3">
                                <img src="{{ asset('img/' . $bus->image) }}" alt="" class="tumbhnail img-bus">
                                <h3 class="text-center">{{ $bus->title }}</h3>
                                <p class="text-center text-muted mb-4">Rp {{ number_format($bus->harga) }}</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('fe/img/icons/wifi.svg') }}" width="30"
                                                    height="30" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>Wifi Area</h4>
                                                <p>4G</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('fe/img/icons/air-conditioner.svg') }}" width="30"
                                                    height="30" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>Full AC</h4>
                                                <p>Area</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('fe/img/icons/music-alt.svg') }}" width="30"
                                                    height="30" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>Music Area</h4>
                                                <p>On Bus</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('fe/img/icons/screen.svg') }}" width="30"
                                                    height="30" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>TV Area</h4>
                                                <p>4 Unit</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('fe/img/icons/restroom-simple.svg') }}" width="30"
                                                    height="30" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>Toilet Area</h4>
                                                <p>L / P</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <img src="{{ asset('fe/img/icons/mobile-button.svg') }}" width="30"
                                                    height="30" alt="">
                                            </div>
                                            <div class="title">
                                                <h4>Changer Area</h4>
                                                <p>Only Phone</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
