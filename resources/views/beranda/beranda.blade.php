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
                            <h1 class="mt-1 mb-3">5</h1>
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
                            <h1 class="mt-1 mb-3">3</h1>
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
                            <h1 class="mt-1 mb-3">2</h1>
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
                    <table class="table table-hover my-0">
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
                                <td>1</td>
                                <td class="d-none d-xl-table-cell">Warsini</td>
                                <td class="d-none d-xl-table-cell">Cuci Setrika</td>
                                <td><span class="badge bg-success">10kg</span></td>
                                <td class="d-none d-md-table-cell">12 Feb 2024</td>
                                <td class="d-none d-md-table-cell">Belum Bayar</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="d-none d-xl-table-cell">Warsito</td>
                                <td class="d-none d-xl-table-cell">Cuci Saja</td>
                                <td><span class="badge bg-success">5kg</span></td>
                                <td class="d-none d-md-table-cell">11 Feb 2024</td>
                                <td class="d-none d-md-table-cell">Lunas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection