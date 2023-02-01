@extends('layouts.main')
@section('container')
<style>
  body {
      overflow-x: hidden; 
  }
</style>
<link href="/css/signin.css" rel="stylesheet">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="row justify-content-center">
            @if (session()->has('success'))
                <div class="alert alert-success col-lg-8 text-center" role="alert">
                    {{ session('success')}}
              </div>
          @endif
          @if (session()->has('error'))
                <div class="alert alert-danger col-lg-8 text-center" id="alert" role="alert">
                    {{ session('error')}}
                </div>
          </div>
          @endif
    <div class="carousel-inner">
      <div class="carousel-item active">
        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        <img src="/image/sawahlope3.jpeg" width="100%" height="100%" aria-hidden="true" alt="foto1">
        <div class="container">
          <div class="carousel-caption text-start">
            <h2>Selamat Datang Di Website Resmi Wisata Sawah Lope</h2>
            <h3>Buka Setiap Hari Pukul 08:00 - 16:30</h3>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        <img src="/image/8.jpeg" width="100%" height="100%" aria-hidden="true" alt="foto2">

        <div class="container">
          <div class="carousel-caption">
            <h2>Tiket Sangat Terjangkau</h2>
            <h5>Objek Wisata Sawah lope (Lokasi Pertanian) memiliki banyak sekali gazebo dan tempat bersantai, ada juga wahan untuk bermain untuk anak kecil, bukan hanya itu saja wisata ini juga memiliki spot untuk berfoto yang sangat bagu untuk selebgram atau potografer </h5>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        <img src="/image/3.jpeg" width="100%" height="100%" aria-hidden="true" alt="foto3">

        <div class="container">
          <div class="carousel-caption text-end">
            <h3>Objek Wisata Sawah Lope </h3>
            <h5>Jln. Sidumampir Dsn Manis Desa Cikaso Kecamatan Kramatmulya Kabupaten Kuningan Jawa Barat</h5>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
        {{-- postingan --}}

    <div class="row mt-5 justify-content-center">
      <div class="col-md-10">

        <h3 class="mb-4 text-center">Info Terbaru</h3>
        @if ($posts->count() )

<div class="container ">
    <div class="row justify-content-center mb-3">
        <div class="col-lg-8">
            <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
                    <p>
                        <small class="text-muted">
                            By.  <a href="/posts?author={{ $posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a>  in <a href="/posts?category={{$posts[0]->category->slug}}"  class="text-decoration-none">{{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>

                    <p class="card-text">{{$posts[0]->excerpt}}</p>

                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary"> Read More </a>
                </div>
                @if ($posts[0]->image)
                                <div style="overflow:hidden;">
                                    <img src="{{asset('storage/' .$posts[0]->image)}}" class="card-img-top" alt="{{$posts[0]->category->name}} " class="img-fluid">
                                </div>

                            @else
                                <img src="https://source.unsplash.com/800x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
                            @endif
            </div>
            
        </div>
    </div>

@foreach ($posts->skip(1) as $post)
    <div class="row justify-content-center mb-3">
        <div class="col-lg-8">
            <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{$post->title}}</a></h3>
                    <p>
                        <small class="text-muted">
                            By.  <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a>  in <a href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a> {{$post->created_at->diffForHumans() }}
                        </small>
                    </p>

                    <p class="card-text">{{$post->excerpt}}</p>

                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary"> Lihat </a>
                </div>
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' .$post->image)}}" alt="{{$post->category->name}} " class="img-fluid ">
                                    @else
                                        <img src="https://source.unsplash.com/800x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                                    @endif

            </div>
        </div>
    </div>
@endforeach
@else
        <p class="text-center fs-4">No post found.</p>
       </div> 
@endif

    {{-- pagination --}}
    <div class="d-flex justify-content-center">
        {{$posts->links()}}
    </div>

    {{-- info sawah lope --}}
    <div class="row mt-5 justify-content-center">
      <div class="col-md-8">
        <h3 class="mb-4 text-center">Sekilas Sawah Lope</h3>
        <p class="alert alert-info"><i>Objek Wisata Sawah Lope adalah Tempat Wisata untuk berekreasi yang berada di Jl. Sidumampir Dusun Manis Desa Cikaso Kecamatan Kramatmulya Kab. Kuningan Jawa Barat 45553. Objek Wisata Sawah Lope adalah objek wisata terbaik untuk dikunjungi, karena lingkunganya alami serta disuguhkan pemandangan indah Gunung Ciremai. Cocok untuk berkumpul bersama keluarga besar Anda </i></p>
      </div>
    </div>
    
    {{-- galeri --}}

    <div class="row justify-content-center">
      <h3 class="text-center mt-5 mb-4">Galeri</h3>
      <div class="col-md-4 mt-4 ms-0">
        <img src="/image/sawahlope1.jpeg" alt="" width="350px" height="350px" style="box-shadow: 0px 5px 8px 0px rgba(0, 0, 0, 0.5)">
      </div>
        <div class="col-md-4 ms-0 mt-4">
          <img src="/image/sawahlope2.jpeg" alt="" width="350px" height="350px" style="box-shadow: 0px 5px 8px 0px rgba(0, 0, 0, 0.5)">
        </div>
        <div class="col-md-4 mt-4 ms-0">
          <img src="/image/sawahlope3.jpeg" alt="" width="350px" height="350px" style="box-shadow: 0px 5px 8px 0px rgba(0, 0, 0, 0.5)">
        </div>
        <div class="col-md-4 mt-4 ms-0">
          <img src="/image/4.jpeg" alt="" width="350px" height="350px" style="box-shadow: 0px 5px 8px 0px rgba(0, 0, 0, 0.5)">
        </div>
        <div class="col-md-4 mt-4 ms-0">
          <img src="/image/5.jpeg" alt="" width="350px" height="350px" style="box-shadow: 0px 5px 8px 0px rgba(0, 0, 0, 0.5)">
        </div>
        <div class="col-md-4 mt-4 ms-0">
          <img src="/image/6.jpeg" alt="" width="350px" height="350px" style="box-shadow: 0px 5px 8px 0px rgba(0, 0, 0, 0.5)">
        </div>


    </div>
    
    
    

      </div>
    </div>
  </div>
  {{-- footer --}}
    <footer class="mt-4 text-center bg-secondary p-2">
      <div class="sosmed mb-3">
        <h6><a href="https://www.facebook.com/sawahlope" class="text-decoration-none" style="color: #212529"> <i class="bi bi-facebook"></i> Sawah Lope Cikaso</a> &nbsp; &nbsp; &nbsp; <a href="https://instagram.com/sawahlope?igshid=1bvan90zhm2k5"  class="text-decoration-none" style="color: #212529"><i class="bi bi-instagram"></i> @sawahlope</a></h6> 
        <h6><a href="https://www.youtube.com/@daengali8240" class="text-decoration-none" style="color: #212529"> <i class="bi bi-youtube"></i> Official Sawah Lope</a> &nbsp; &nbsp; &nbsp; <a href="#" class="text-decoration-none" style="color: #212529"><i class="bi bi-telephone"></i> Oong Suhar : 085224663045 </a></h6>
        <p ><a href="https://maps.app.goo.gl/iwoZVKiQfD7g3NHr8" class="text-decoration-none" style="color: #212529"> Jln. Sidumampir Dusun Manis Desa Cikaso Kecamatan Kramatmulya Kab. Kuningan Jawa Barat</a></p>
  </div>
      
      <h6>&copy; Copyright 2022 - Kuningan || Sawah Lope Desa Cikaso || All Rights Reserved || Powered by Kerja Praktek 58 UNIKU 2022</h6>
    </footer>
    <script>
      $(document).ready (function(){
   $("#success-alert").hide();
   $("#myWish").click(function showAlert() {
      $("#success-alert").alert();
      window.setTimeout(function () { 
         $("#success-alert").alert('close'); 
      }, 2000);             
   });      
});
    </script>
@endsection