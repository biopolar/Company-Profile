<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahaboutModal">Tambah About</a>
    
        <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>
    <!-- Basic Card Example -->
    <?php foreach ($about as $a) : ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Judul : <?= $a['hb']; ?></h6>
        </div>
        <div class="card-body">
            <strong>Motto : </strong><?= $a['motto']; ?><br><br>
            <strong>Detail Bio : </strong><?= $a['detail_bio']; ?>
            <img src="<?= base_url('front-end/assets/img/about/') . $a['image'] ?>" class="img-thumbnail" alt="">
            <div class="py-2">
                <a href="<?= base_url('admin_menu/edit_about/') . $a['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit </a>
                <a href="<?= base_url('admin_menu/hapus_about/') . $a['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i> Hapus </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal About -->
<div class="modal fade" id="tambahaboutModal" tabindex="-1" role="dialog" aria-labelledby="tambahaboutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahaboutModalLabel">Tambah About</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/about'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Header Bio</label>
                        <input type="text" class="form-control" id="hb" name="hb" placeholder="Header Bio" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Motto</label>
                        <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Detail Biodata</label>
                        <textarea name="detail_bio" id="editor" class="form-control" cols="30" rows="10" placeholder="Detail Bio" required></textarea> 
                    </div>
                    <label>Foto Banner</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                        <label class="custom-file-label" for="image">Pilih Foto</label>
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
