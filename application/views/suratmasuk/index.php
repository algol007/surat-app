<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?= base_url('suratmasuk/add'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm"></i> Tambah Data</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel <?= $title ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Perihal <br> File</th>
                            <th>Asal Surat</th>
                            <th>No Surat</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($surat_masuk as $surat_masuk) : ?>
                            <tr>
                                <td><?= $surat_masuk['perihal']; ?> <br><br> <b>File : </b><i>Tidak ada file yang diupload</i></td>
                                <td><?= $surat_masuk['asal_surat']; ?></td>
                                <td><?= $surat_masuk['nomor_surat']; ?></td>
                                <td>
                                    <a href="<?= base_url('suratmasuk/edit/'); ?><?= $surat_masuk['id']; ?>" type="button" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="<?= base_url('disposisi') ?>">
                                        <i class="fas fa-sticky-note"></i>
                                        Disp
                                    </a>
                                    <button type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-print"></i>
                                        Print
                                    </button>
                                    <a href="<?= base_url(); ?>suratmasuk/delete/<?= $surat_masuk['id']; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data surat masuk ?');">
                                        <i class="fas fa-trash-alt"></i>
                                        Del
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->