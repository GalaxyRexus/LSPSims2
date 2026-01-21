@extends('master')
@section('isi')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Trans</strong>aksi</h1>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Transaksi</h5>
                         <div class="text-end"><a class="btn btn-success" href="/transaksi/create">Tambah</a></div>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="d-none d-xl-table-cell">Tanggal</th>
                                <th>Nama Pelanggan</th>
                                <th class="d-none d-md-table-cell">Layanan</th>
                                <th class="d-none d-md-table-cell">Beratnya</th>
                                <th class="d-none d-md-table-cell">Harga Satuan</th>
                                <th class="d-none d-md-table-cell">Jumlah Bayar</th>
                                <th class="d-none d-md-table-cell">Keterangan</th>
                                <th class="d-none d-md-table-cell">Pembayaran</th>
                                <th class="d-none d-md-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="d-none d-xl-table-cell">11-2-2024</td>
                                <td class="d-none d-xl-table-cell">Warsito</td>
                                <td class="d-none d-xl-table-cell">Cuci Saja</td>
                                <td class="d-none d-xl-table-cell">5kg</td>
                                <td><span class="badge bg-warning">Rp3.000</span></td>
                                <td><span class="badge bg-success">Rp15.000</span></td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td><span class="badge bg-success">Lunas</span></td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-primary">Ubah</a>
                                    <a class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="d-none d-xl-table-cell">11-2-2024</td>
                                <td class="d-none d-xl-table-cell">Warsini</td>
                                <td class="d-none d-xl-table-cell">Cuci Setrika</td>
                                <td class="d-none d-xl-table-cell">10kg</td>
                                <td><span class="badge bg-warning">Rp5.000</span></td>
                                <td><span class="badge bg-success">Rp50.000</span></td>
                                <td><span class="badge bg-primary">Proses</span></td>
                                <td><span class="badge bg-danger">Belum Bayar</span></td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-primary">Ubah</a>
                                    <a class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection