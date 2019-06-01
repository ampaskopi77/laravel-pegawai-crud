@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Pegawai</h2>
            <a class="btn btn-success btn-sm" href="{{ url('/pegawai/tambah') }}">Tambah Pegawai</a>
        </div>
    </div>
</div>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-data3">
                <thead>
                    <tr>
                        <th rowspan='2' class='align-middle'>No</th>
                        <th rowspan='2' class='align-middle'>Nama</th>
                        <th rowspan='2' class='align-middle'>Alamat</th>
                        <th rowspan='2' class='align-middle'>Jabatan</th>
                        <th colspan='3' class='text-center'>Gaji</th>
                        <th rowspan='2' class='align-middle'>Total Gaji</th>
                        <th rowspan='2' colspan='2' class='text-center align-middle'>Aksi</th>
                    </tr>
                    <tr>
                        <th class='text-center'>Bulan 1</th>
                        <th class='text-center'>Bulan 2</th>
                        <th class='text-center'>Bulan 3</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawais as $pegawai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->alamat }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>{{ $pegawai->gaji_bulan1 }}</td>
                        <td>{{ $pegawai->gaji_bulan2 }}</td>
                        <td>{{ $pegawai->gaji_bulan3 }}</td>
                        <td>{{ $pegawai->gaji_bulan1+$pegawai->gaji_bulan2+$pegawai->gaji_bulan3 }}</td>
                        <td><a class="btn btn-primary btn-sm" href="{{ url('/pegawai/edit/'.$pegawai->id) }}">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" href="{{ url('/pegawai/hapus/'.$pegawai->id) }}">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection
