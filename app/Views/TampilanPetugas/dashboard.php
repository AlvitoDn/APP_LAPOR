<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<i class="fas fas-solid fa-home"></i> Dashboard
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="text-light">Laporan yang diterima</h3>
            </div>
            <div class="card-body">
                <h4 class="text-dark"> Jumlah : 14</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="text-light">Laporan yang menunggu</h3>
            </div>
            <div class="card-body">
                <h4 class="text-dark"> Jumlah : 9</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="text-light">Laporan yang sudah dibalas</h3>
            </div>
            <div class="card-body">
                <h4 class="text-dark"> Jumlah : 5</h4>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>