<?= $this->extend("Layouts/template"); ?>

<?= $this->section("content"); ?>

<div class="container my-3 w-50">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Siswa</h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('siswa/' .$siswa['id']) ?>" method="POST">
                <?php csrf_field();?>
                <input type="hidden" name="_method" value="PUT">
                <ul class="list-group">
                    Nama <input type="text" name="name" value="<?= $siswa['name']?>" required>
                    NIS <input type="text" name="nis" value="<?= $siswa['nis']?>" required>
                    Email <input type="text" name="email" value="<?= $siswa['email']?>" required>
                </ul>
                <hr>
                <a href="<?= base_url('siswa') ?>" class="btn btn-primary">Kembali</a>   
                <input type="submit" value="ubah data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>