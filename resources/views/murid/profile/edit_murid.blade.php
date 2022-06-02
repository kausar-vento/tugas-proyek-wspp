@extends('layouts.nav_murid')

@section('navbar-murid')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Profile</h1>
</div>

<div class="container">
    <form method="POST" action="{{route('murid-profile.update', $data->id)}}">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nama Murid</span>
                    </div>
                    <input type="text" name="nama_murid" class="form-control" 
                        value="{{Auth::guard('websiswa')->user()->nama_murid}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Agama Murid</span>
                    </div>
                    <input type="text" name="agama" class="form-control" value="{{Auth::guard('websiswa')->user()->agama}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tanggal Lahir</span>
                    </div>
                    <input type="date" name="tanggal_lahir" class="form-control" 
                        value="{{Auth::guard('websiswa')->user()->tanggal_lahir}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tempat Lahir</span>
                    </div>
                    <input type="text" name="tempat_lahir" class="form-control" 
                        value="{{Auth::guard('websiswa')->user()->tempat_lahir}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email Murid</span>
                    </div>
                    <input type="email" name="email" class="form-control" 
                        value="{{Auth::guard('websiswa')->user()->email}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nomor HP</span>
                    </div>
                    <input type="number" name="nomor_hp" class="form-control" 
                        value="{{Auth::guard('websiswa')->user()->nomor_hp}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Umur Murid</span>
                    </div>
                    <input type="number" name="umur" class="form-control" 
                        value="{{Auth::guard('websiswa')->user()->umur}}">
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="/murid-profile">Back</a>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>

@endsection
