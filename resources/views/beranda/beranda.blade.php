@extends('master')
@section('isi')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
        <div class="col">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h3 class="card-title">Jumlah Layanan</h3>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $jumlay }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Transaksi Baru</h5>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $jumtrans }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Sedang Diproses</h5>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $sedpros }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Belum Dibayar</h5>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">1</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="h3 mb-3"><strong>Transaksi</strong> Terbaru</h1>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Latest Projects</h5>
                    </div>
                    <table class="table table-hover my-0" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="d-none d-xl-table-cell">Nama Pelanggan</th>
                                <th class="d-none d-xl-table-cell">Layanan</th>
                                <th>Berat</th>
                                <th class="d-none d-md-table-cell">Tanggal Transaksi</th>
                                <th class="d-none d-md-table-cell">Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($transaksis as $item)
                                
                                @endforeach
                                <td>1</td>
                                <td class="d-none d-xl-table-cell">{{ $item -> nama_pelanggan }}</td>
                                <td class="d-none d-xl-table-cell">{{ $item -> layanan -> nama_layanan }}</td>
                                <td><span class="badge bg-success">{{ $item -> berat }}</span></td>
                                <td class="d-none d-md-table-cell">{{ date('d-m-Y',strtotime($item -> waktu_transaksi) ) }}</td>
                                <td class="d-none d-md-table-cell">{{ $item -> pembayaran }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection