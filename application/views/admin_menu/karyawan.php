<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahkaryawanModal">Tambah Karyawan</a>

    <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>    
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Sosmed</th>
                                            <th>Pesan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = 1; 
                                    foreach($karyawan as $kry) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="<?= base_url('front-end/assets/img/karyawan/') . $kry['image'] ?>" class="img-thumbnail" alt="" width="100" ></td>
                                            <td><?= $kry['nama'] ?></td>
                                            <td><?= $kry['jabatan'] ?></td>
                                            <td>
                                            <a href="<?= $kry['facebook'] ?>" target="_blank" class="btn btn-sm btn-primary d-block mb-2"><i class="fab fa-facebook-f"></i> Facebook</a>
                                            <a href="<?= $kry['instagram'] ?>" target="_blank" class="btn btn-sm btn-warning d-block mb-2"><i class="fab fa-instagram"></i> Instagram</a>
                                            <a href="<?= $kry['linkedin'] ?>" target="_blank" class="btn btn-sm btn-info d-block"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                                            </td>
                                            <td><?= $kry['pesan'] ?></td>
                                            <td style="width: 150px;">
                                            <a href="<?= base_url('admin_menu/detail_karyawan/').$kry['id'];?>" class="btn btn-sm btn-info mr-1"><i class="fas fa-regular fa-eye"></i></a>
                                            <a href="<?= base_url('admin_menu/edit_karyawan/').$kry['id'] ?>" class="btn btn-sm btn-warning mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url('admin_menu/hapus_karyawan/') . $kry['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<!-- Modal Karyawan -->
<div class="modal fade" id="tambahkaryawanModal" tabindex="-1" role="dialog" aria-labelledby="tambahkaryawanModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahkaryawanModalLabel">Tambah karyawan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/karyawan') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Karyawan" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan Karyawan" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="Facebook" name="facebook" placeholder="Facebook" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="LinkedIn" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="pesan" id="editor" class="form-control" cols="30" rows="10" placeholder="Pesan" required></textarea> 
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

