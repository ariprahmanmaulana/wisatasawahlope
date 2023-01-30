<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active'=> 'register'

        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'username' => ['required','min:5','max:225','unique:users'],
            'nohp' => ['required','min:11','max:13','unique:users'],
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // endkripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // endkripsi metode hashing
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);

        // message flash 
        // $request->session()->flash('success','Registration Succesfully! Please Login Now');

        // message 
        return  redirect('login')->with('success','Registration Berhasil! Silahkan Login');

    }
}
