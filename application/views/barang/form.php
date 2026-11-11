<?php $edit = isset($b); ?>
<h1 class="h3 mb-4 text-gray-800"><?= $edit ? 'Edit' : 'Tambah' ?> Barang</h1>
<div class="card shadow">
<div class="card-body">
<form method="post" action="<?= $edit ? site_url('barang/update/'.$b->id_barang) : site_url('barang/simpan') ?>">
<label>Kode Barang</label>
<input type="text" name="kode_barang" class="form-control mb-2" value="<?= $edit ? $b->kode_barang : '' ?>" required>
<label>Nama Barang</label>
<input type="text" name="nama_barang" class="form-control mb-2" value="<?= $edit ? $b->nama_barang : '' ?>" required>
<label>Jumlah</label>
<input type="number" name="jumlah" class="form-control mb-2" value="<?= $edit ? $b->jumlah : '' ?>" required>
<label>Lokasi</label>
<input type="text" name="lokasi" class="form-control mb-2" value="<?= $edit ? $b->lokasi : '' ?>" required>
<label>Kondisi</label>
<select name="kondisi" class="form-control mb-3">
<option <?= ($edit && $b->kondisi == 'Baik') ? 'selected' : '' ?>>Baik</option>
<option <?= ($edit && $b->kondisi == 'Rusak') ? 'selected' : '' ?>>Rusak</option>
</select>
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?= site_url('barang') ?>" class="btn btn-secondary">Kembali</a>
</form>
</div>
</div>