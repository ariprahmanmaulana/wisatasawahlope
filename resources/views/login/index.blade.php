@extends('layouts.main')

@section('container')
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="row justify-content-center">
        <div class="col-md-4">
          {{-- message login succes --}}
    @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

      {{-- message login error --}}
      @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
            <main class="form-signin">
                <img class="mb-4 mt-3 img-circle" style="border-radius: 50%" width="200px" height="200px" src="/image/sawahlope1.jpeg" alt="" width="82" height="122">
                <h1 class="h3 mb-3 fw-normal" class="bg-dark"> <b>Login</b></h1>
              <form action="/login" method="post">
            @csrf
                <div class="form-floating">
                  <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username"autofocus required placeholder="name@gmail.com"  value="{{ old('username')}}">
                  <label for="username">Username</label>
                  @error('username')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  <label for="password">Password</label>
                </div>
            
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <small class="d-block text-center mt-3 ">Belum Registrasi? Silahkan  <a href="/register"class= 'text-decoration-none'>Register!</a></small>
              </form>
            </main>

        </div>
    </div>


    
  </body>
</html>
@endsection

