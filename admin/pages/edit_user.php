  <section class="content-header">
    <div class="col-md-12">
      <h1>
        Edit User
      </h1>
    </div>
  </section>
<?php
  $id = $_GET['edit_user'];
  $query=mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$id'");
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
            <form role="form" method="post">
              <div class="box-body">
        <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" disabled="" name="username" class="form-control" id="exampleInputEmail1" placeholder="username" value="<?=$row['username']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password" value="<?=$row['password']?>">
                <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" name="edituser" class="btn btn-primary">Submit</button>
                </div>
              
            </form>
          </div>
        </div>



      </div>
      </div>  
    </div>
  </section>