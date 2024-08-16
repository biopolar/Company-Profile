<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahcontactModal">Tambah contact</a>
    <div> 
        <span style="color:red;">Maksimal hanya 1 saja, jika lebih dari 1 akan menabrak hasilnya di bagian front</span>
    </div>
    <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

   <!-- Basic Card Example -->
<div class="row">
    <?php foreach ($contact as $ct) : ?>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <h6 class="m-0 font-weight-bold text-primary">Contact Perusahaan</h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="<?= base_url('front-end/assets/img/contact/') . $ct['image'] ?>" class="img-thumbnail" alt="">
                    </div>
                    <div style="margin-top: 20px;">
                        <table class="table table-bordered mb-0 shadow">
                            <tbody>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td><?= $ct['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomor Telephone</th>
                                    <td><?= $ct['telp'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><a href="mailto:<?= $ct['email'] ?>" target="_blank"><?= $ct['email'] ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Instagram</th>
                                    <td><a href="<?= $ct['instagram'] ?>" target="_blank" class="text-blue"><?= $ct['instagram'] ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomor Whatsapp</th>
                                    <td><a href="<?= $ct['wa'] ?>" target="_blank" class="text-blue"><?= $ct['wa'] ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Maps</th>
                                    <td>
                                        <iframe src="<?= $ct['maps'] ?>" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                    <div class="py-3">
                        <a href="<?= base_url('admin_menu/edit_contact/') . $ct['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a href="<?= base_url('admin_menu/hapus_contact/') . $ct['id']; ?>" onclick="" class="btn btn-sm btn-danger hapus"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!--/End Basic Card Example -->


<!-- Modal contact -->
<div class="modal fade" id="tambahcontactModal" tabindex="-1" role="dialog" aria-labelledby="tambahcontactModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahcontactModalLabel">Tambah contact</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/contact') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3" placeholder="Alamat" required></textarea> 
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telephone" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="wa" name="wa" placeholder="Nomor Whatsapp" required>
                        <span class="text-primary">Salin : https://wa.me/+62(masukan nomornya)</span><br>
                        <span class="text-danger">contoh : https://wa.me/+6208119992204 </span>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" name="maps" id="Maps" cols="30" rows="6" placeholder="Maps" required></textarea>   
                    </div>                
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

