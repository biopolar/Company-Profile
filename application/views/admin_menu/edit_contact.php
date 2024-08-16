                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Menu</h1>

                    <form action="<?= base_url('admin_menu/edit_contact/') . $contact['id']; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $contact['id'] ?>" >
                        <div class="form-group mb-3">
                            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3" placeholder="Alamat" required><?= $contact['alamat'] ?> </textarea> 
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telephone" value="<?= $contact['telp'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $contact['email'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="<?= $contact['instagram'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="wa" name="wa" placeholder="Nomor Whatsapp" value="<?= $contact['wa'] ?>" required>
                            <span class="text-primary">Salin : https://wa.me/+62(masukan nomornya)</span><br>
                            <span class="text-danger">contoh : https://wa.me/+6208119992204 </span>
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" name="maps" id="Maps" cols="30" rows="6" placeholder="Maps" required><?= $contact['maps'] ?> </textarea>   
                        </div>
                        <div class="form-group-row">
                            <div class="col-sm-2"> Gambar </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('/front-end/assets/img/contact/').$contact['image']; ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                                            <label class="custom-file-label" for="image" value="" ><?= $contact['image'] ?></label>
                                            <span style="color:red ;">Bisa di input dengan tipe file : JPG, JPEG, PNG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <button class="btn btn-primary" type="button" onclick="window.location.href='<?= base_url('admin_menu/contact'); ?>'">Cancel</button>
                        <button type="submit" class="btn btn-warning ms-2">Edit</button>
                    </div>
                </form>
            </div>
                <!-- /.container-fluid -->
    </div>
            <!-- End of Main Content -->
             
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