@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Dashboard</h2>
        </div>
    </div>
</div>
<div class="row m-t-25">
    <div class="col-sm-12 col-lg-12">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text pb-4">
                        <h2>{{ $jumlah_pegawai }}</h2>
                        <span>Total Pegawai</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
