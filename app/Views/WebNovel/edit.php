<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Author</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url("webnovel/update/$webnovel->id_webnovel") ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $webnovel->nama; ?>">
                </div>

                <div class="form-group">
                    <label for="judul_komik">Judul Novel</label>
                    <input type="text" class="form-control" id="judul_komik" name="judul_komik" value="<?= $webnovel->judul_komik; ?>" />
                </div>

                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="<?= $webnovel->genre; ?>" />
                </div>

                <div class="form-group">
                    <label for="jadwal">Jadwal</label>
                    <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?= $webnovel->jadwal; ?>" />
                </div>
                <div class="form-group">
                    <label for="ringkasan">Ringkasan</label>
                    <textarea class="form-control" name="ringkasan" id="ringkasan"><?= $webnovel->ringkasan; ?></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>