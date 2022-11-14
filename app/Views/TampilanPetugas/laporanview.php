<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<i class="fas fas-fw fas-solid fa-clipboard"></i> Daftar Laporan
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header bg-primary">
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Nama</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($laporan as $row) {
                            $data = $row['nama'] . "," . $row['isi_laporan'] . "," . $row['foto'] . "," . $row['status'] . "," . base_url('laporan/edit/' . $row['id_pengaduan']);
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['tgl_pengaduan'] ?></td>
                                <td><?= $row['isi_laporan'] ?></td>
                                <td><?= $row['foto'] ?></td>
                                <td><?= $row == 0 ?"<a href='#' class='btn btn-primary'>Telah Ditanggapi</a>" : "<a href='#' class='btn btn-success'>Laporan Terbaru</a>"?></td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ModalLaporan" data-laporan="<?= $data ?>"><i class="fas fa-edit"></i>Balas</a>
                                    <a href="<?= base_url('laporan/delete/' . $row['id_pengaduan']) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini')" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalLaporan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Tanggapi Pengaduan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <span aria-hidden="true">&times;</span>
            </div>
            <form id="form" action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="isi_tanggapan">Isi Tanggapan</label>
                        <textarea rows="8" id="isi_tanggapan" name="isi_tanggapan" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-solid fa-share"></i> Kirim</button>
                    <button type="close" data-dismiss="modal" class="btn btn-secondary"><i class="fas fa-solid fa-arrow-left"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>