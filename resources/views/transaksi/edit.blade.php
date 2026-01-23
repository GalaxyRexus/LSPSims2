@extends('master')
@section('isi')
<div class="container d-flex flex-column">
			<div class="row vh-100">
					<div class="d-table-cell align-middle">
                        <div class="mt-4 mb-3">
							<h1 class="h2">Ubah Transaksi {{ $transaksiz -> nama_pelanggan }}</h1>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form>
										<div class="mb-3">
											<label class="form-label">Tanggal</label>
											<input class="form-control form-control-lg" type="date" name="waktu_transaksi" placeholder="Tanggal" required value="{{ $transaksiz -> waktu_transaksi }}" />
										</div>
										<div class="mb-3">
											<label class="form-label">Nama Pelanggan</label>
											<input class="form-control form-control-lg" type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required value="{{ $transaksiz -> nama_pelanggan }}" />
										</div>
										
										<div class="mb-3">
											<label class="form-label">Beratnya</label>
											<input class="form-control form-control-lg" type="text" name="berat" placeholder="Berat" required value="{{ $transaksiz -> berat }}" />
										</div>
										<div class="mb-3">
											<label class="form-label">Keterangan</label>
											<select class="form-control form-control-lg" type="number" name="keterangan" placeholder="Berat" required value="{{ old ($transaksiz -> keterangan) }}">
                                                <option value="">Masukkan Keterangan</option>
                                                <option value="Selesai">Selesai</option>
                                                <option value="Proses">Proses</option>
                                            </select>
										</div>
										<div class="mb-3">
											<label class="form-label">Pembayaran</label>
											<select class="form-control form-control-lg" type="number" name="pembayaran" placeholder="Bayar" required value="{{ $transaksiz -> pembayaran }}">
                                                <option value="">Pembayaran ?</option>
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