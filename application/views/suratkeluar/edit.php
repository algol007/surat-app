<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-row">
            <div class="col">
                <input type="hidden" name="id" value="<?= $surat_keluar['id'] ?>">
                <div class="form-group">
                    <label for="tujuanSurat">Tujuan Surat</label>
                    <input type="text" class="form-control" id="tujuanSurat" name="tujuanSurat" value="<?= $surat_keluar['tujuan_surat'] ?>">
                </div>
                <div class="form-group">
                    <label for="tanggalSurat">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" value="<?= $surat_keluar['tanggal_surat'] ?>">
                </div>
                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" class="form-control" id="perihal" name="perihal" value="<?= $surat_keluar['perihal'] ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="nomorSurat">Nomor Surat</label>
                    <input type="text" class="form-control" id="nomorSurat" name="nomorSurat" value="<?= $surat_keluar['nomor_surat'] ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $surat_keluar['keterangan'] ?>">
                </div>
                <div class="form-group">
                    <label for="fileSurat">File Surat</label><br>
                    <input type="file" id="fileSurat" name="fileSurat">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="submit" class="btn btn-danger">Batal</button>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->