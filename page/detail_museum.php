<?php
  $id = $_GET['detail_museum'];
  $sql=mysqli_query($conn, "SELECT * FROM `tb_museum` JOIN `tb_foto` USING(id_museum) WHERE tb_museum.id_museum = $id GROUP BY tb_museum.id_museum");
  $museum=mysqli_fetch_array($sql);
?>
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(admin/images/<?=$museum['nama_foto']?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1><?=$museum['nama']?></h1>
                <p class="mb-0">Menambah Pengetahuan Sejarahmu!</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

            <div class="row mb-5">
              <div class="col-md-5">
                <img src="admin/images/<?=$museum['nama_foto']?>" alt="anatomi" class="img-fluid mb-4">
              </div>
              <div class="col-md-6">
              <p>Didirikan pada   : <?=$museum['didirikan']?></p>
              <a href="https://www.google.com/maps/search/<?=$museum['nama']?>/@<?=$museum['latitude'].','.$museum['longitude']?>" target="blank"><p>Lokasi    : <?=$museum['alamat']?></p></a>
              <p>Harga Tiket   : <?=$museum['harga']?> </p>
              <p>Buka / Tutup  : <?=$museum['jadwal']?></p>
              </div>
            </div>

              <h1 class="mb-3 text-primary">SEJARAH</h1>
              <div class="row mb-5">
                <div class="col-md-12">
                  <p><?=$museum['deskripsi']?></p>
                </div>
              </div>

              <div class="row mb-5">
                <?php
            $query_foto = mysqli_query($conn, "SELECT * FROM tb_foto WHERE id_museum = $id ORDER BY RAND() LIMIT 3");
            while ($foto = mysqli_fetch_array($query_foto)) { ?>
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4 ">
                  <a href="admin/images/<?=$foto['nama_foto']?>" target="blank">
                    <img src="admin/images/<?=$foto['nama_foto']?>" alt="image" class="img-fluid">
                  </a>
                </div>
            <?php } ?>
              </div>


            <h1 class="mb-5 text-primary">More Listings</h1>

            <?php
          $query=mysqli_query($conn, "SELECT * FROM `tb_museum` JOIN `tb_foto` USING(id_museum) GROUP BY tb_museum.id_museum LIMIT 6");
          $i=0;
          while ($row=mysqli_fetch_array($query)) {
            $i++;
           ?>

            <div class="d-block d-md-flex listing-horizontal">

              <a href="index.php?detail_museum=<?=$row['id_museum']?>" class="img d-block" style="background-image: url('admin/images/<?=$row['nama_foto']?>')"></a>

              <div class="lh-content">
                <h3><a href="index.php?detail_museum=<?=$row['id_museum']?>"><?=$row['nama'];?></a></h3>
                <p><?=$row['alamat'];?></p>    
              </div>

            </div>


            <?php
      } ?>

          </div>
        </div>
      </div>
    </div>