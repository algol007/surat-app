<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="tujuanDisposisi">Tujuan Disposisi</label>
                    <input type="text" class="form-control" id="tujuanDisposisi" name="tujuanDisposisi" placeholder="Tujuan Disposisi">
                </div>
                <div class="form-group">
                    <label for="isiDisposisi">Isi Disposisi</label>
                    <input type="text" class="form-control" id="isiDisposisi" name="isiDisposisi" placeholder="Isi Diposisi">
                </div>
                <div class="form-group">
                    <label for="batasWaktu">Batas Waktu</label>
                    <input type="date" class="form-control" id="batasWaktu" name="batasWaktu" placeholder="Batas Waktu">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <input type="text" class="form-control" id="catatan" name="catatan" placeholder="Catatan">
                </div>
                <div class="form-group">
                    <label for="sifatDisposisi">Pilih Sifat Disposisi</label>
                    <select class="form-control" id="sifatDisposisi" name="sifatDisposisi">
                        <option>Biasa</option>
                        <option>Penting</option>
                        <option>Segera</option>
                        <option>Rahasia</option>
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