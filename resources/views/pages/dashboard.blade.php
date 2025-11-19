@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Dashboard Penduduk</h1>

    {{-- =======================
        Statistik Umum Penduduk
    ======================== --}}
    <h5 class="mb-3 font-weight-bold text-primary">Statistik Umum</h5>
    <div class="row">

        <!-- Total Penduduk -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-primary p-3">
                <h6 class="text-muted">Total Penduduk</h6>
                <h3 class="font-weight-bold">{{ $total }}</h3>
            </div>
        </div>

        <!-- Laki-laki -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-info p-3">
                <h6 class="text-muted">Laki-Laki</h6>
                <h3 class="font-weight-bold">{{ $laki }}</h3>
            </div>
        </div>

        <!-- Perempuan -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-danger p-3">
                <h6 class="text-muted">Perempuan</h6>
                <h3 class="font-weight-bold">{{ $perempuan }}</h3>
            </div>
        </div>

    </div>


    {{-- =======================
        Status Keaktifan
    ======================== --}}
    <h5 class="mt-4 mb-3 font-weight-bold text-success">Status Keaktifan</h5>
    <div class="row">

        <!-- Aktif -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-success p-3">
                <h6 class="text-muted">Penduduk Aktif</h6>
                <h3 class="font-weight-bold">{{ $aktif }}</h3>
            </div>
        </div>

        <!-- Pindah -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-warning p-3">
                <h6 class="text-muted">Penduduk Pindah</h6>
                <h3 class="font-weight-bold">{{ $pindah }}</h3>
            </div>
        </div>

        <!-- Meninggal -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-dark p-3">
                <h6 class="text-muted">Penduduk Meninggal</h6>
                <h3 class="font-weight-bold">{{ $meninggal }}</h3>
            </div>
        </div>

    </div>


    {{-- =======================
        Status Perkawinan
    ======================== --}}
    <h5 class="mt-4 mb-3 font-weight-bold text-secondary">Status Perkawinan</h5>
    <div class="row">

        <!-- Belum Menikah -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-left-secondary p-3">
                <h6 class="text-muted">Belum Menikah</h6>
                <h3 class="font-weight-bold">{{ $single }}</h3>
            </div>
        </div>

        <!-- Menikah -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-left-primary p-3">
                <h6 class="text-muted">Menikah</h6>
                <h3 class="font-weight-bold">{{ $married }}</h3>
            </div>
        </div>

        <!-- Duda/Janda -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-left-danger p-3">
                <h6 class="text-muted">Duda/Janda</h6>
                <h3 class="font-weight-bold">{{ $widowed }}</h3>
            </div>
        </div>

        <!-- Cerai -->
        <div class="col-md-3 mb-4">
            <div class="card shadow border-left-info p-3">
                <h6 class="text-muted">Cerai</h6>
                <h3 class="font-weight-bold">{{ $divorced }}</h3>
            </div>
        </div>
    </div>
@endsection