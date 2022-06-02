@extends('layouts.nav_admin2')
@section('navbar-admin-2')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Petugas</h1>
</div>

<div class="card">
    <h5 class="card-header"><a class="btn btn-primary" href="/admin-petugas/create">Tambah
            Petugas</a></h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>NIPD</th>
                        <th>Nama Petugas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($data_petugas as $p)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nipd}}</td>
                        <td>{{ $p->nama_petugas}}</td>
                        <td>
                            <a class="badge bg-info" href="{{route('admin-petugas.edit', $p->id)}}"><img
                                    src="https://img.icons8.com/material-two-tone/24/000000/edit--v1.png" /></a>
                            <form action="{{ route('admin-petugas.destroy', $p->id) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0"
                                    onclick="return confirm('Yakin Ingin Hapus Petugas Ini?')"><img style="width: 25px;"
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
