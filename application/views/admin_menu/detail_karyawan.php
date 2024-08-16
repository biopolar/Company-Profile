<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <?= $this->session->flashdata('pesan'); ?>

    <!-- Basic Card Example -->
    <a type="button" href="<?= base_url('admin_menu/karyawan')?>" class="btn btn-warning mb-3">Kembali</a>
    <div class="card shadow mb-4">
        <div class="card-header">
            <h5 class="mb-0">Bio Data Karyawan</h5>
        </div>
        <div class="card-body d-flex align-items-center">
            <div class="image-container" style="flex: 0 0 350px;">
                <img src="<?= base_url('front-end/assets/img/karyawan/') . $karyawan['image'] ?>" class="img-thumbnail" alt="" width="350">
            </div>
            <div class="table-container ml-3" style="flex: 1; max-width: 100%;">
                <table class="table mb-0 shadow">
                    <tbody>
                        <tr>
                            <th scope="row">Nama</th>
                            <td><?= $karyawan['nama'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jabatan</th>
                            <td><?= $karyawan['jabatan'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Facebook</th>
                            <td><a href="<?= $karyawan['facebook'] ?>" target="_blank" class="text-blue"><?= $karyawan['facebook'] ?></a></td>
                        </tr>
                        <tr>
                            <th scope="row">Instagram</th>
                            <td><a href="<?= $karyawan['instagram'] ?>" target="_blank" class="text-blue"><?= $karyawan['instagram'] ?></a></td>
                        </tr>
                        <tr>
                            <th scope="row">LinkedIn</th>
                            <td><a href="<?= $karyawan['linkedin'] ?>" target="_blank" class="text-blue"><?= $karyawan['linkedin'] ?></a></td>
                        </tr>
                        <tr>
                            <th scope="row">Pesan</th>
                            <td><?= $karyawan['pesan'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
