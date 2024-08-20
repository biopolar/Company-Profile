                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Menu</h1>

                    <form action="<?= base_url('admin_menu/edit_portofolio/') . $portofolio['id']; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $portofolio['id'] ?>" >
                        <div class="form-group mb-3">
                        <label>Judul Portofolio </label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Portofolio" value="<?= $portofolio['judul'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                        <label>Slug </label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Judul Portofolio" value="<?= $portofolio['slug'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                        <label>Nama Client </label>
                            <input type="text" class="form-control" id="client" name="client" placeholder="Judul Portofolio" value="<?= $portofolio['client'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                        <label>Deskripsi </label>
                            <textarea name="deskripsi" id="editor" class="form-control" cols="30" rows="10" placeholder="Deskripsi" required><?= $portofolio['deskripsi'] ?></textarea> 
                        </div>
                        <div class="form-group mb-3">
                        <label>Tipe </label>
                            <select name="tipe" class="form-control custom-select" aria-label="Default select example" required>
                                <option value="">Pilih Tipe yang ingin di pilih</option>
                                <option value="Product">Product</option>
                                <option value="Project">Project</option>
                                <option value="Innovation">Innovation</option>
                                <option value="Awards">Awards</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Tech-support">Tech Support</option>
                            </select>
                        </div>
                        <div class="form-group-row">
                            <div class="col-sm-2"> Gambar </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('front-end/assets/img/portofolio/').$portofolio['image']; ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                                            <label class="custom-file-label" for="image">Pilih Gambar</label>
                                            <span style="color:red ;">Bisa di input dengan tipe file : JPG, JPEG, PNG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <button class="btn btn-primary" type="button" onclick="window.location.href='<?= base_url('admin_menu/portofolio'); ?>'">Cancel</button>
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
