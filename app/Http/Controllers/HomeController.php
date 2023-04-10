<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Armada::all();
        return view('home.index', compact('data'));
    }

    public function lacak(Request $request)
    {
        $data = null;
        if ($request->q) {
            # code...
            $data = Order::whereInvoice($request->q)->first();
        }
        return view('home.lacak', compact('data'));
    }

    public function sewa()
    {
        return view('home.sewa');
    }

    public function detail($id)
    {
        $data = Armada::find($id);
        if (empty($data)) {
            # code...
            return redirect()->route('index')->with('galat', 'Armada Error');
        }

        return view('home.detail', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'tgl_berangkat' => 'required|date',
            'tgl_pulang' => 'required|date',
            'jemput' => 'required',
            'tujuan' => 'required'
        ]);

        if ($request->bigbus == null && $request->medium == null) {
            # code...
            return redirect()->route('sewa')->with('galat', 'Isi Jumlah Armada Bigbus atau Medium Bus');
        }

        Order::create([
            'invoice' => 'INV-' . rand(999, 9999),
            'name' => $request->name,
            'phone' => $request->phone,
            'jemput' => $request->jemput,
            'tujuan' => $request->tujuan,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_pulang' => $request->tgl_pulang,
            'medium' => $request->bigbus,
            'bigbus' => $request->medium,
            'catatan' => $request->catatan ?? null,
            'status' => 'proses',
        ]);

        $url = "https://wa.me/+6281912488040?text=Haloo%20admin%20Alfariz%20Trans%0ASaya%20ingin%20sewa%20bus%20sebagai%20rincian%20%3A%20%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0ANama%20Pemesan%20%3A%20" . $request->name . "%0ANomor%20Tlp%20%3A%20" . $request->phone . "%0ALokasi%20Jemput%20%3A%20" . $request->jemput . "%0ALokasi%20Tujuan%20%3A%20" . $request->tujuan . "%0ATanggal%20Berangkat%20%3A%20" . $request->tgl_berangkat . "%0ATanggal%20Pulang%20%3A%20" . $request->tgl_pulang . "%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0AJumlah%20Big%20Bus%20%3A%20100%0AJumlah%20Medium%20Bus%20%3A%20100%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%0ATerima%20kasih%20admin%2C%20segera%20diproses%20yaaa";
        return redirect(url($url));
    }
}
