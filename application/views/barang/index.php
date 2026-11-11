<h1 class="h3 mb-4 text-gray-800">Data Barang</h1>
<?php if ($this->session->flashdata('pesan')): ?>
<div class="alert alert-success"><?= $this->session->flashdata('pesan') ?></div>
<?php endif; ?>
<div class="card shadow">
<div class="card-body">
<a href="<?= site_url('barang/tambah') ?>" class="btn btn-primary btn-sm mb-3">Tambah</a>
<table class="table table-bordered">
<tr><th>No</th><th>Kode</th><th>Nama</th><th>Jumlah</th><th>Kondisi</th><th>Lokasi</th><th>Aksi</th></tr>
<?php $no = 1; foreach ($barang as $b): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $b->kode_barang ?></td>
<td><?= $b->nama_barang ?></td>
<td><?= $b->jumlah ?></td>
<td><?= $b->kondisi ?></td>
<td><?= $b->lokasi ?></td>
<td>
<a href="<?= site_url('barang/edit/'.$b->id_barang) ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="<?= site_url('barang/hapus/'.$b->id_barang) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>