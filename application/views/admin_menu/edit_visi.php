                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Menu</h1>

                    <form action="<?= base_url('admin_menu/edit_visi/') . $visi_misi['id']; ?>" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="id" id="id" value="<?= $visi_misi['id'] ?>" >
                        <div class="modal-body">
                            <div class="form-group mb-3">
                            <label>Header</label>
                                <input type="text" class="form-control" namespace id="header" name="header" value="<?= $visi_misi['header'] ?>">
                            </div>
                            <div class="form-group mb-3">
                            <label>Visi Misi </label>
                                <textarea name="visi_misi" id="editor" class="form-control" cols="30" rows="10" placeholder="" required><?= $visi_misi['visi_misi']?></textarea> 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button" onclick="window.location.href='<?= base_url('admin_menu/visi_misi'); ?>'">Cancel</button>
                            <button type="submit" class="btn btn-warning">Ubah Data</button>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
