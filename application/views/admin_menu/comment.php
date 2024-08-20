<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahcommentModal">Tambah comment</a>

        <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data comment</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>    
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Pesan</th>
                                            <th>Image</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = 1; 
                                    foreach($comment as $cmt) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $cmt['name'] ?></td>
                                            <td><?= $cmt['jabatan'] ?></td>
                                            <td><?= $cmt['pesan'] ?></td>
                                            <td><img src="<?= base_url('front-end/assets/img/comment/') . $cmt['image'] ?>" class="img-thumbnail" alt="" width="100"></td>
                                            <td style="width: 100px;">
                                            <a href="<?= base_url('admin_menu/edit_comment/').$cmt['id'] ?>" class="btn btn-sm btn-warning mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url('admin_menu/hapus_comment/') . $cmt['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<!-- Modal comment -->
<div class="modal fade" id="tambahcommentModal" tabindex="-1" role="dialog" aria-labelledby="tambahcommentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahcommentModalLabel">Tambah comment</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/comment') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Nama </label>
                        <input type="text" class="form-control" id="Nama" name="name" placeholder="Nama..." required>
                    </div>
                    <div class="form-group mb-3">
                    <label>Jabatan </label>
                        <input type="text" class="form-control" id="Jabatan" name="jabatan" placeholder="Jabatan..." required>
                    </div>
                    <div class="form-group mb-3">
                    <label>Pesan </label>
                        <textarea name="pesan" id="editor" class="form-control" cols="30" rows="10" placeholder="Pesan..." required></textarea> 
                    </div>
                    <label>Foto </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                        <label class="custom-file-label" for="image">Pilih Foto</label>
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

