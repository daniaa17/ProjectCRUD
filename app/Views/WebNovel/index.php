<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
        <h3>Data Author WebNovel</h3>
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan keyword pencarian..." name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="submit">Cari</button>
                </div>
            </div>
        </form>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/webnovel/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Judul Novel</th>
                    <th>Genre</th>
                    <th>Jadwal</th>
                    <th>Ringkasan</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1 + (5 * ($currentPage - 1)) ; ?>
                <?php foreach ($webnovel as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->nama; ?></td>
                        <td><?= $row->judul_komik; ?></td>
                        <td><?= $row->genre; ?></td>
                        <td><?= $row->jadwal; ?></td>
                        <td><?= $row->ringkasan; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("webnovel/edit/$row->id_webnovel"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("webnovel/delete/$row->id_webnovel") ?>" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus data ini ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?= $pager->links('webnovel', 'webnovel_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>