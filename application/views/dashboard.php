<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info border-bottom shadow-sm">
	<a class="btn btn-outline-light" href="<?=base_url('alsafashion/logout')?>">Sign Out</a>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-info my-5">
				<div class="card-header text-center">Edit Data Barang</div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<input type="hidden" name="Id_Produk" value="<?=$barang['Id_Produk']?>">
						<div class="form-group">
							<label for="nm_barang">Nama Barang</label>
							<input type="text" class="form-control" name="nm_barang" id="nm_barang" placeholder="Masukan Nama Barang" autocomplete="off" required value="<?=$barang['Nama']?>">
							<div class="invalid-feedback">
								Nama barang belum diisi
							</div>
						</div>
						<div class="form-group">
							<label for="ukuran">Ukuran Barang</label>
							<input type="ukuran" class="form-control" name="ukuran" id="ukuran" placeholder="Masukan Ukuran Barang" autocomplete="off" required value="<?=$barang['Ukuran']?>">
							<div class="invalid-feedback">
								Ukuran barang belum diisi
							</div>
						</div>
						<div class="form-group">
							<label for="stok">Stok Barang</label>
							<input type="stok" class="form-control" name="stok" id="stok" placeholder="Masukan Jumlah Stok Barang" autocomplete="off" required value="<?=$barang['Stok']?>">
							<div class="invalid-feedback">
								Tidak ada jumlah stok barang
							</div>
						</div>
						<div class="form-group">
							<label for="harga">Harga Barang</label>
							<input type="harga" class="form-control" name="harga" id="harga" placeholder="Masukan Harga Barang" autocomplete="off" required value="<?=$barang['Harga']?>">
							<div class="invalid-feedback">
								Harga Barang tidak ada
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="edit">Edit</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>