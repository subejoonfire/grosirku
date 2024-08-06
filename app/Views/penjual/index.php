<?= $this->extend('penjual\components\header-footer') ?>
<?= $this->section('content') ?>
<div class="container">
    <?php
    foreach ($produk as $rowProduk) :
    ?>
        <a href="<?= base_url('penjual/detailBarang/' . $rowProduk['idbarang']) ?>" class="product-link">
            <div class=" col">
                <div class="card shadow-sm">
                    <img class="css-1q90pod" src="/uploads/<?= $rowProduk['gambar'] ?>" style="width:100%;height:150px" alt="<?= $rowProduk['gambar'] ?>" data-testid="imgProduct#5">
                    <div class="card-body">
                        <div class="col-text">
                            <?= $rowProduk['nmbarang'] ?>
                        </div>
                        <div class="col-text-bold">Rp
                            <?= $rowProduk['harga'] ?>
                        </div>
                        <div class="text-body-secondary">
                            <?= $rowProduk['stok'] ?>
                        </div>
                        <div class="text-body-secondary">
                            <?= $rowProduk['kategori'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>