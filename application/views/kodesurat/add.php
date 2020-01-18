<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
                </div>
                <div class="form-group">
                    <label for="namaSurat">Nama Surat</label>
                    <input type="text" class="form-control" id="namaSurat" name="namaSurat" placeholder="Nama Surat">
                </div>
                <div class="form-group">
                    <label for="uraian">Uraian</label>
                    <input type="text" class="form-control" id="uraian" name="uraian" placeholder="Uraian">
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