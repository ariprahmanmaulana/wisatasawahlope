<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryGazebo;
use App\Models\Gazebo;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createbooking', [
            'gazebos' => Gazebo::all(),
            'title' => 'Booking',
            'active' => 'Booking',
            'category_gazebos' => CategoryGazebo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createbooking', [
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

        return redirect('/booking')->with('success', 'Booking akan segera diproses, Silahkan menunggu konfirmasi dari Admin');
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
        //
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
        //
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
