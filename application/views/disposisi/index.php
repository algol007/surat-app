<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?= base_url('disposisi/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm"></i> Tambah Data</a>
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
                            <th>Tujuan Disposisi</th>
                            <th>Isi Disposisi</th>
                            <th>Sifat <br> Batas Waktu</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($disposisi as $disposisi) : ?>

                            <tr>
                                <td><?= $disposisi['tujuan_disposisi']; ?></td>
                                <td><?= $disposisi['isi_disposisi']; ?></td>
                                <td><?= $disposisi['sifat_disposisi']; ?> <br> <?= $disposisi['batas_waktu']; ?></td>
                                <td>
                                    <a href="<?= base_url('disposisi/edit/'); ?><?= $disposisi['id']; ?>" type="button" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="<?= base_url('disposisi/delete/'); ?><?= $disposisi['id']; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data disposisi ?');">
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