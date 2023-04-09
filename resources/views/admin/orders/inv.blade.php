@extends('layouts.backend.master')
@section('title')
    Invoice #{{ $data->invoice }}
@endsection

@section('content')
    <div class="row" id="editor">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h2>Invoice</h2>
                        </div>
                        <div class="col-4">
                            <h4 class="float-end">#{{ $data->invoice }}</h4>
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
                            <table class="table invoice-table">
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
                                            <td><span class="badge bg-success">LUNAS</span></td>
                                        </tr>
                                    @endif
                                    @if ($data->medium != null)
                                        <tr>
                                            <th scope="row">{{ $data->invoice }}</th>
                                            <td>Medium Bus</td>
                                            <td>{{ $data->tgl_berangkat }}</td>
                                            <td>{{ $data->tgl_pulang }}</td>
                                            <td>{{ $data->medium }}</td>
                                            <td><span class="badge bg-success">LUNAS</span></td>
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
                                    <span>Rp {{ number_format($data->harga) }}</span>
                                </div>
                                <div class="d-grid gap-2">
                                    <button value='Print' onclick='printDiv();' class="btn btn-danger m-t-xs"
                                        type="button">Print
                                        Invoice</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function printDiv() {

            var divToPrint = document.getElementById('editor');
            var newWin = window.open('', 'Print-Window');
            newWin.document.open();
            newWin.document.write(
                '<link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" type="text/css" />');
            newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
            newWin.document.close();
            setTimeout(function() {
                newWin.close();
            }, 10);
        }
    </script>
@endsection
