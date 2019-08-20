

    <div class="site-blocks-cover overlay" style="background-image: url(images/hea.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <img src="images/logo.png" width="200">
                <h2 class="text-white" data-aos="fade-up">Temukan <span class="typed-words"></span></h2>
                <p data-aos="fade-up" data-aos-delay="100">Jelajahi museum peringkat teratas!</p>
              </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-10">
                    <input type="text" id="keyword" onchange="search()" class="form-control rounded" placeholder="Apa yang kamu cari?">
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <button type="button" class="btn btn-primary" onclick="search()">Search</button>
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">KOLEKSI</h2>
            <p class="color-black-opacity-5">Museum-museum yang ada di jakarta</p>
          </div>
        </div>

    <script>
        // Menggunakan fungsi HTML5 geolocation.
        function search(e){
        if (navigator.geolocation)
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var user_location = position.coords.latitude+","+position.coords.longitude;
            var keyword = document.getElementById('keyword').value
            var url = 'core/home.php';
            var list = [];
            $.get({
                url: url,
                data: "position="+user_location+"&keyword="+keyword,
                dataType: 'json',
                cache: true,
                success: function(res){
                  for(i=0; i < res.data.museum.length;i++){
                    if(i == 0 || i == 3)
                      list.push(`<div class='row' style='margin-bottom:15px;'>`)
                      list.push(`
                        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                          
                          <div class="listing-item">
                            <div class="listing-image">
                              <img src="admin/images/`+ res.data.museum[i].nama_foto +`" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-item-content">
                              <h2 class="mb-1"><a href="index.php?detail_museum=`+ res.data.museum[i].id_museum + `">` + res.data.museum[i].nama + `</h2>
                              <span class="address">` + res.data.museum[i].alamat + `</span>
                              <span class="address"> (` + res.data.museum[i].km + ` KM from here)</span>
                            </div>
                          </div>

                        </div>
                        `)
                    if(i == 2 || i == res.data.museum.length)
                      list.push("</div>"); 
                  }
                    console.log(list.join(' '))
                    document.getElementById('list').innerHTML = list.join('');
                }
            });
          })
        }
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var user_location = position.coords.latitude+","+position.coords.longitude;
            var url = 'core/home.php';
            var list = [];
            $.get({
                url: url,
                data: "position="+encodeURI(user_location),
                dataType: 'json',
                cache: true,
                success: function(res){
                  for(i=0; i < res.data.museum.length;i++){
                    if(i == 0 || i == 3)
                      list.push(`<div class='row' style='margin-bottom:15px;'>`)
                      list.push(`
                        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                          
                          <div class="listing-item">
                            <div class="listing-image">
                              <img src="admin/images/`+ res.data.museum[i].nama_foto +`" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-item-content">
                              <h2 class="mb-1"><a href="index.php?detail_museum=`+ res.data.museum[i].id_museum + `">` + res.data.museum[i].nama + `</h2>
                              <span class="address">` + res.data.museum[i].alamat + `</span>
                              <span class="address"> (` + res.data.museum[i].km + ` KM from here)</span>
                            </div>
                          </div>

                        </div>
                        `)
                    if(i == 2 || i == res.data.museum.length)
                      list.push("</div>"); 
                  }
                    console.log(list.join(' '))
                    document.getElementById('list').innerHTML = list.join('');
                }
            });

          }, function(err) {

          });
        } else {

          var url = 'core/home.php';
          $.get({
                url: url,
                data: "position=null",
                dataType: 'json',
                cache: true,
                success: function(msg){
                  for(i=0; i < msg.data.museum.length;i++){
                    msg.data.museum[i].namas
                  }
                }
            });

        }

    </script>
        <div id="list"></div>
        <?php
          // $query=mysqli_query($conn, "SELECT * FROM `tb_museum` JOIN `tb_foto` USING(id_museum) GROUP BY tb_museum.id_museum LIMIT 6");
          // $i=0;
          // while ($row=mysqli_fetch_array($query)) {
          //   $i++;
          //   if($i == 1 || $i == 4)
          //     echo "<div class='row' style='margin-bottom:15px;'>";
           ?>
          <!-- <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="admin/images/<?=$row['nama_foto']?>" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <h2 class="mb-1"><a href="index.php?detail_museum=<?=$row['id_museum']?>"><?=$row['nama'];?></a></h2>
                <span class="address"><?=$row['alamat'];?></span>
              </div>
            </div>

          </div> -->
        <?php
            // if($i == 3 || $i == mysqli_num_rows($query))
            //   echo "</div>"; 
      // } ?>

          </div>
        </div>
      </div>
    </div>

    
    <!-- 
    <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimoni</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
 -->


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Pertanyaan yang Sering Diajukan</h2>
            <p class="color-black-opacity-5">MUZE</p>
          </div>
        </div>


        <div class="row justify-content-center">
          <div class="col-8">
            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Apakah ini tersedia di negara saya?</a>

              <div class="collapse" id="collapse-4">
                <div class="pt-2">
                  <p class="mb-0">Muze hanya menyediakan tentang museum yang ada di negara Indonesia yang tepatnya berada di bagian DKI Jakarta.</p>
                </div>
              </div>
            </div>

            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Apakah ini gratis?</a>

              <div class="collapse" id="collapse-2">
                <div class="pt-2">
                  <p class="mb-0">Website ini gratis untuk para pengunjung yang mengunjungi website kami dan kami tidak melakukan transaksi apapun.</p>
                </div>
              </div>
            </div>

            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">Bagaimana sistemnya bekerja?</a>

              <div class="collapse" id="collapse-3">
                <div class="pt-2">
                  <p class="mb-0">Kamu dapat memilih daerah yang ingin kamu kunjungi museumnya,nanti sistem akan menampilkan apa yang anda cari di menu pencarian</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
