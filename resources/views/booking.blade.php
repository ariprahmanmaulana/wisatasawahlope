@extends('layouts.main')
@section('container')
<div class="container">
    <h3 class="mb-4 mt-3 text-center">Booking Gazebo</h3>
    {{-- notif post ditambahkan --}}
          <div class="row justify-content-center">
            @if (session()->has('success'))
                <div class="alert alert-success col-lg-8 text-center" role="alert">
                    {{ session('success')}}
              </div>
          @endif
          @if (session()->has('error'))
                <div class="alert alert-danger col-lg-8 text-center" role="alert">
                    {{ session('error')}}
                </div>
          </div>
          @endif
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 d-flex">
            <div class="card" style="width: 18rem;">
                <img src="/image/gazebokecil-min.jpg" style="max-height: 190px" class="card-img-top"  alt="...">
                <div class="card-body">
                    <p>Gazebo Kecil <br>
                       Harga : Rp.10K/Jam</p>
                    <a href="/createbooking" class="btn btn-primary mb-3">Booking Gazebo</a>

                </div>
                </div>

                <div class="card ms-5" style="width: 18rem;">
                <img src="/image/gazebobesar-min.jpg" class="card-img-top"  alt="...">
                <div class="card-body">
                    <p>Gazebo Besar <br>
                       Harga : Rp.25K/Jam</p>
                    <a href="/createbooking" class="btn btn-primary mb-3">Booking Gazebo</a>

                </div>
                </div>
        </div>


        
    </div>
</div>
@endsection