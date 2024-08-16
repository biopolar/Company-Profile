                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Menu</h1>

                    <form action="<?= base_url('admin_menu/edit_karyawan/') . $karyawan['id']; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $karyawan['id'] ?>" >
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Karyawan" value="<?= $karyawan['nama'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan Karyawan" value="<?= $karyawan['jabatan'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="Facebook" name="facebook" placeholder="Facebook" value="<?= $karyawan['facebook'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="<?= $karyawan['instagram'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="LinkedIn" value="<?= $karyawan['linkedin'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <textarea name="pesan" id="editor" class="form-control" cols="30" rows="10" placeholder="Pesan" required><?= $karyawan['pesan'] ?></textarea> 
                        </div>
                        <div class="form-group-row">
                            <div class="col-sm-2"> Gambar </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('/front-end/assets/img/karyawan/').$karyawan['image']; ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                                            <label class="custom-file-label" for="image">Gambar</label>
                                            <span style="color:red ;">Bisa di input dengan tipe file : JPG, JPEG, PNG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <button class="btn btn-primary" type="button" onclick="window.location.href='<?= base_url('admin_menu/karyawan'); ?>'">Cancel</button>
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