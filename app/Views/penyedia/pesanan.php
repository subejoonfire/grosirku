<?= $this->extend('penyedia\components\header-footer') ?>
<?= $this->section('content') ?>
<div class="body-container">
    <div class="content-container" style="margin-top:50px">
        <div class="content-table">
            <table>
                <thead>
                    <tr>
                        <th>Nomor Pesanan</th>
                        <th>Nama Produk</th>
                        <th>Nama Penjual</th>
                        <th>Email</th>
                        <th>Nomor</th>
                        <th>Alamat</th>
                        <th>Desa</th>
                        <th>Kodepos</th>
                        <th>Jumlah Dipesan</th>
                        <th>Harga Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pesananModel = new \App\Models\Pesanan;
                    $data = $pesananModel->join('penyedia', 'pesanan.idpenyedia = penyedia.idpenyedia', 'inner')->join('penjual', 'pesanan.idpenjual = penjual.idpenjual', 'inner')->join('barang', 'pesanan.idbarang = barang.idbarang', 'inner')->where(['pesanan.idpenyedia' => session('idpenyedia')])->get()->getResult();
                    foreach ($data as $row) :
                    ?>
                        <form action="<?= base_url('penyedia/setStatus/' . $row->idpesanan) ?>" method="post">
                            <tr>
                                <th>
                                    <?= $row->idpesanan ?>
                                </th>
                                <th>
                                    <?= $row->nmbarang ?>
                                </th>
                                <th>
                                    <?= $row->plusername ?>
                                </th>
                                <th>
                                    <?= $row->email ?>
                                </th>
                                <th>
                                    <?= $row->nomor ?>
                                </th>
                                <th>
                                    <?= $row->alamat ?>
                                </th>
                                <th>
                                    <?= $row->desa ?>
                                </th>
                                <th>
                                    <?= $row->kodepos ?>
                                </th>
                                <th>
                                    <?= $row->jmlpesanan ?>
                                </th>
                                <th>
                                    <?= $row->hargatotal ?>
                                </th>
                                <?php if ($row->statuspesanan == 'Sedang Dikirim') { ?>
                                    <th style="font-weight: bold; color: #FFA500;"> <!-- Soft Yellow -->
                                        <?= $row->statuspesanan ?>
                                    </th>
                                <?php } elseif ($row->statuspesanan == 'Selesai') { ?>
                                    <th style="font-weight: bold; color: #008000;"> <!-- Soft Green -->
                                        <?= $row->statuspesanan ?>
                                    </th>
                                <?php } else { ?>
                                    <th style="font-weight: bold; color: #DC143C;"> <!-- Soft Red -->
                                        <?= $row->statuspesanan ?>
                                    </th>
                                <?php } ?>
                                <th>
                                    <select name="status" onchange="this.form.submit()">
                                        <option>Pilih</option>
                                        <option value="Sedang Dikirim">Kirim</option>
                                        <option value="Selesai">Selesai</option>
                                        <option value="Dibatalkan">Batalkan</option>
                                    </select>
                                </th>
                            </tr>
                        </form>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>