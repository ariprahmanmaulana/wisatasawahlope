
@extends('layouts.main')
@section('container')

<div class="row ms-4 mt-4">
    <div class="col-md-8">
        <div class="table-responsive col-lg-8">
            <h5 >Gazebo yang sudah dibooking</h5>
            <h6 class="mb-3">Silahkan untuk booking yang masih kosong </h6>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Nomor</th>
                  <th scope="col">Kategori Gazebo</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Jam Masuk</th>
                  <th scope="col">Jam Keluar</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($gazebos as $gazebo)
                      <tr>
                  <td>{{ $loop->iteration}}</td>
                  <td>{{ $gazebo->category_gazebos->name}}</td>
                  <td>{{ $gazebo->tanggal}}</td>
                  <td>{{ $gazebo->masuk}}</td>
                  <td>{{ $gazebo->keluar}}</td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Booking</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
            <form action="/booking" method="post" class="mb-5" enctype="multipart/form-data">
                @csrf
                @foreach ($daftar_user as $data)
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" readonly required autofocus value="{{$data->name}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">Nomor Whatshap</label>
                <input type="text" class="form-control @error ('nohp') is-invalid @enderror" id="nohp" name="nohp" required readonly autofocus value="{{$data->nohp}}">
                @error('nohp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                @endforeach
            </div>
            <div class="mb-3">
                <label for="category_gazebos" class="form-label">Category Gazebo</label>
                <select class="form-select" name="category_gazebos_id">
                    @foreach ($category_gazebos as $gazebo)
                        @if (old('category_gazebos_id') == $gazebo->id)
                    <option value="{{ $gazebo->id}}" selected>{{ $gazebo->name }}</option>
                    @else
                    <option value="{{ $gazebo->id}}">{{ $gazebo->name }}</option>
                    @endif
                    @endforeach
            </select>
                </div>
                <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('tanggal')}}">
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="masuk" class="form-label">Jam Masuk</label>
                <input type="time" min="08:00" max="16:30" class="form-control @error ('masuk') is-invalid @enderror" id="masuk" name="masuk" required autofocus value="{{ old('masuk')}}">
                @error('masuk')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keluar" class="form-label">Keluar</label>
                <input type="time" min="08:00" max="16:30" class="form-control @error ('keluar') is-invalid @enderror" id="keluar" name="keluar" required autofocus value="{{ old('keluar')}}">
                @error('keluar')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Booking</button>
            </form>
          </div>
          </div>


@endsection