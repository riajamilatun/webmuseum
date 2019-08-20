
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Museum</h3>
              <center><a href="index.php?tambah_museum" class="btn btn-success">Tambah Data</a></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Didirikan Pada</th>
                  <th>Harga</th>
                  <th>Jadwal</th>
                  <th>Deskripsi</th>
                  <th>Lokasi</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $sql="select * from tb_museum";
                  $query=mysqli_query($conn, $sql);
                  while($row=mysqli_fetch_array($query)):
                ?>
                <tr>
                  <td><?=$row['nama']?></td>
                  <td><?=$row['alamat']?></td>
                  <td><?=$row['didirikan']?></td>
                  <td><?=$row['harga']?></td>
                  <td><?=$row['jadwal']?></td>
                  <td><?=$row['deskripsi']?></td>
                  <td><?=$row['latitude'] . ", " .$row['longitude'] ?></td>
                  <td>
                  <a href="index.php?edit_museum=<?=$row['id_museum']?>" class="btn btn-block btn-primary">Edit</a>
                  </td>
                  <td>
                  <a href="index.php?hapus_museum=<?=$row['id_museum']?>" onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" class="btn btn-block btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php endwhile; ?>
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>