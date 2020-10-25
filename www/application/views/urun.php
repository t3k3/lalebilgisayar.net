
<?php $this->load->view('header'); ?>


    <!--================Single Product Area =================-->
    <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">
              
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">


              <?php 
              
              $x = 0;

              foreach ($gorsel as $gors) { ?>

                <div class="carousel-item <?php if ($x == 0) {
                  echo 'active';
                } ?>">
                  <img class="d-block w-100" src="<?php echo $gors->path ?>" alt="">
                </div>

              <?php 
            $x++;
            } ?>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Geri</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">İleri</span>
              </a>
            </div>
            <?php
                    //kategori linklerini alıyoruz.
                    foreach ($kategori as $kat) {
                      if ($kat->kategori_id == $urun->kategori_id) {
                        $kategor =  $kat->kategori_name;
                      }
                    }


                    ?>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3><?php echo $urun->urun_name; ?></h3>
              <h2><?php echo $urun->urun_fiyat.'.00 TL'; ?></h2>
              <ul class="list">
                <li>
                  <a class="active" href="<?php  echo base_url('kategori/').strtolower($kategor); ?>">
                    <span>Kategori</span> : <?php  echo $kategor; ?></a
                  >
                  
                </li>
                <li>
                  <a href="#"> <span>Stok</span> : Var</a>
                </li>
              </ul>
              <p>
              <?php echo kisalt($urun->urun_detay, 180); ?>
              </p>
              <div class="product_count">
                <label for="qty">Adet:</label>
                <input
                  type="text"
                  name="qty"
                  id="sst"
                  maxlength="12"
                  value="1"
                  title="Quantity:"
                  class="input-text qty"
                />
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                  class="increase items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-up"></i>
                </button>
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                  class="reduced items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-down"></i>
                </button>
              </div>
              <div class="card_area">

                <!-- Button trigger modal -->
<button type="button" class="main_btn" data-toggle="modal" data-target="#exampleModal">
  İletişime Geç
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">İletişim Bilgilerimiz :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div align="center" class="modal-body">
        <h3>LALE BİLGİSAYAR</h3>
        <h4>Konya Sokak No: 11/1-2-3</h4> 
        <h4>Ulus</h4>
        <h4>
        Altındağ/ANKARA</h4>
        <h3><a href="tel:03123112888">(0312) 311 2 888</a></h3>
        <h3><a href="tel:05433970343">(0543) 397 03 43</a></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>


                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-diamond"></i>
                </a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item active">
            <a
              class="nav-link"
              id="detay-tab"
              data-toggle="tab"
              href="#detay"
              role="tab"
              aria-controls="detay"
              aria-selected="true"
              >Ürün Detayı</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="ozellikler-tab"
              data-toggle="tab"
              href="#ozellikler"
              role="tab"
              aria-controls="ozellikler"
              aria-selected="false"
              >Özellikleri</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="taksit-tab"
              data-toggle="tab"
              href="#taksit"
              role="tab"
              aria-controls="taksit"
              aria-selected="false"
              >Taksit Seçenekleri</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="iade-tab"
              data-toggle="tab"
              href="#iade"
              role="tab"
              aria-controls="iade"
              aria-selected="false"
              >İade Koşulları</a
            >
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade "
            id="detay"
            role="tabpanel"
            aria-labelledby="detay-tab"
          >
            <p>
              <?php echo $urun->urun_detay; ?>
            </p>
          </div>
          <div
            class="tab-pane fade"
            id="ozellikler"
            role="tabpanel"
            aria-labelledby="ozellikler-tab"
          >
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <h5>Width</h5>
                    </td>
                    <td>
                      <h5>128mm</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Height</h5>
                    </td>
                    <td>
                      <h5>508mm</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Depth</h5>
                    </td>
                    <td>
                      <h5>85mm</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Weight</h5>
                    </td>
                    <td>
                      <h5>52gm</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Quality checking</h5>
                    </td>
                    <td>
                      <h5>yes</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Freshness Duration</h5>
                    </td>
                    <td>
                      <h5>03days</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>When packeting</h5>
                    </td>
                    <td>
                      <h5>Without touch of hand</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Each Box contains</h5>
                    </td>
                    <td>
                      <h5>60pcs</h5>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          

          <div
            class="tab-pane fade"
            id="taksit"
            role="tabpanel"
            aria-labelledby="taksit-tab"
          >
            <p>
              Yok.
            </p>
          </div>

          <div
            class="tab-pane fade"
            id="iade"
            role="tabpanel"
            aria-labelledby="iade-tab"
          >
            <p>
              Yok.
            </p>
          </div>
          
        </div>
      </div>
    </section>
    <!--================End Product Description Area =================-->


    <section class="product_description_area">
      <div class="container">

          BENZER ÜRÜNLER
        
      </div>
    </section>
    <!--================End Product Description Area =================-->


    <!--================ start footer Area  =================-->
    <?php $this->load->view('footer'); ?>