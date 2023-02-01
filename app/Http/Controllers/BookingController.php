<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryGazebo;
use App\Models\Gazebo;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use GuzzleHttp\Middleware;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->id();
        $data = User::where('id', $user)->get();
        if($data == true){
            return view('createbooking',[
                'gazebos' => Gazebo::all(),
                'title' => 'Booking',
                'active' => 'Booking',
                'category_gazebos' => CategoryGazebo::all(),
                'daftar_user' => $data
            ]);
        }else{
            return redirect('/booking')->with('failed','Untuk admin diharapkan mengisi dibagian data admin');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->id();
        $data = User::where('id', $user)->get();
        if($data == true){
            return view ('createbooking', [
                'gazebos' => Gazebo::all(),
                'category_gazebos' => CategoryGazebo::all(),
                'daftar_user' => $data
            ]);
        }else{
            return redirect('/booking')->with('failed','Untuk admin diharapkan mengisi dibagian data admin');
        }
        
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
            'tanggal' => 'required|',
            'masuk' => 'required',
            'keluar' => 'required'
        ]);
        $name = $request->input('name');
        $nohp = $request->input('nohp');
        $c_category = $request->input('category_gazebos_id');
        $t = $request->input('tanggal');
        $m = $request->input('masuk');
        $k = $request->input('keluar');
        $r = "";
        $s = 0;
        $y = "";
        $z = "";
        $o = Gazebo::where('category_gazebos_id','=',$c_category)->where('tanggal', '=', $t)->where('masuk','=',$m)->where('keluar','=',$k)->get();
        if($o){
            foreach($o as $o){
                $r = $o->keluar;
                $s = $o->category_gazebos_id;
                $y = $o->tanggal;
                $z = $o->masuk;
            }
        }
        if($c_category != $s and $t != $r and $m != $y and $k != $z){
            Gazebo::create($validatedData);
            return redirect('/booking')->with('success', 'Terima kasih sudah melakukan booking, Mohon menunggu konfirmasi lewat  Whatsapp');
        }else{
            return redirect('/booking')->with('error', 'Mohon maaf, untuk jadwal tersebut sudah tersedia. pilih jadwal kembali untuk booking gazebo');
        }
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
