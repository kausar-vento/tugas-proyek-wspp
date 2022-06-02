@extends('layouts.nav_murid')

@section('navbar-murid')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Pembayaran SPP</h1>
</div>

<form action="{{route('murid-pembayaran.store')}}" method="post">
    @csrf
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">SPP</label>
        <select class="form-select" id="inputGroupSelect01" name="spp_id">
            <option>Choose...</option>
            @foreach ($data_spp as $spp)
            <option value="{{$spp->id}}">{{$spp->bulan}}</option>
            @endforeach
        </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Jumlah Yang Harus Dibayar</span>
        @foreach ($data_spp as $spp)
        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1" value="{{$spp->jumlah_pembayaran}}" disabled>
        @endforeach
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nama Murid</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1" value="{{Auth::guard('websiswa')->user()->nama_murid}}">
        <input type="hidden" name="siswa_id" value="{{Auth::guard('websiswa')->user()->id}}">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Bayar</span>
        <input type="text" class="form-control @error('jumlah_bayar') is-invalid  @enderror" name="jumlah_bayar"
            placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        @error('jumlah_bayar')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button class="btn btn-success" type="submit">Submit</button>

</form>



@endsection
