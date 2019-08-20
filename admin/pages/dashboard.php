<?php
// Hitung Jumlah Visitor
$kemarin  = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
$hari_ini  = mysqli_fetch_array(mysqli_query($conn, 'SELECT sum(counter) AS hari_ini FROM tb_visitor WHERE tanggal="'.date("Y-m-d").'"'));
$kemarin = mysqli_fetch_array(mysqli_query($conn, 'SELECT sum(counter) AS kemarin FROM tb_visitor WHERE tanggal="'.$kemarin.'"'));
$sql = mysqli_fetch_array(mysqli_query($conn, 'SELECT sum(counter) as total FROM tb_visitor'));
$museum = mysqli_fetch_array(mysqli_query($conn, 'SELECT count(*) as museum FROM tb_museum'));
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $hari_ini['hari_ini'] == null ? 0 : $hari_ini['hari_ini'] ?><sup style="font-size: 20px"></sup></h3>

              <p>Kunjungan Hari Ini</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-plus-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$kemarin['kemarin'] == null ? 0 : $kemarin['kemarin'] ?></h3>

              <p>Kunjungan Kemarin</p>
            </div>
            <div class="icon">
              <i class="fa fa-history"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$sql['total'] == null ? 0 : $sql['total'] ?></h3>

              <p>Total Kunjungan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$museum['museum'] == null ? 0 : $museum['museum']?></h3>

              <p>Total Museum</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
     


        </section>
        <!-- right col -->
     <!--  </div>
      /.row (main row)

    </section> -->
    <!-- /.content -->