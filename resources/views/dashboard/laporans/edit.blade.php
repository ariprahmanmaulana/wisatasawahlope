@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Edit Data</h2>
          </div>

          <div class="col-lg-8">
            <form action="/dashboard/laporans/{{ $laporans->id}}" method="post" class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('tanggal',$laporans->tanggal)}}">
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pemasukan" class="form-label">Pemasukan</label>
                <input type="text" class="form-control @error ('pemasukan') is-invalid @enderror" id="pemasukan" name="pemasukan" required autofocus value="{{ old('pemasukan',$laporans->pemasukan)}}">
                @error('pemasukan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pengeluaran" class="form-label">Pengeluaran</label>
                <input type="text" class="form-control @error ('pengeluaran') is-invalid @enderror" id="pengeluaran" name="pengeluaran" required autofocus value="{{ old('pengeluaran',$laporans->pengeluaran)}}">
                @error('pengeluaran')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="text" class="form-control @error ('saldo') is-invalid @enderror" id="saldo" name="saldo" required autofocus value="{{ old('saldo',$laporans->saldo)}}">
                @error('saldo')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
@endsection