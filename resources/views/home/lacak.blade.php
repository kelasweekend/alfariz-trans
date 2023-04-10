@extends('layouts.frontend.utama')

@section('title')
    Lacak Order
@endsection

@section('header')
    <header>
        <div class="container">
            <div class="mt-4 p-5 bg-primary text-white jumbo" style="background-image: url({{ asset('fe/img/bus.webp') }})">
                <h2>Lacak Status</h2>
                <p>Cek Status Sewa Anda</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="unggul">
        <div class="container">
            <div class="p-5 jumbo">
                <form method="get">
                    <div class="mb-3">
                        <div class="text-center">
                            <label for="exampleFormControlInput1" class="form-label text-center">Masukan Nomor Order</label>
                        </div>
                        <input type="text" class="form-control text-center @error('q') is-invalid @enderror"
                            name="q" value="{{ old('q') }}">
                        @error('q')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 btn-sewa">Cek Sekarang</button>
                </form>

                @if ($data)
                    {{-- hasil --}}
                    <div class="hasil p-3" id="editor">
                        <h2 class="mb-3">Status Order</h2>
                        <hr class="mb-1">
                        <div class="row">
                            <div class="col-8">
                                <h3>Invoice</h3>
                            </div>
                            <div class="col-4">
                                <h3 class="float-end">#{{ $data->invoice }}</h3>
                            </div>
                        </div>
                        <div class="invoice-details mb-4">
                            <div class="row justify-content-between">
                                <div class="col-3">
                                    <p class="info mb-0">Date:</p>
                                    <p>{{ $data->updated_at }}</p>
                                </div>
                                <div class="col-3">
                                    <p class="info mb-0">Invoice to:</p>
                                    <p class="mb-0">{{ $data->name }}, New York</p>
                                    <p class="mb-0">{{ $data->phone }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Type Bus</th>
                                            <th scope="col">Tgl Berangkat</th>
                                            <th scope="col">Tgl Pulang</th>
                                            <th scope="col">Jumlah Unit</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($data->bigbus != null)
                                            <tr>
                                                <th scope="row">{{ $data->invoice }}</th>
                                                <td>Big Bus</td>
                                                <td>{{ $data->tgl_berangkat }}</td>
                                                <td>{{ $data->tgl_pulang }}</td>
                                                <td>{{ $data->bigbus }}</td>
                                                <td>
                                                    @if ($data->status == 'proses')
                                                        <span class="badge bg-warning">PROSES</span>
                                                    @elseif ($data->status == 'cancel')
                                                        <span class="badge bg-danger">JADWAL PENUH</span>
                                                    @else
                                                        <span class="badge bg-success">TERBOOKING</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                        @if ($data->medium != null)
                                            <tr>
                                                <th scope="row">{{ $data->invoice }}</th>
                                                <td>Medium Bus</td>
                                                <td>{{ $data->tgl_berangkat }}</td>
                                                <td>{{ $data->tgl_pulang }}</td>
                                                <td>{{ $data->medium }}</td>
                                                <td>
                                                    @if ($data->status == 'proses')
                                                        <span class="badge bg-warning">PROSES</span>
                                                    @elseif ($data->status == 'cancel')
                                                        <span class="badge bg-danger">JADWAL PENUH</span>
                                                    @else
                                                        <span class="badge bg-success">TERBOOKING</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row invoice-last mt-5">
                            <div class="col-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ante id elit
                                    molestie<br>dapibus id sollicitudin vel, luctus sit amet justo</p>
                            </div>
                            <div class="col-3">
                                <div class="invoice-info">
                                    <div class="d-flex justify-content-between">
                                        <p class="bold">Total : </p>
                                        <span>Rp {{ number_format($data->harga) ?? 0 }}</span>
                                    </div>
                                    <div class="d-grid gap-2">
                                        @if ($data->status == 'aprove')
                                            <button value='Print' onclick='printDiv();' class="btn btn-danger m-t-xs"
                                                type="button">Print Invoice</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
    </section>
@endsection

@section('scripts')
    <script>
        function printDiv() {
            var divToPrint = document.getElementById('editor');
            var newWin = window.open('', 'Print-Window');
            newWin.document.open();
            newWin.document.write(
                '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity = "sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin = "anonymous" > '
            );
            newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
            newWin.document.close();
            setTimeout(function() {
                newWin.close();
            }, 10);
        }
    </script>
@endsection
