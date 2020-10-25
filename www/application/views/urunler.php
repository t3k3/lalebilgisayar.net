
<?php $this->load->view('header', $page); ?>


    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting">
                  <option value="1">Yeni Ürünler</option>
                  <option value="2">Fiyata Göre (Artan)</option>
                  <option value="4">Fiyata Göre (Azalan)</option>
                </select>
                <select class="show">
                  <option value="1">12 Adet</option>
                  <option value="2">25 Adet</option>
                  <option value="4">50 Adet</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">


              <?php //echo print_r($gorselData) ?>

              <?php foreach ($urunData as $urun) { ?>
              
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                    <a href="<?php echo base_url('home/urun/').$urun->id; ?>">  
                    <img
                        class="card-img"
                        
                        src="<?php 
                        
                        foreach ($gorselData as $gorsel) {
                        
                          
                          if ($urun->id == $gorsel->urun_id) {
                            echo base_url('uploads/').$gorsel->name; 
                            break;
                            
                          }
                        }
                        
                        
                        ?>"
                        alt="<?php echo $urun->urun_name; ?>"
                      /></a>
                 
                    </div>
                    <div class="product-btm">
                      <a href="<?php echo base_url('home/urun/').$urun->id; ?>" class="d-block">
                        <h4><?php echo $urun->urun_name; ?></h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4"><?php
                        
                        echo $fiyat = $urun->urun_fiyat.".00 TL"; 
                        

                        ?></span>
                        
                      </div>
                    </div>
                  </div>
                </div>

                <?php } ?>

                

              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Kategoriler</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li <?php if (isset($pageKategori)) {
                      if ($pageKategori == "tumu") {
                        echo " class='active'";
                      }
                    } ?>>
                      <a href="<?php echo base_url('kategori') ?>">Tüm Ürünler</a>
                    </li>
                    <li <?php if (isset($pageKategori)) {
                      if ($pageKategori == "bilgisayar") {
                        echo " class='active'";
                      }
                    } ?>>
                      <a href="<?php echo base_url('kategori/bilgisayar') ?>">Bilgisayar</a>
                    </li>
                    <li <?php if (isset($pageKategori)) {
                      if ($pageKategori == "donanim") {
                        echo " class='active'";
                      }
                    } ?>>
                      <a href="<?php echo base_url('kategori/donanim') ?>">Donanım</a>
                    </li>
                    <li <?php if (isset($pageKategori)) {
                      if ($pageKategori == "tablet") {
                        echo " class='active'";
                      }
                    } ?>>
                      <a href="<?php echo base_url('kategori/tablet') ?>">Tablet</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Alt Kategoriler</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <?php 
                    
                   
                      
                    

                    foreach ($altKategoriler as $altKategori) { ?>
                    <li>
                      <a href="<?php if ($pageKategori == "tumu") {
                        echo "kategori/".slugify($altKategori->kategori_name) ?>"><?php echo $altKategori->kategori_name;
                      }
                      else {
                        echo slugify($altKategori->kategori_name) ?>"><?php echo $altKategori->kategori_name;
                      } ?></a>
                    </li>
                    
                    <?php } ?>


                  </ul>
                </div>
              </aside>


              <form action="<?php echo base_url('kategori') ?>" method="get">

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Kelime Filtrele</h3>
                </div>
                <div class="widgets_inner">
                  <div class="form-group">
                    <input type="text" class="form-control" name="q" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Marka, model, özellik, etiket vb.</small>
                  </div>
                </div>
              </aside>





              <aside class="left_widgets p_filter_widgets">

                <button class="btn btn-success" style="width:100%" type="submit">ARA</button>
                    
              </aside>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->

    <?php $this->load->view('footer'); ?>