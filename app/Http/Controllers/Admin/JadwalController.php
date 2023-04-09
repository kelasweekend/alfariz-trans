<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Order::query()
            ->where('status', 'aprove')
            ->get();

        $jadwal = array();

        foreach ($data as $key => $item) {
            # code...
            $text = 'Tersewa #' . $item->invoice;
            $text_2 = 'Bus Tersewa pada ' . $item->tgl_berangkat . ' sampai ' . $item->tgl_pulang;
            array_push($jadwal, array(
                'id' => $key + 1,
                'description' => $text_2,
                'title' => $text,
                'start' => $item->tgl_berangkat,
                'end' => $item->tgl_pulang,
                'allDay' => 'allDay'
            ));
        }

        $jadwal = json_encode($jadwal);
        return view('admin.jadwal.index', compact('jadwal'));
    }
}
