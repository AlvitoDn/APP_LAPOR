<?= $this->extend('layouts/admin') ?>
<?= $this->section('title') ?>
<b><i class="fas fa-solid fa-user-graduate"></i> Masyarakat</b>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <div class="card border-primary">
            <div class="card-header bg-primary">
                <a href="#" class="btn btn-outline-light" data-masyarakat="" data-target="#Modalmasyarakat" data-toggle="modal"><i class="fas fa-solid fa-user-plus"></i> Tambah Data Masyarakat</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>NO.</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>NIK</th>
                        <th>No telp</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 0;
                    foreach ($masyarakat as $row) {
                        $data = $row['id_masyarakat'] . "," . $row['nama'] . "," . $row['nik'] . "," . $row['username'] . "," . $row['password'] . "," . $row['telp'] . "," . base_url('masyarakat/edit/' . $row['id_masyarakat']);
                        $no++;
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['nik'] ?></td>
                            <td><?= $row['telp'] ?></td>
                            <td>
                                <a href="#" class="btn btn-warning" data-masyarakat="<?= $data ?>" data-toggle="modal" data-target="#Modalmasyarakat"><i class="fas fa-edit"></i></a>
                                <a href="<?= base_url('masyarakat/delete/' . $row['id_masyarakat']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="modal fade" id="Modalmasyarakat" tab-index="-1" aria-hidden="true" aria-labelledby="ModalMasyarakatLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Input Data Masyarkat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <form id="form" action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="form-label">No Telepon</label>
                                <input type="text" name="telp" id="telp" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-solid fa-arrow-left"></i></button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php if (!empty(session()->getFlashdata('message'))) : ?>
    <div class="alert alert-success">
        <?php echo session()->getFlashdata('message'); ?>
    </div>
<?php endif ?>
</div>
<?= $this->endSection() ?>
<?= $this->section("script") ?>
<script>
    $(document).ready(function() {
        $("#Modalmasyarakat").on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var data = button.data('masyarakat');
            alert(data);
            if (data != "") {
                const barisdata = data.split(",");
                $("#nama").val(barisdata[1]);
                $("#nik").val(barisdata[2]);
                $("#username").val(barisdata[3]);
                $("#telp").val(barisdata[5]);
                $("#form").attr('action', barisdata[6]);
            } else {
                $("#nama").val('');
                $("#nik").val('');
                $("#username").val('');
                $("#password").val('');
                $("#telp").val('');
                $("#form").attr('action', '/smayarakat');
            }
        });
    })
</script>
<?= $this->endSection() ?>