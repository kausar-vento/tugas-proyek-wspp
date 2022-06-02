@extends('layouts.nav_petugas')

@section('navbar-petugas')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Laporan</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Bulan SPP</th>
                        <th>Nama Murid</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_pembayaran as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->spp->bulan }}</td>
                        <td>{{ $p->siswa->nama_murid }}</td>
                        <td><button class="btn btn-success" disabled="disabled">
                                SUKSES
                        </button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection