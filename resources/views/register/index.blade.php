@extends('layouts.main')

@section('container')
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration">
                
                <h1 class="h3 mb-3 fw-normal"> <b>Form Registration</b></h1>
              <form action="/register" method="post">
                @csrf
                <div class="form-floating ">
                  <input type="text" name="name" class="form-control rounded-top  @error('name')is-invalid @enderror" id="name" placeholder="Nama Lengkap..." required value="{{ old ('name')}}">
                  <label for="name">Nama Lengkap</label>
                  @error('name')
                  <div class="invalid-feedback">
                     {{$message}}
                     </div>
              @enderror
                </div>
                <div class="form-floating">
                  <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username.." required value="{{ old ('username')}}">
                  <label for="username">Username</label>
                  @error('username')
                  <div class="invalid-feedback">
                     {{$message}}
                    </div>
                     @enderror
                     <div class="form-floating">
              <input type="text" name="nohp" class="form-control rounded-bottom @error('nohp')is-invalid @enderror" id="nohp" placeholder="No Hp" required >
              <label for="password">No HP</label>
              @error('nohp')
                  <div class="invalid-feedback">
                     {{$message}}
                     </div>
                     @enderror
                <div class="form-floating">
                  <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@gmail.com" required value="{{ old ('email')}}">
                  <label for="email">Email</label>
                  @error('email')
                  <div class="invalid-feedback">
                     {{$message}}
                    </div>
                     @enderror
                <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required >
              <label for="password">Password</label>
              @error('password')
                  <div class="invalid-feedback">
                     {{$message}}
                     </div>
                     @enderror
                     
            </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registrasi</button>
          </form>
                <small class="d-block text-center mt-3 ">Sudah Registrasi? Silahkan <a href="/login"class= 'text-decoration-none'>Login !</a></small>
              
            </main>

        </div>
    </div>


    
  </body>
</html>
@endsection

