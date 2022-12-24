@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Edit Data</h2>
          </div>

          <div class="col-lg-8">
            <form action="/dashboard/gazebos/{{ $gazebos->id}}" method="post" class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name',$gazebos->name)}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control @error ('nohp') is-invalid @enderror" id="nohp" name="nohp" required autofocus value="{{ old('nohp',$gazebos->nohp)}}">
                @error('nohp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_gazebos" class="form-label">Category Gazebo</label>
                <select class="form-select" name="category_gazebos_id">
                    @foreach ($category_gazebos as $category_gazebo)
                        @if (old('category_gazebos_id',$gazebos->category_gazebos_id) == $category_gazebo->id)
                    <option value="{{ $category_gazebo->id}}" selected>{{ $category_gazebo->name }}</option>
                    @else
                    <option value="{{ $category_gazebo->id}}">{{ $category_gazebo->name }}</option>
                    @endif
                    @endforeach
            </select>
                </div>
                <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('tanggal',$gazebos->tanggal)}}">
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="masuk" class="form-label">Jam Masuk</label>
                <input type="time" class="form-control @error ('masuk') is-invalid @enderror" id="masuk" name="masuk" required autofocus value="{{ old('masuk',$gazebos->masuk)}}">
                @error('masuk')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keluar" class="form-label">Keluar</label>
                <input type="time" class="form-control @error ('keluar') is-invalid @enderror" id="keluar" name="keluar" required autofocus value="{{ old('keluar',$gazebos->keluar)}}">
                @error('keluar')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
@endsection