@extends('master')
@section('isi')
<div class="container d-flex flex-column">
			<div class="row vh-100">
					<div class="d-table-cell align-middle">
                        <div class="mt-4 mb-3">
							<h1 class="h2">Tambah Transaksi</h1>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form method="POST" action="{{ route('transaksi.store') }}">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Tanggal</label>
											<input class="form-control form-control-lg" type="date" name="waktu_transaksi" placeholder="Tanggal" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Nama Pelanggan</label>
											<input class="form-control form-control-lg" type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Layanan</label>
											<select class="form-control form-control-lg" type="text" name="id_layanan" placeholder="Masukkan Nama Pelanggan" required>
                                                <option value="">Pilih Layanan</option>
                                                @foreach ($layanan as $item)
                                                <option value="{{ $item -> id_layanan }}">{{ $item -> nama_layanan }}</option>
                                                @endforeach
                                            </select>
										</div>
										<div class="mb-3">
											<label class="form-label">Beratnya</label>
											<input class="form-control form-control-lg" type="text" name="berat" placeholder="Berat" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Keterangan</label>
											<select class="form-control form-control-lg" type="text" name="keterangan" placeholder="Keterangan" required>
                                                <option value="" disabled selected>Masukkan Keterangan</option>
                                                <option value="Selesai">Selesai</option>
                                                <option value="Proses">Proses</option>
                                            </select>
										</div>
										<div class="mb-3">
											<label class="form-label">Pembayaran</label>
											<select class="form-control form-control-lg" type="text" name="pembayaran" placeholder="Pembayaran" required>
                                                <option value="" disabled selected>Pembayaran ?</option>
                                                <option value="Belum Bayar">Belum Bayar</option>
                                                <option value="Lunas">Lunas</option>
                                            </select>
										</div>
										
										<div>
											
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Tambah</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
			</div>
		</div>
@endsection