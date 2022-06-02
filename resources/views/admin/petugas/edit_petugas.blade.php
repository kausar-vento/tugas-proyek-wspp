@extends('layouts.nav_admin2')
@section('navbar-admin-2')

<div class="card">
    <h5 class="card-header">Form Edit Petugas</h5>
    <form method="POST" action="{{route('admin-petugas.update', $data->id)}}">
        @method('put')
        @csrf
        <div class="card-body">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img 
                    src="https://img.icons8.com/ios/30/000000/checked-identification-documents.png"/></span>
                <input type="text" name="nipd" class="form-control @error('nipd') is-invalid @enderror"
                    placeholder="NIPD" aria-label="Username" aria-describedby="basic-addon1"
                    value="{{ old('nipd', $data->nipd)}}">
                @error('nipd')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img 
                    src="https://img.icons8.com/ios/30/000000/name--v1.png"/></span>
                <input type="text" name="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror"
                    placeholder="Nama Petugas" aria-label="Username" aria-describedby="basic-addon1"
                    value="{{ old('nama_petugas', $data->nama_petugas)}}">
                @error('nama_petugas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit <img
                src="https://img.icons8.com/color/30/000000/submit-progress--v1.png" /></button>
        <a href="/admin-petugas" class="btn btn-primary">Back</a>
    </form>
</div>


@endsection
