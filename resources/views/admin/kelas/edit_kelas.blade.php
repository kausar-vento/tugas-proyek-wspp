@extends('layouts.nav_admin2')
@section('navbar-admin-2')

<div class="card">
    <h5 class="card-header">Form Edit Kelas</h5>
    <form method="POST" action="{{route('admin-kelas.update', $data->id)}}">
        @method('put')
        @csrf
        <div class="card-body">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/ios/30/000000/class.png" /></span>
                <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror"
                    placeholder="Nama Kelas" aria-label="Username" aria-describedby="basic-addon1"
                    value="{{ old('nama_kelas', $data->nama_kelas)}}">
                @error('nama_kelas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit <img
                src="https://img.icons8.com/color/30/000000/submit-progress--v1.png" /></button>
        <a href="/admin-kelas" class="btn btn-primary">Back</a>
    </form>
</div>


@endsection
