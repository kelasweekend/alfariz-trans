<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Armada::all();
        return view('admin.armada.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.armada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:png,jpg'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        Armada::create([
            'title' => $request->title,
            'harga' => $request->harga,
            'image' => $imageName,
        ]);

        $request->image->move(public_path('img'), $imageName);

        return redirect()->route('admin.armada.index')->with('success', 'Armada Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Armada::findOrFail($id);
        return view('admin.armada.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'harga' => 'required',
            'image' => 'image|mimes:png,jpg'
        ]);

        $data = Armada::find($id);
        if (empty($data)) {
            # code...
            return redirect()->route('admin.armada.index')->with('galat', 'Armada Error');
        }

        if ($request->image) {
            # code...
            unlink(public_path('img/' . $data->image));
            $imageName = time() . '.' . $request->image->extension();
            $data->update([
                'title' => $request->title,
                'harga' => $request->harga,
                'image' => $imageName,
            ]);

            $request->image->move(public_path('img'), $imageName);
        } else {
            # code...
            $data->update([
                'title' => $request->title,
                'harga' => $request->harga,
            ]);
        }
        return redirect()->route('admin.armada.index')->with('success', 'Armada Has Been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Armada::find($id);
        if (empty($data)) {
            # code...
            return redirect()->route('admin.armada.index')->with('galat', 'Armada Error');
        }

        unlink(public_path('img/' . $data->image));
        $data->delete();

        return redirect()->route('admin.armada.index')->with('success', 'Armada Has Been Detele');
    }
}
