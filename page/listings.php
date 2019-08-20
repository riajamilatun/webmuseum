<?php
  if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
      $page_no = $_GET['page_no'];
    }
    else {
      $page_no = 1;
  }

  $total_records_per_page = 6;

  $offset = ($page_no-1) * $total_records_per_page;
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  $adjacents = "2";


?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hea.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Daftar Museum</h1>
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

            <?php
              $result_count = mysqli_query(
              $conn,
              "SELECT COUNT(*) As total_records FROM `tb_museum`"
              );
              $total_records = mysqli_fetch_array($result_count);
              $total_records = $total_records['total_records'];
              $total_no_of_pages = ceil($total_records / $total_records_per_page);
              $second_last = $total_no_of_pages - 1;
              
              if(isset($_POST['keyword']) || isset($_POST['lokasi']))
              {
                  $keyword = $_POST['keyword'];
                  $lokasi = $_POST['lokasi'];
                  $where = "WHERE (tb_museum.nama LIKE '%".$keyword."%' OR tb_museum.alamat LIKE '%".$keyword."%') AND tb_museum.alamat LIKE '%".$lokasi."%'" ;
              }
              else{
                $where = "";
              }

              $query=mysqli_query($conn, "SELECT * FROM `tb_museum` JOIN `tb_foto` USING(id_museum) $where GROUP BY tb_museum.id_museum LIMIT $offset, $total_records_per_page");
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


            <?php } ?>

        

            <div class="col-12 mt-5 text-center">
              <div class="custom-pagination">
                <ul class="pagination">

                  <?php
                  // if ($total_records_per_page <= 10){     
                    for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                    if ($counter == $page_no) {
                    echo "<li class='active'><a>$counter</a></li>"; 
                            }
                            else{
                          echo "<li><a href='index.php?page=listings&page_no=$counter'><span>$counter</a></span></li>";
                                  }
                          }
                    // }
                  ?>
                  </ul>
                <!-- <span>1</span>
                <a href="listings-2.html">2</a>
                <span class="more-page">...</span> -->
              </div>
            </div>

          </div>
          <div class="col-lg-4 ml-auto">

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Filter</h3>
              <form method="post">
                <div class="form-group">
                  <input type="text" name="keyword" placeholder="Apa yang sedang Anda cari?" class="form-control">
                </div>
                <div class="form-group">
                  <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="lokasi" id="">
                        <option value="">Lokasi</option>
                        <option value="Jakarta Selatan">Jakarta Selatan</option>
                        <option value="Jakarta Timur">Jakarta Timur</option>
                        <option value="Jakarta Barat">Jakarta Barat</option>
                        <option value="Jakarta Utara">Jakarta Utara</option>
                        <option value="Jakarta Pusat">Jakarta Pusat</option>>
                      </select>
                    </div>
                </div>
                <button class="btn btn-info">Cari</button>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>