  <section class="content-header">
    <div class="col-md-12">
      <h1>
        Data Museum
      </h1>
    </div>
  </section>

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
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Museum">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Didirikan Pada</label>
                  <input type="text" name="didirikan" class="form-control" id="exampleInputEmail1" placeholder="didirikan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input type="text" name="harga" class="form-control" id="exampleInputEmail1" placeholder="harga">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jadwal</label>
                  <input type="text" name="jadwal" class="form-control" id="exampleInputEmail1" placeholder="jadwal">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" id="exampleInputEmail1" placeholder="deskripsi"></textarea>
                </div>
              </div>

        <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">latitude</label>
                  <input type="text" name="latitude" class="form-control" id="exampleInputEmail1" placeholder="latitude">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">longitude</label>
                  <input type="text" name="longitude" class="form-control" id="exampleInputEmail1" placeholder="longitude">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="gambar[]" id=" mulexampleInputFile" multiple="multiple">

                  <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="save" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>



      </div>
      </div>  
    </div>
  </section>