@extends('master')
@section('isi')
<div class="container d-flex flex-column">
			<div class="row vh-100">
					<div class="d-table-cell align-middle">
                        <div class="mt-4 mb-3">
							<h1 class="h2">Tambah Layanan</h1>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form>
										<div class="mb-3">
											<label class="form-label">Nama Layanan</label>
											<input class="form-control form-control-lg" type="text" name="email" placeholder="Masukkan Nama Layanan" />
										</div>
										<div class="mb-3">
											<label class="form-label">Harga/Kg</label>
											<input class="form-control form-control-lg" type="number" name="password" placeholder="Masukkan Harga" />
										</div>
										<div>
											
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Tambah</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
@endsection