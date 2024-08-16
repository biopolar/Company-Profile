<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahportofolioModal">Tambah Portofolio</a>

    <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

    <!-- Basic Card Example -->
    <div class="row">
    <?php foreach ($portofolio as $pf) : ?>
    <div class="col-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Judul : <?= $pf['judul']; ?></h6>
        </div>
        <div class="card-body">
            <strong>Tipe : </strong><?= $pf['tipe']; ?><br>
            <strong>Client : </strong><?= $pf['client']; ?><br>
            <strong> Deskripsi :</strong> <?= $pf['deskripsi']; ?>
            <img src="<?= base_url('front-end/assets/img/portofolio/') . $pf['image'] ?>" class="img-thumbnail" alt="">
            <div class="py-2">
                <a href="<?= base_url('admin_menu/edit_portofolio/') . $pf['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit </a>
                <a href="<?= base_url('admin_menu/hapus_portofolio/') . $pf['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i> Hapus </a>
            </div>
        </div>
    </div>
    </div>
    <?php endforeach; ?>
</div>
</div>

<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal About -->
<div class="modal fade" id="tambahportofolioModal" tabindex="-1" role="dialog" aria-labelledby="tambahportofolioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahportofolioModalLabel">Tambah Portofolio</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/portofolio'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Portofolio" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="client" name="client" placeholder="Nama Client" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="deskripsi" id="editor" class="form-control" cols="30" rows="10" placeholder="Deskripsi" required></textarea> 
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image" required>
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <div class="form-group mb-3">
                        <select name="tipe" class="form-control custom-select" aria-label="Default select example" required>
                            <option value="">Pilih Tipe yang ingin di pilih</option>
                            <option value="product">Product</option>
                            <option value="project">Project</option>
                            <option value="innovation">Innovation</option>
                            <option value="awards">Awards</option>
                            <option value="partnership">Partnership</option>
                            <option value="tech-support">Tech Support</option>
                        </select>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('image').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var label = e.target.nextElementSibling;
        label.textContent = fileName;
    });
});
</script>


