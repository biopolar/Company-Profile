                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Menu</h1>

                    <form action="<?= base_url('admin_menu/edit_about/') . $about['id']; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?= $about['id'] ?>" >
                    <div class="form-group mb-3">
                    <label>Header Bio </label>
                        <input type="text" class="form-control" id="hb" name="hb" placeholder="Header Bio" value="<?= $about['hb'] ?>" required>
                    </div>
                    <div class="form-group mb-3">
                    <label>Motto </label>
                        <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto" value="<?= $about['motto'] ?>"  required>
                    </div>
                    <div class="form-group mb-3">
                    <label>Detail Bio </label>
                        <textarea name="detail_bio" id="editor" class="form-control" cols="30" rows="10" placeholder="Detail Bio" required><?= $about['detail_bio'] ?></textarea> 
                    </div>
                        <div class="form-group-row">
                            <div class="col-sm-2"> Gambar </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('/front-end/assets/img/about/').$about['image']; ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" aria-describedby="image" name="image">
                                            <label class="custom-file-label" for="image"><?= $about['image'] ?> </label>
                                            <span style="color:red ;">Bisa di input dengan tipe file : JPG, JPEG, PNG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <button class="btn btn-primary" type="button" onclick="window.location.href='<?= base_url('admin_menu/about'); ?>'">Cancel</button>
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