@extends('layouts.nav_admin2')
@section('navbar-admin-2')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Spp</h1>
</div>

<div class="card">
    <h5 class="card-header"><a class="btn btn-primary" href="/admin-spp/create">Tambah
            Spp</a></h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Tahun Ajaran</th>
                        <th>Bulan Pembayaran</th>
                        <th>Batas Pembayaran</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($data_spp as $s)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s->tahun_ajaran}}</td>
                        <td>{{ $s->bulan}}</td>
                        <td>{{ $s->batas_pembayaran}}</td>
                        <td>{{ $s->jumlah_pembayaran}}</td>
                        <td>
                            <a class="badge bg-info" href="{{route('admin-spp.edit', $s->id)}}"><img
                                    src="https://img.icons8.com/material-two-tone/24/000000/edit--v1.png" /></a>
                            <form action="{{route('admin-spp.destroy', $s->id)}}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0"
                                    onclick="return confirm('Yakin Ingin Hapus Spp Ini?')"><img style="width: 25px;"
                                        src="https://img.icons8.com/fluency/48/000000/filled-trash.png" /></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
