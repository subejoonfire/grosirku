<?= $this->extend('penjual\components\header-footer') ?>
<?= $this->section('content') ?>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th class="col">No.</th>
        <th class="col">Nama barang</th>
        <th class="col">Gambar</th>
        <th class="col">Stok</th>
        <th class="col">Harga</th>
        <th class="col">Nama Penyedia</th>
        <th class="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $pesananModel = new \App\Models\Pesanan();
      $data = $pesananModel->join('barang', 'pesanan.idbarang = barang.idbarang', 'inner')->join('penyedia', 'pesanan.idpenyedia = penyedia.idpenyedia', 'inner')->where(['idpenjual' => session('idpenjual')])->get()->getResult();
      foreach ($data as $row) :
      ?>
        <tr>
          <th scope="row"><?= $row->idbarang ?></th>
          <td><?= $row->nmbarang ?></td>
          <td>
            <img style="width: 200px;" src="/uploads/<?= $row->gambar ?>" alt="">
          </td>
          <td><?= $row->jmlpesanan ?></td>
          <td><?= $row->hargatotal ?></td>
          <td><?= $row->pyusername ?></td>
          <td><?= $row->statuspesanan ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>