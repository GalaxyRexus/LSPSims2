@extends('master')
@section('isi')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Lay</strong>anan</h1>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Latest Projects</h5>
                        <div class="text-end"><a class="btn btn-success" href="/layanan/create">Tambah</a></div>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="d-none d-xl-table-cell">Layanan</th>
                                <th>Harga per kg</th>
                                <th class="d-none d-md-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="d-none d-xl-table-cell">Cuci Setrika</td>
                                <td><span class="badge bg-success">Rp. 5.000</span></td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-primary">Ubah</a>
                                    <a class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="d-none d-xl-table-cell">Cuci Saja</td>
                                <td><span class="badge bg-success">Rp. 3.000</span></td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-primary">Ubah</a>
                                    <a class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="d-none d-xl-table-cell">Setrika Saja</td>
                                <td><span class="badge bg-success">Rp. 2.000</span></td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-primary">Ubah</a>
                                    <a class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="d-none d-xl-table-cell">Express 12 Jam</td>
                                <td><span class="badge bg-success">Rp. 8.000</span></td>
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