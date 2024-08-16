                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Menu Manegement</h1>

                    <div class="swal" data-swal="<?= $this->session->flashdata('pesan'); ?>" ></div>

                    <a href="" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#tambahMenuModal">Tambah Menu</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">Icon</th>
                                <th scope="col">URL</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <p hidden><?= $nomor = 1; ?></p>
                        <tbody>
                            <?php foreach ($admin_menu as $am) : ?>
                            <tr>
                                <th scope="row"><?= $nomor++; ?></th>
                                <td><?= $am['nama'];?></td>
                                <td><?= $am['icon'];?></td>
                                <td><?= $am['url'];?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="<?= base_url('admin_menu/edit/') . $am['id'];?>">Edit</a>
                                    <a class="btn btn-danger btn-sm hapus" href="<?= base_url('admin_menu/hapus/') . $am['id'];?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal Tambah Menu -->

            <div class="modal fade" id="tambahMenuModal" tabindex="-1" role="dialog" aria-labelledby="tambahmenuModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahmenuModalLabel">Tambah Menu</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin_menu/menu_management'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" namespace id="nama" name="nama" placeholder="Nama Menu" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" namespace id="icon" name="icon" placeholder="Icon" required>
                                <span style="color:red ;">Contoh : fas fa-fw-(Object)</span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" namespace id="url" name="url" placeholder="URL" required>
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