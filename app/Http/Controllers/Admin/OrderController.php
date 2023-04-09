<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::all();
        return view('admin.orders.index', compact('data'));
    }

    public function show($inv)
    {
        $data = Order::whereInvoice($inv)->first();
        if (empty($data)) {
            # code...
            return redirect()->route('admin.orderan.index')->with('galat', 'Invoice Not Found');
        }
        return view('admin.orders.detail', compact('data'));
    }

    public function update(Request $request, $inv)
    {
        $data = Order::whereInvoice($inv)->first();
        if (empty($data)) {
            # code...
            return redirect()->route('admin.orderan.index')->with('galat', 'Invoice Not Found');
        }

        $request->validate([
            'status' => 'required|in:proses,cancel,aprove',
            'harga' => 'required'
        ]);

        $data->update([
            'status' => $request->status,
            'harga' => intval(str_replace(',', '', $request->harga))
        ]);

        return redirect()->route('admin.orderan.index')->with('success', 'Order Has Been Update');
    }

    public function invoice($inv)
    {
        $data = Order::where([
            'invoice' => $inv,
            'status' => 'aprove'
        ])->first();

        if (empty($data)) {
            # code...
            return redirect()->route('admin.orderan.index')->with('galat', 'Invoice Not Found');
        }
        return view('admin.orders.inv', compact('data'));
    }

    public function destroy($id)
    {
        $data = Order::find($id);
        if (empty($data)) {
            # code...
            return redirect()->route('admin.orderan.index')->with('galat', 'Invoice Not Found');
        }
        $data->delete();
        return redirect()->route('admin.orderan.index')->with('success', 'Order Has Been Delete');
    }
}
