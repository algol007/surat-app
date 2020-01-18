<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-row">
            <div class="col">
                <input type="hidden" name="id" value="<?= $disposisi['id'] ?>">
                <div class="form-group">
                    <label for="tujuanDisposisi">Tujuan Disposisi</label>
                    <input type="text" class="form-control" id="tujuanDisposisi" name="tujuanDisposisi" value="<?= $disposisi['tujuan_disposisi']; ?>">
                </div>
                <div class=" form-group">
                    <label for="isiDisposisi">Isi Disposisi</label>
                    <input type="text" class="form-control" id="isiDisposisi" name="isiDisposisi" value="<?= $disposisi['isi_disposisi']; ?>">
                </div>
                <div class="form-group">
                    <label for="batasWaktu">Batas Waktu</label>
                    <input type="date" class="form-control" id="batasWaktu" name="batasWaktu" value="<?= $disposisi['batas_waktu']; ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <input type="text" class="form-control" id="catatan" name="catatan" value="<?= $disposisi['catatan']; ?>">
                </div>
                <div class="form-group">
                    <label for="sifatDisposisi">Pilih Sifat Disposisi</label>
                    <select class="form-control" id="sifatDisposisi" name="sifatDisposisi">
                        <option value="<?= $disposisi['sifat_disposisi']; ?>" selected></option>
                        <option value="Biasa">Biasa</option>
                        <option value="Penting">Penting</option>
                        <option value="Segera">Segera</option>
                        <option value="Rahasia">Rahasia</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="" class="btn btn-danger">Batal</button>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->