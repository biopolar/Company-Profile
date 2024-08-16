<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahpartnerModal">Tambah partner</a>

        <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data partner</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>    
                                            <th>No.</th>
                                            <th>Image</th>
                                            <th>URL</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = 1; 
                                    foreach($partner as $prt) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="<?= base_url('front-end/assets/img/partner/') . $prt['image'] ?>" class="img-thumbnail" alt="" width="100"></td>
                                            <td><?= $prt['url'] ?></td>
                                            <td style="width: 100px;">
                                            <a href="<?= base_url('admin_menu/edit_partner/').$prt['id'] ?>" class="btn btn-sm btn-warning mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url('admin_menu/hapus_partner/') . $prt['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<!-- Modal partner -->
<div class="modal fade" id="tambahpartnerModal" tabindex="-1" role="dialog" aria-labelledby="tambahpartnerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahpartnerModalLabel">Tambah partner</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/partner') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="Link" name="url" placeholder="URL" required>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <span style="color:red ;">Bisa di input dengan tipe file : JPG, JPEG, PNG</span>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
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

