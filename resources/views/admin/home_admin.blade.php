@extends('layouts.nav_admin2')
@section('navbar-admin-2')
    
    <div>
        <h1>HALO, {{Auth::user()->name}}</h1>
    </div>

@endsection