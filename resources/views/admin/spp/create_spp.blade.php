@extends('layouts.nav_admin2')
@section('navbar-admin-2')

<div class="card">
    <h5 class="card-header">Form Tambah Spp</h5>
    <form action="{{route('admin-spp.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img
                        src="https://img.icons8.com/ios-filled/30/000000/important-month.png" /></span>
                <input type="number" name="tahun_ajaran"
                    class="form-control @error('tahun_ajaran') is-invalid @enderror" placeholder="Tahun Ajaran"
                    aria-label="Username" aria-describedby="basic-addon1" value="{{ old('tahun_ajaran')}}">
                @error('tahun_ajaran')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            @php
            for ($i=1; $i <= 12; $i++) { $dropdown['months'][$i]=date('F', mktime(0, 0, 0, $i, 1)); } @endphp 
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01"><img
                        src="https://img.icons8.com/ios-filled/30/000000/important-month.png" /></label>
                <select class="form-select" id="inputGroupSelect01" name="bulan">
                    <option selected>Bulan SPP</option>
                    @foreach ($dropdown['months'] as $month => $monthName)
                    <option value="{{ $monthName }}">
                        {{ $monthName }}
                    </option>
                    @endforeach
                </select>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img
                    src="https://img.icons8.com/ios-filled/30/000000/important-month.png" /></span>
            <input type="date" name="batas_pembayaran"
                class="form-control @error('batas_pembayaran') is-invalid @enderror" placeholder="Batas Pembayaran"
                aria-label="Username" aria-describedby="basic-addon1" value="{{ old('batas_pembayaran')}}">
            @error('batas_pembayaran')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img
                    src="https://img.icons8.com/ios/30/000000/price-tag-euro.png" /></span>
            <input type="number" name="jumlah_pembayaran"
                class="form-control @error('jumlah_pembayaran') is-invalid @enderror" placeholder="Harga SPP"
                aria-label="Username" aria-describedby="basic-addon1" value="{{ old('jumlah_pembayaran', 450000)}}">
            @error('jumlah_pembayaran')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
</div>
<button type="submit" name="submit" class="btn btn-success">Submit <img
        src="https://img.icons8.com/color/30/000000/submit-progress--v1.png" /></button>
<a href="/admin-spp" class="btn btn-primary">Back</a>
</form>
</div>


@endsection
