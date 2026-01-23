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
                    <table class="table table-hover my-0" id="myTable">
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
                            @foreach ($transaksis as $item)
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td class="d-none d-xl-table-cell">{{ date('d-m-Y',strtotime($item -> waktu_transaksi)) }}</td>
                                <td class="d-none d-xl-table-cell">{{ $item -> nama_pelanggan }}</td>
                                <td class="d-none d-xl-table-cell">{{ $item -> layanan -> nama_layanan }}</td>
                                <td class="d-none d-xl-table-cell">{{ $item -> berat }}Kg</td>
                                <td><span class="badge bg-warning">Rp{{ number_format($item -> layanan -> harga_per_kg,0,'.','.') }}</span></td>
                                <td><span class="badge bg-success">Rp{{ number_format($item -> layanan -> harga_per_kg * $item -> berat,0,'.','.') }}</span></td>
                                <td><span class="badge bg-success">{{ $item -> keterangan }}</span></td>
                                <td>
                                    @if( $item -> pembayaran  == 'Lunas')
                                    {{ $item -> pembayaran }}<br>
                                    @endif
                                    @if ($item -> pembayaran == 'Belum Bayar')
                                    {{ $item -> pembayaran }}
                                    <a href="transaksi/bayar/{{ $item -> id_transaksi }}" class="btn btn-success btn-sm">Bayar</a>
                                    @endif
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a class="btn btn-primary" href="transaksi/edit/{{ $item -> id_transaksi }}">Ubah</a>
                                    <a class="btn btn-danger" onclick="return confirm('Apakah Ingin Menghapus Data ?')" href="/transaksi/destroy/{{ $item -> id_transaksi }}">Hapus</a>
                                    <a class="btn btn-warning"  href="/transaksi/struk/{{ $item -> id_transaksi }}">Struk</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection