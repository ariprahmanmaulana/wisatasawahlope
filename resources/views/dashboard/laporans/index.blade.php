@extends('dashboard.layouts.main') @section('container')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan Keuangan</h1>
</div>

{{-- notif post ditambahkan --}}
@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success')}}
</div>
@endif
<div class="table-responsive col-lg-12">
    <div class="row">
        <div class="mb-3 col-3">
            <label for="tgl">Bulan</label>
            <input
                type="month"
                name="bulan"
                id="month"
                value="2023-01"
                class="form-control"
                required="required">
        </div>
    </div>
    <a href="/dashboard/laporans/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped table-bordered" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Pemasukan</th>
                <th scope="col">Pengeluaran</th>
                <th scope="col">Saldo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $laporan)

            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $laporan->tanggal}}</td>
                <td>Rp. {{ $laporan->pemasukan}}</td>
                <td>Rp. {{ $laporan->pengeluaran}}</td>
                <td>Rp. {{ $laporan->saldo}}</td>
                <td>
                    <a href="/dashboard/laporans/{{$laporan->id}}/edit" class="badge bg-warning">
                        <span data-feather="edit"></span></a>
                    <form
                        action="/dashboard/laporans/{{ $laporan->id}}"
                        method="post"
                        class="d-inline">
                        @method('delete') @csrf
                        <button
                            class="badge bg-danger border-0"
                            onclick="return confirm ('Yakin Mau Hapus ?')">
                            <span data-feather="x-circle"></span></button>

                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection