<?php $this->load->view('header'); ?>


  <!--================Home Banner Area =================-->
  <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase">lale bilgisayar</p>
            <h3><span>Tamir</span> Satış <br />Destek <span>Bakım</span></h3>
            <h4>Sıfır ve 2.El ürünlrimiz satılık.</h4>
            <a class="main_btn mt-40" href="<?php echo base_url('kategori'); ?>">Tüm Ürünler</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            
              <i class="flaticon-money"></i>
              <h3>Para iade garantisi</h3>
            
            <p>1 hafta içinde para iadesi</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            
              <i class="flaticon-truck"></i>
              <h3>Ücretsiz kargo</h3>
            
            <p>Tüm ürünler ücretsiz kargo</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            
              <i class="flaticon-support"></i>
              <h3>sürekli destek</h3>
            
            <p>7/24 destek</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            
              <i class="flaticon-blockchain"></i>
              <h3>güvenli ödeme</h3>
            
            <p>Güvenli çevrimiçi ödeme</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->

  <?php 
  //index sayfası yapılandırılacağı zaman aktif edilebilir.
  //$this->load->view('footer'); 
  ?>

  <?php $this->load->view('footer'); ?>