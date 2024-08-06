<?=$this->extend('penjual\components\header-footer')?>
<?=$this->section('content')?>
<div class="container">
    <form action="<?=base_url('setPesanan')?>" method="post">
        <table class="table-pesanan">
            <thead>
                <tr>
                    <th class="col">No.</th>
                    <th class="col">Nama barang</th>
                    <th class="col">Gambar</th>
                    <th class="col">Stok</th>
                    <th class="col">Harga</th>
                    <th class="col">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                <tr>
                    <th scope="row"><?=$row->idkeranjang?></th>
                    <td><?=$row->nmbarang?></td>
                    <td>
                        <img style="width: 200px;" src="/uploads/<?=$row->gambar?>" alt="">
                    </td>
                    <td><?=$row->jmlpesanan?></td>
                    <td><?=$row->hargatotal?></td>
                    <td><input name="idkeranjang[]" value="<?=$row->idkeranjang?>" type="checkbox"></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <div class="checkout-container">
            <!-- <h5>Total Bayar :</h5> -->
            <button type="submit">Bayar</button>
        </div>
    </form>
</div>
<?=$this->endSection()?>
<!-- <script>
  const myModal = document.getElementById('myModal')
  const myInput = document.getElementById('myInput')
  myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
  })
</script> -->