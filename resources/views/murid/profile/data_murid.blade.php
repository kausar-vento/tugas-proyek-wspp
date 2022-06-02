@extends('layouts.nav_murid')

@section('navbar-murid')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Profile</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">NIM Murid</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->nim}}" disabled>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nama Murid</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->nama_murid}}" disabled>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Agama Murid</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->agama}}" disabled>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Tanggal Lahir</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->tanggal_lahir}}" disabled>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Tempat Lahir</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->tempat_lahir}}" disabled>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email Murid</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->email}}" disabled>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nomor HP</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->nomor_hp}}" disabled>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Umur Murid</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->umur}}" disabled>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Kelas Murid</span>
                </div>
                <input type="text" class="form-control" value="{{Auth::guard('websiswa')->user()->kelas->nama_kelas}}" disabled>
            </div>
        </div>
    </div>
    <a class="btn btn-success" href="{{route('murid-profile.edit', Auth::guard('websiswa')->user()->id)}}">Edit Profile</a>
</div>

@endsection
