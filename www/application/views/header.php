<!DOCTYPE html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>LALE Bilgisayar | (0312) 311 2 888 | Bilgisayar, Laptop, Tablet Garantili Tamir ve Bakım Servisi.</title>


    <?php $this->load->view('include_styles'); ?>

  </head>

  <body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
      <div class="top_menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="float-left">
                <p>telefon: (0312) 311 2 888</p>
                <p>email: info@lalebilgisayar.net</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="float-right">
                <ul class="right_side">
                  <li>
                    <a href="#">
                      kuponlar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      kampanyalar
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('iletisim') ?>">
                      iletişim
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main_menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light w-100">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="<?php echo base_url('') ?>">
              <h2>LALE</h2>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset w-100"
              id="navbarSupportedContent"
            >
              <div class="row w-100 mr-0">
                <div class="col-lg-7 pr-0">
                  <ul class="nav navbar-nav center_nav pull-right">

                    <li class="nav-item <?php if($page == 'index'){
                      echo 'active';
                    } ?>">
                      <a class="nav-link" href="<?php echo base_url(); ?>">Ana Sayfa</a>
                    </li>
        
                    <li class="nav-item <?php if($page == 'urunler'){
                      echo 'active';
                    } ?>">
                      <a class="nav-link" href="<?php echo base_url('kategori'); ?>">Ürünler</a>
                    </li>


                    <li class="nav-item <?php if($page == 'iletisim'){
                      echo 'active';
                    } ?>">
                      <a class="nav-link" href="<?php echo base_url('iletisim'); ?>">İletişim</a>
                    </li>

                  </ul>
                </div>

                <div class="col-lg-5 pr-0">
                  <ul class="nav navbar-nav navbar-right right_nav pull-right">
                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-search" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-user" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-heart" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Shop Category</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="category.html">Shop</a>
              <a href="category.html">Women Fashion</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    ================End Home Banner Area =================-->
