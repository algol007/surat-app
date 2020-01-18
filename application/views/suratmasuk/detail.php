<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="asalSurat">Asal Surat</label>
                    <input type="text" class="form-control" id="asalSurat" name="asalSurat" placeholder="Asal Surat">
                </div>
                <div class="form-group">
                    <label for="nomorSurat">Nomor Surat</label>
                    <input type="text" class="form-control" id="nomorSurat" name="nomorSurat" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tanggalSurat">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tanggalSurat" name="tanggalSurat" placeholder="Tanggal Surat">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label for="fileSurat">File Surat</label><br>
                    <input type="file" id="fileSurat" name="fileSurat">
                </div>
            </div>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        <button type="submit" class="btn btn-danger">Batal</button>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->