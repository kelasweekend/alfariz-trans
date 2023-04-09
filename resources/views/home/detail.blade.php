@extends('layouts.frontend.utama')

@section('title')
    Type Armada {{ $data->title }}
@endsection
@section('content')
    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-3 ">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/' . $data->image) }}" class="d-block w-100 thumbnail"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/' . $data->image) }}" class="d-block w-100 thumbnail"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/' . $data->image) }}" class="d-block w-100 thumbnail"
                                        alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{{ $data->title }}</h2>
                    <h3>Fasilitas :</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="icon">
                                    <img src="{{ asset('fe/img/icons/wifi.svg') }}" width="30" height="30"
                                        alt="">
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
                                    <img src="{{ asset('fe/img/icons/air-conditioner.svg') }}" width="30" height="30"
                                        alt="">
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
                                    <img src="{{ asset('fe/img/icons/music-alt.svg') }}" width="30" height="30"
                                        alt="">
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
                                    <img src="{{ asset('fe/img/icons/screen.svg') }}" width="30" height="30"
                                        alt="">
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
                                    <img src="{{ asset('fe/img/icons/restroom-simple.svg') }}" width="30" height="30"
                                        alt="">
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
                                    <img src="{{ asset('fe/img/icons/mobile-button.svg') }}" width="30" height="30"
                                        alt="">
                                </div>
                                <div class="title">
                                    <h4>Changer Area</h4>
                                    <p>Only Phone</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="test">Tertarik menggunakan Armada Kami ?</h4>
                    <p>Untuk informasi lebih lanjut mengenai ketersediaan kendaraan dapat menghubungi kami</p>
                    <a href="" class="btn btn-warning">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection
