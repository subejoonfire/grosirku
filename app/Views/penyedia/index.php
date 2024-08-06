<?= $this->extend('penyedia\components\header-footer') ?>
<?= $this->section('content') ?>
<div class="body-container">
    <div class="content-container">
        <div class="header-container">
            <h2>Informasi Barang</h2>
            <div class="add-product-container">
                <a href="/penyedia/tambah_barang">Tambahkan</a>
            </div>
        </div>
        <div class="products-container">
            <?php
            $idpenyedia = session('idpenyedia');
            $barangModel = new \App\Models\BarangModel;
            $data = $barangModel->join('penyedia', 'barang.idpenyedia = penyedia.idpenyedia', 'inner')->where('barang.idpenyedia', $idpenyedia)->get()->getResult();
            foreach ($data as $row):
                ?>
                <div class="product">
                    <img src="/uploads/<?= $row->gambar ?>" alt="">
                    <div class="product-element">
                        <h1>
                            <?= $row->nmbarang ?>
                        </h1>
                        <span>Harga :
                            <?= $row->harga ?>
                        </span>
                        <span>Stok :
                            <?= $row->stok ?>
                        </span>
                    </div>
                    <div class="product-action">
                        <a href="<?= base_url('penyedia/deleteBarang/' . $row->idbarang) ?>"
                            class="material-symbols-outlined">
                            delete
                        </a>
                        <a href="penyedia/edit_barang/<?= $row->idbarang ?>" class="material-symbols-outlined">
                            edit
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>