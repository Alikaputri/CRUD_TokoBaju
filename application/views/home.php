<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info border-bottom shadow-sm">
  <a class="btn btn-outline-light" href="<?=base_url('alsafashion/logout')?>">Sign Out</a>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-light" href="<?=base_url('alsafashion/tambah')?>">Tambah Barang</a>
  </nav>
</div>

<div class="pricing-header px-3 py-1 pt-md- pb-md-4 mx-auto text-center">
  <h1 class="display-5 pt-0 text-info">-TOKO ALSAFASHION-</h1>
  <label class="text-info">Menjual berbagai macam pakaian muslimah, seperti Gamis, Tunik, Celana Panjang 
  dan lain sebagainya </label><br>
  <label class="text-info">Jl. Margonda No.1 - Depok, Hp. 08123456789, Email : alsafashion@gmail.com</label>
    <?php if($this->session->flashdata('pesan') == "Ditambah"): ?>
        <div class="alert alert-success" role="alert">
              Data Barang Telah Berhasil Ditambah!
        </div>
  <?php elseif($this->session->flashdata('pesan') == "Diubah"): ?>
        <div class="alert alert-success" role="alert">
              Data Barang Telah Berhasil diubah!
        </div>
  <?php elseif($this->session->flashdata('pesan') == "Dihapus"): ?>
        <div class="alert alert-success" role="alert">
              Data Barang Telah Berhasil dihapus!
        </div>
  <?php endif ?>
</div>

<div class="container"><br>
  <table class="table table-hover table-sm mb-5">
    <thead class="thead-dark align-middle">
      <tr>
        <th rowspan="1" class="align-middle text-center">No.</th>
        <th rowspan="1" class="text-center">Nama</th>
        <th rowspan="1" class="align-middle text-center">Ukuran</th>
        <th rowspan="1" class="align-middle text-center">Stok</th>
        <th rowspan="1" class="align-middle text-center">Harga</th>
        <th rowspan="1" class="align-middle text-center">Aksi</th>
      </tr>
    </thead></br>
    <tbody>
      <?php
      $no = 1;
      foreach ($barang as $data) :?>
          <tr <?php if ($data['Stok'] <= 5 ){ echo "class = 'bg-warning'";}?>>
            <th class="align-middle text-center"><?=$no++?></th>
            <td class="align-middle"><?=$data['Nama']?></td>
            <td class="align-middle text-center"><?=$data['Ukuran']?></td>
            <td class="align-middle text-center"><?=$data['Stok']?></td>
            <td class="align-middle text-center"><?=$data['Harga']?></td>
            <td class="align-middle text-center">
              <a href="<?=base_url('alsafashion/edit/' .$data['Id_Produk'])?>" class="align-middle btn btn-info">Edit</a>
              <a href="<?=base_url('alsafashion/delete/' .$data['Id_Produk'])?>" onclick="return confirm('Data barang akan dihapus!')" class="align-middle btn btn-primary">Hapus</a>
            </td>
          </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>