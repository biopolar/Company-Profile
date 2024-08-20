                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Menu</h1>

                    <form action="<?= base_url('admin_menu/edit/') . $data_menu['id']; ?>" method="POST">
                        <input type="hidden" name="id" id="id" value="<?= $data_menu['id'] ?>" >
                        <div class="modal-body">
                            <div class="form-group mb-3">
                            <label>Nama </label>
                                <input type="text" class="form-control" namespace id="nama" name="nama" value="<?= $data_menu['nama'] ?>">
                            </div>
                            <div class="form-group mb-3">
                            <label>Icon </label>
                                <input type="text" class="form-control" namespace id="icon" name="icon" value="<?= $data_menu['icon'] ?>">
                                <span style="color:red ;">Contoh : fas fa-fw-(Object)</span>
                            </div>
                            <div class="form-group mb-3">
                            <label>URL </label>
                                <input type="text" class="form-control" namespace id="url" name="url" value="<?= $data_menu['url'] ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
