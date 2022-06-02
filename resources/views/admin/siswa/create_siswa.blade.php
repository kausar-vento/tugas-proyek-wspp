@extends('layouts.nav_admin2')
@section('navbar-admin-2')

<div class="card">
    <h5 class="card-header">Form Tambah Siswa</h5>
    <form method="POST" action="{{ route('admin-siswa.store')}}">
        @csrf
        <div class="card-body">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/external-phatplus-lineal-phatplus/30/000000/external-id-school-phatplus-lineal-phatplus.png" /></span>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" placeholder="Nim Murid"
                    aria-label="Username" name="nim" aria-describedby="basic-addon1" value="{{ old('nim')}}">
                @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/ios/30/000000/name--v1.png" /></span>
                <input type="text" class="form-control @error('nama_murid') is-invalid @enderror"
                    placeholder="Nama Murid" aria-label="Username" name="nama_murid" aria-describedby="basic-addon1"
                    value="{{ old('nama_murid')}}">
                @error('nama_murid')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/external-others-zufarizal-robiyanto/30/000000/external-religion-ramadan-others-zufarizal-robiyanto.png" /></span>
                <input type="text" class="form-control @error('agama') is-invalid @enderror" placeholder="Agama Murid"
                    aria-label="Username" name="agama" aria-describedby="basic-addon1" value="{{ old('agama')}}">
                @error('agama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/ios/30/000000/calendar-13.png" /></span>
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    aria-label="Username" name="tanggal_lahir" aria-describedby="basic-addon1"
                    value="{{ old('tanggal_lahir')}}">
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/external-others-pike-picture/30/000000/external-born-maternity-hospital-others-pike-picture-2.png" /></span>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                    placeholder="Tempat Lahir Murid" aria-label="Username" name="tempat_lahir"
                    aria-describedby="basic-addon1" value="{{ old('tempat_lahir')}}">
                @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/ios/30/000000/email-open.png" /></span>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Murid"
                    aria-label="Username" name="email" aria-describedby="basic-addon1" value="{{ old('email')}}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/external-outline-kendis-lasman/30/000000/external-handphone-ecommerce-basic-line-outline-kendis-lasman.png" /></span>
                <input type="number" class="form-control @error('nomor_hp') is-invalid @enderror"
                    placeholder="Nomor HP Murid" aria-label="Username" name="nomor_hp" aria-describedby="basic-addon1"
                    value="{{ old('nomor_hp')}}">
                @error('nomor_hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/ios/30/000000/show-password.png" /></span>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="***********" aria-label="Username" name="password" aria-describedby="basic-addon1"
                    value="{{ old('password')}}">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/ios/30/000000/age.png" /></span>
                <input type="number" class="form-control @error('umur') is-invalid @enderror" placeholder="Umur Murid"
                    aria-label="Username" name="umur" aria-describedby="basic-addon1" value="{{ old('umur')}}">
                @error('umur')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01"><img
                        src="https://img.icons8.com/ios/30/000000/class.png" /></label>
                <select class="form-select" id="inputGroupSelect01" name="kelas_id">
                    <option selected>Kelas Murid...</option>
                    @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="/admin-siswa" class="btn btn-primary">Back</a>
    </form>
</div>



@endsection
