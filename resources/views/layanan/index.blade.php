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
                    <table class="table table-hover my-0" id="myTable">
                        <thead>
                            
                            <tr>
                                <th>No</th>
                                <th class="d-none d-xl-table-cell">Layanan</th>
                                <th>Harga per kg</th>
                                <th class="d-none d-md-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanans as $item)
                            <tr>
                                <td>{{  $loop->iteration }}</td>
                                <td class="d-none d-xl-table-cell">{{ $item -> nama_layanan }}</td>
                                <td><span class="badge bg-success">Rp{{ number_format($item -> harga_per_kg,0,',',',') }}</span></td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-primary" href="/layanan/edit/{{ $item -> id_layanan }}">Ubah</a>
                                    <a class="btn btn-danger" href="/layanan/destroy/{{$item -> id_layanan }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection