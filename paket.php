<?php
require_once "../model/class.paket.php";
$paket = new Paket();
?>
<div class="container">
    <div class="col-md-16">
        <h4 align="center">Paket</h4>
        <br>
        <div class="row">
            <div class="col-sm-5">
            <form action = "../controller/proses.paket.php?aksi=simpan" method="POST">
                <div class="card">
                    <div class="card-header">
                        Input kan Paket
                    </div>
                    <div class="card-body">
                        <form action="" method="POST"></form>
                        <table class="table table-hover">
                        <label>Id Paket</label>
                        <input type="textbox"  name ="id_paket" class="form-control">
                      </div>
                <div class="form-group">
                  <label>Jenis</label>
                <select class="form-control" name="jenis">
                <option value="kiloan"> Kiloan </option>
                <option value="selimut"> Selimut </option>
                <option value="bedcover"> Bed Cover </option>
                <option value="gorden"> gorden </option>
                <option value="lain"> Lain </option>
                </select>
                </div>
                <div class="form-group">
                  <label>Nama Paket</label>
                  <input type="textbox" name = "nama_paket" class="form-control" placeholder="Nama paket">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="textbox" name = "harga" class="form-control" placeholder="Harga">
                </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </table>
                          </div>
                      </div>
                  </div>
      <div class="col-sm-7">
                      <div class="card">
                          <div class="card-header">
                              Data Paket
                          </div>
                          <div class="card-body">
                              <table class="table table-striped">
                                  <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">id paket</th>
              <th scope="col">jenis</th>
              <th scope="col">nama paket</th>
              <th scope="col">harga</th>
              <th> Aksi </th>
            </tr>
  </thead>
  <?php
      require_once "../model/class.paket.php";
      $paket = new Paket();
      $no = 1;
      $select = $paket->tampil();
      foreach ($select as $data){
  ?>
  <tbody>
    <tr>
      <td><?php echo $no++;?> </td>
      <td><?php echo $data['id_paket'] ?></td>
      <td><?php echo $data['jenis'] ?></td>
      <td><?php echo $data['nama_paket'] ?></td>
      <td><?php echo $data['harga'] ?></td>
      <td> 
      <a href="admin.php?halaman=editpaket&id_paket=<?php echo $data['id_paket'];?>"> Edit </a> |
      <a href="../controller/proses.paket.php?id_paket=<?php echo $data['id_paket']?>&aksi=hapus"> Hapus </a>
      </td>
    </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>
