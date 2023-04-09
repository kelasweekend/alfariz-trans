@extends('layouts.frontend.utama')

@section('title')
    Sewa Bus Alfariz Sekarang
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
    <section class="unggul">
        <div class="container">
            <div class="p-5 jumbo">
                <h2>Form Sewa Bus</h2>
                <form action="{{ route('sewa.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Berangkat</label>
                                <input type="date" class="form-control @error('tgl_berangkat') is-invalid @enderror"
                                    name="tgl_berangkat" value="{{ old('tgl_berangkat') }}">
                                @error('tgl_berangkat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Pulang</label>
                                <input type="date" class="form-control @error('tgl_pulang') is-invalid @enderror"
                                    name="tgl_pulang" value="{{ old('tgl_pulang') }}">
                                @error('tgl_pulang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Lokasi Berangkat</label>
                                <input type="text" class="form-control @error('jemput') is-invalid @enderror"
                                    name="jemput" value="{{ old('jemput') }}">
                                @error('jemput')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Lokasi Tujuan</label>
                                <input type="text" class="form-control @error('tujuan') is-invalid @enderror"
                                    name="tujuan" value="{{ old('tujuan') }}">
                                @error('tujuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jumlah Sewa Big Bus</label>
                                <select class="form-select" name="bigbus" aria-label="Default select example">
                                    <option value="">-- Pilih --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jumlah Sewa Medium
                                    Bus</label>
                                <select class="form-select" name="medium" aria-label="Default select example">
                                    <option value="">-- Pilih --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">Catatan Sewa</label>
                        <textarea class="form-control @error('catatan') is-invalid @enderror" name="catatan" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 btn-sewa">Ajukan Sekarang</button>
                </form>
            </div>
    </section>
@endsection
