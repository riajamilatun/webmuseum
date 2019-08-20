  <section class="content-header">
    <div class="col-md-12">
      <h1>
        Edit Museum
      </h1>
    </div>
  </section>
<?php
  $id = $_GET['edit_museum'];
  $query=mysqli_query($conn, "SELECT * FROM tb_museum WHERE id_museum = $id");
  $row=mysqli_fetch_array($query);
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
      <div class="col-md-12">

        
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
        <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Museum</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Museum" value="<?=$row['nama']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat"><?=$row['alamat']?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Didirikan Pada</label>
                  <input type="text" name="didirikan" class="form-control" id="exampleInputEmail1" placeholder="didirikan" value="<?=$row['didirikan']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input type="text" name="harga" class="form-control" id="exampleInputEmail1" placeholder="harga" value="<?=$row['harga']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jadwal</label>
                  <input type="text" name="jadwal" class="form-control" id="exampleInputEmail1" placeholder="jadwal" value="<?=$row['jadwal']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" id="exampleInputEmail1" placeholder="deskripsi"><?=$row['deskripsi']?></textarea>
                </div>
              </div>

        <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">latitude</label>
                  <input type="text" name="latitude" class="form-control" id="exampleInputEmail1" placeholder="latitude" value="<?=$row['latitude']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">longitude</label>
                  <input type="text" name="longitude" class="form-control" id="exampleInputEmail1" placeholder="longitude" value="<?=$row['longitude']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="gambar[]" id=" mulexampleInputFile" multiple="multiple">

                  <!-- <p class="help-block">Example block-level help text here.</p> -->
                  <?php
                  $query=$conn->query("SELECT * FROM tb_foto WHERE id_museum = $id");
                  while ($gambar = $query->fetch_array()) {
                    echo "<div style='margin-top:10px;'>";
                    echo "<img src='images/$gambar[nama_foto]' width='80' style='margin-right:10px;'/>";
                    echo "<a href='index.php?hapus_gambar=$gambar[id_foto]' onclick=\"return confirm('Apa anda yakin ingin menghapus data ini?')\" style='margin-right:30px;'>Delete</a>
                    </div>
                    ";
                  }
                  ?>
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>



      </div>
      </div>  
    </div>
  </section>