@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penduduk </h1>
        <a href="/resident/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
        </a>
    </div>

    {{-- Table --}}
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-responsive table-bordered table-hovered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Status Perkawinan</th>
                                <th>Pekerjaan</th>
                                <th>Telepon</th>
                                <th>Status Penduduk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        @if (count($residents) < 1)
                            <tbody>
                                <tr>
                                    <td colspan="11">
                                        <p class="pt-3 text-center">Data Kosong</p>
                                    </td>
                                </tr>
                            </tbody>
                        @else
                            <tbody>
                                @foreach ($residents as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->name }}</td>

                                        {{-- JENIS KELAMIN --}}
                                        <td>
                                            @switch($item->gender)
                                                @case('male')
                                                    Laki-laki
                                                    @break
                                                @case('female')
                                                    Perempuan
                                                    @break
                                                @default
                                                    -
                                            @endswitch
                                        </td>

                                        <td>{{ $item->birth_place }}, {{ $item->birth_date }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->religion }}</td>

                                        {{-- STATUS PERKAWINAN --}}
                                        <td>
                                            @switch($item->marital_status)
                                                @case('single')
                                                    Belum Menikah
                                                    @break
                                                @case('married')
                                                    Menikah
                                                    @break
                                                @case('widowed')
                                                    Duda/Janda
                                                    @break
                                                @case('divorced')
                                                    Cerai
                                                    @break
                                                @default
                                                    -
                                            @endswitch
                                        </td>

                                        <td>{{ $item->occupation }}</td>
                                        <td>{{ $item->phone }}</td>

                                        {{-- STATUS PENDUDUK --}}
                                        <td>
                                            @switch($item->status)
                                                @case('active')
                                                    Aktif
                                                    @break
                                                @case('moved')
                                                    Pindah
                                                    @break
                                                @case('deceased')
                                                    Meninggal
                                                    @break
                                                @default
                                                    -
                                            @endswitch
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="/resident/{{ $item->id }}" 
                                                   class="d-inline-block mr-2 btn btn-sm btn-warning">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <button type="button" 
                                                    class="bts btn-sm btn-danger" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#confirmationDelete-{{ $item->id }}">
                                                    <i class="fas fa-eraser"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    @include('pages.resident.confirmation-delete')
                                @endforeach
                            </tbody>
                        @endif
                    </table>
                </div> 
            </div>
        </div>
    </div>
@endsection
