<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Plate;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plates = Plate::where('user_id', Auth::id())->paginate(10);
        return view('admin.plates.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plates.create');
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
            'name' => 'required|min:3|max:50',
            'ingredients' => 'required|min:3|max:150',
            'description' => 'required|min:3|max:255',
            'course' => 'required|min:3|max:20',
            'image' => 'nullable|url',
            'price' => 'required|numeric|max:999.99'
        ]);

        $data = $request->all();
        $new_plate = new Plate();
        $new_plate->fill($data);
        $new_plate->user_id = Auth::id();
        $new_plate->save();
        return redirect()->route('admin.plates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {

        if ($plate->user_id == Auth::id()) return view('admin.plates.show', compact('plate'));
        else abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        return view('admin.plates.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plate $plate)
    {
        if ($request['visibility'] == 0 || $request['visibility'] == 1) {
            $data = $request->all();
            $plate->update($data);
            return redirect()->route('admin.plates.index');
        } else {
            $request->validate([
                'name' => 'required|min:3|max:50',
                'ingredients' => 'required|min:3|max:150',
                'description' => 'required|min:3|max:255',
                'course' => 'required|min:3|max:20',
                'image' => 'nullable|url',
                'price' => 'required|numeric|max:999.99',
            ]);

            $data = $request->all();
            $plate->update($data);
            return redirect()->route('admin.plates.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
