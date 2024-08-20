<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahserviceModal">Tambah Service</a>

    <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

   <!-- Basic Card Example -->
   <div class="row">
    <?php foreach ($service as $sv) : ?>
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <h6 class="m-0 font-weight-bold text-primary"> Judul : <?= $sv['judul']; ?></h6>
                </div>
                <div class="card-body">
                    <strong>Slug : <?= $sv['slug']; ?></strong><br>
                    <strong>Dibuat Oleh : </strong> <?= $sv['created_by']; ?><br>
                    <strong>Waktu : </strong> <?= date('d M Y' , $sv['created_at']); ?><br>
                    <img src="<?= base_url('front-end/assets/img/service/') . $sv['image'] ?>" class="img-thumbnail" alt=""><br>
                    <div> isi Slug : <?= $sv['isi_service']; ?></div>
                    <div class="py-2">
                        <a href="<?= base_url('admin_menu/edit_service/') . $sv['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit </a>
                        <a href="<?= base_url('admin_menu/hapus_service/') . $sv['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i> Hapus </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>
    <!--/End Basic Card Example -->

<!-- Modal Service -->
<div class="modal fade" id="tambahserviceModal" tabindex="-1" role="dialog" aria-labelledby="tambahserviceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahserviceModalLabel">Tambah service</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/service') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                    <label>Judul </label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Service" required>
                    </div>
                    <div class="form-group mb-3">
                    <label>Isi Slug </label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Isi Slug" required>
                    </div>
                    <div class="form-group mb-3">
                    <label>Dibuat Oleh </label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Created By" required>
                    </div>
                    <div class="form-group mb-3">
                    <label>Isi Service </label>
                        <textarea name="isi_service" id="editor" class="form-control" cols="30" rows="10" placeholder="Isi Service" required></textarea> 
                    </div>
                    <label>Gambar Service </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                        <label class="custom-file-label" for="image">Pilih Foto </label>
                        <span style="color:red ;">Bisa di input dengan tipe file : JPG, JPEG, PNG</span>
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
    // Add event listener for file input change
    document.getElementById('image').addEventListener('change', function(e) {
        // Get the file name from the input
        var fileName = e.target.files[0].name;
        // Update the label text with the file name
        var label = e.target.nextElementSibling;
        label.textContent = fileName;
    });
});
</script>

