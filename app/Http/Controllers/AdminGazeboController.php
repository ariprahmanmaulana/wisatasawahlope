<?php

namespace App\Http\Controllers;

use App\Models\CategoryGazebo;
use App\Models\Gazebo;
use Illuminate\Http\Request;

class AdminGazeboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gazebos.index', [
            'gazebos' => Gazebo::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.gazebos.create', [
            'gazebos' => Gazebo::all(),
            'category_gazebos' => CategoryGazebo::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nohp' => 'required|max:13',
            'category_gazebos_id' => 'required',
            'tanggal' => 'required',
            'masuk' => 'required',
            'keluar' => 'required'
        ]);

        Gazebo::create($validatedData);

        return redirect('/dashboard/gazebos')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gazebo  $gazebo
     * @return \Illuminate\Http\Response
     */
    public function show(Gazebo $gazebo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gazebo  $gazebo
     * @return \Illuminate\Http\Response
     */
    public function edit(Gazebo $gazebo)
    {
        return view ('dashboard.gazebos.edit', [
             'gazebos' => $gazebo,
            'category_gazebos' => CategoryGazebo::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gazebo  $gazebo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gazebo $gazebo)
    {
        $rules = [
            'name' => 'required',
            'nohp' => 'required|max:13',
            'category_gazebos_id' => 'required',
            'tanggal' => 'required',
            'masuk' => 'required',
            'keluar' => 'required'
        ];

        $validatedData = $request->validate($rules);
        Gazebo::where('id', $gazebo->id)->update ($validatedData);

        return redirect('/dashboard/gazebos')->with('success', 'Data Booking Gazebo Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gazebo  $gazebo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gazebo $gazebo)
    {
        Gazebo::destroy($gazebo->id);
        return redirect('/dashboard/gazebos')->with('success', 'Data Booking Gazebo Berhasil Dihapus');
    }
}
