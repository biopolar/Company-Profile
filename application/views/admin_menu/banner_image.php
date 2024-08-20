<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahbannerModal">Tambah Banner</a>

    <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

   <!-- Basic Card Example -->
    <?php foreach ($banner_image as $bi) : ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Banner Image dan Teks di dalam image</h6>
        </div>
        <div class="card-body">
            <div class="md-3"><strong>Isi Teks : </strong></div><?= $bi['text']; ?>
            <img src="<?= base_url('front-end/assets/img/banner/') . $bi['image'] ?>" class="img-thumbnail" alt="">
            <div class="py-2">
                <a href="<?= base_url('admin_menu/edit_banner/').$bi['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit </a>
                <a href="<?= base_url('admin_menu/hapus_banner/').$bi['id'] ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i> Hapus </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!--/End Basic Card Example -->

<!-- Modal About -->
<div class="modal fade" id="tambahbannerModal" tabindex="-1" role="dialog" aria-labelledby="tambahbannerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahbannerModalLabel">Tambah Banner</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/banner_image') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Text Image </label>
                        <textarea name="text" id="editor" class="form-control" cols="30" rows="10" placeholder="Text Image" required></textarea> 
                    </div>
                    <label>Text Image </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
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
