    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User</h3>
              <center><a href="index.php?tambah_user" class="btn btn-success">Tambah Data</a></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $sql="select * from tb_user";
                  $query=mysqli_query($conn, $sql);
                  while($row=mysqli_fetch_array($query)):
                ?>
                <tr>
                  <td><?=$row['username']?></td>
                  <td>********</td>
                  <td width="10px" length="30px">
                  <a href="index.php?edit_user=<?=$row['username']?>" class="btn btn-block btn-primary">Edit</a>
                  </td>
                  <td width="10px" length="30px">
                  <a href="index.php?hapus_user=<?=$row['username']?>" onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" class="btn btn-block btn-danger">Hapus</a>
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