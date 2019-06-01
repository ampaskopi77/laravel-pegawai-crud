@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Tambah Pegawai</div>
            <div class="card-body">
                <form action="{{ url('/pegawai/menambahkan') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-1">Nama</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Alamat</label>
                        <input name="alamat" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Jabatan</label>
                        <input name="jabatan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Gaji Bulan 1</label>
                        <input name="gajibulan1" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Gaji Bulan 2</label>
                        <input name="gajibulan2" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Gaji Bulan 3</label>
                        <input name="gajibulan3" type="number" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-success">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
