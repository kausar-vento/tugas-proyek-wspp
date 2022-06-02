@extends('layouts.nav_admin2')
@section('navbar-admin-2')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Siswa</h1>
</div>

<div class="card">
    <h5 class="card-header"><a class="btn btn-primary" href="/admin-siswa/create">Tambah
            Siswa</a></h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>NIM Murid</th>
                        <th>Nama Murid</th>
                        <th>Agama Murid</th>
                        <th>Tanggal_Lahir</th>
                        <th>Tempat_Lahir</th>
                        <th>Email</th>
                        <th>Nomor Hp</th>
                        <th>Umur</th>
                        <th>Kelas Murid</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_siswa as $s)
                    <tr>
                        <td>{{ $s->nim }}</td>
                        <td>{{ $s->nama_murid }}</td>
                        <td>{{ $s->agama }}</td>
                        <td>{{ $s->tanggal_lahir }}</td>
                        <td>{{ $s->tempat_lahir }}</td>
                        <td>{{ $s->email }}</td>
                        <td>{{ $s->nomor_hp }}</td>
                        <td>{{ $s->umur }}</td>
                        <td>{{ $s->kelas->nama_kelas }}</td>
                        <td>
                            <form action="{{ route('admin-siswa.destroy', $s->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="badge bg-danger border-0"
                                onclick="return confirm('Yakin Ingin Hapus Siswa Ini?')"><img
                                    src="https://img.icons8.com/fluency/24/000000/filled-trash.png" /></button>
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
