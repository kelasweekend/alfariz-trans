@extends('layouts.backend.master')
@section('title')
    Order #{{ $data->invoice }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <form action="{{ route('admin.orderan.update', $data->invoice) }}" method="POST">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">Nama Penyewa</td>
                                            <td>:</td>
                                            <td class="text-bold-500">{{ $data->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Nomor Penyewa</td>
                                            <td>:</td>
                                            <td class="text-bold-500">
                                                <a href="" class="btn btn-outline-success"><i
                                                        class="bi bi-whatsapp"></i>
                                                    Chat Whatsapp</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Tanggal Berangkat</td>
                                            <td>:</td>
                                            <td class="text-bold-500">
                                                <input type="date"
                                                    class="form-control @error('tgl_berangkat') is-invalid @enderror"
                                                    name="tgl_berangkat" name="tgl_berangkat"
                                                    value="{{ $data->tgl_berangkat }}"
                                                    placeholder="Masukan tgl_berangkat Akhir">
                                                @error('tgl_berangkat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Tanggal Pulang</td>
                                            <td>:</td>
                                            <td class="text-bold-500">
                                                <input type="date"
                                                    class="form-control @error('tgl_pulang') is-invalid @enderror"
                                                    name="tgl_pulang" name="tgl_pulang" value="{{ $data->tgl_pulang }}"
                                                    placeholder="Masukan tgl_pulang Akhir">
                                                @error('tgl_pulang')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Lokasi Jembut</td>
                                            <td>:</td>
                                            <td class="text-bold-500">{{ $data->jemput }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Lokasi Tujuan</td>
                                            <td>:</td>
                                            <td class="text-bold-500">{{ $data->tujuan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Jumlah Big Bus</td>
                                            <td>:</td>
                                            <td class="text-bold-500">{{ $data->bigbus ?? 0 }} Unit</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Jumlah Medium Bus</td>
                                            <td>:</td>
                                            <td class="text-bold-500">{{ $data->medium ?? 0 }} Unit</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Note Pemesanan</td>
                                            <td>:</td>
                                            <td class="text-bold-500">{{ $data->catatan ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Harga Akhir</td>
                                            <td>:</td>
                                            <td class="text-bold-500">
                                                <input type="text" id="uang"
                                                    class="form-control @error('harga') is-invalid @enderror" name="harga"
                                                    name="harga" placeholder="Masukan Harga Akhir">
                                                @error('harga')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Status Order</td>
                                            <td>:</td>
                                            <td class="text-bold-500">
                                                <select class="form-select @error('status') is-invalid @enderror"
                                                    name="status" aria-label="Default select example">
                                                    <option {{ $data->status == 'proses' ? 'selected' : null }}>proses
                                                    </option>
                                                    <option {{ $data->status == 'cancel' ? 'selected' : null }}>cancel
                                                    </option>
                                                    <option {{ $data->status == 'aprove' ? 'selected' : null }}>aprove
                                                    </option>
                                                </select>
                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Update Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $("#uang").keyup(function(e) {
                $(this).val(format($(this).val()));
            });
        });
        var format = function(num) {
            var str = num.toString().replace("", ""),
                parts = false,
                output = [],
                i = 1,
                formatted = null;
            if (str.indexOf(".") > 0) {
                parts = str.split(".");
                str = parts[0];
            }
            str = str.split("").reverse();
            for (var j = 0, len = str.length; j < len; j++) {
                if (str[j] != ",") {
                    output.push(str[j]);
                    if (i % 3 == 0 && j < (len - 1)) {
                        output.push(",");
                    }
                    i++;
                }
            }
            formatted = output.reverse().join("");
            return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
        };
    </script>
@endsection
