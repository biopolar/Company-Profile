            <!-- Begin Page Content -->
            <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahaboutModal">Tambah Visi Misi</a>

        <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

        <!-- Basic Card Example -->
        <?php foreach ($visi_misi as $vm) : ?>
                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Judul : <?= $vm['header']; ?></h6>
                                </div>
                                <div class="card-body">
                                <strong>Visi dan Misi : </strong><?= $vm['visi_misi']; ?>
                                    <div class="py-3">
                                        <a href="<?= base_url('admin_menu/edit_visi/') . $vm['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="<?= base_url('admin_menu/hapus_visi/') . $vm['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Modal About -->

        <div class="modal fade" id="tambahaboutModal" tabindex="-1" role="dialog" aria-labelledby="tambahaboutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahaboutModalLabel">Tambah Visi Misi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/visi_misi'); ?>" method="POST">
            <div class="modal-body">
                <div class="form-group mb-3">
                <label>Header </label>
                    <input type="text" class="form-control" id="header" name="header" placeholder="Header" required>
                </div>
                <div class="form-group mb-3">
                <label>Isi Visi & Misi </label>
                <textarea name="visi_misi" id="editor" class="form-control" cols="10" rows="5" placeholder="Misi" required></textarea> 
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

