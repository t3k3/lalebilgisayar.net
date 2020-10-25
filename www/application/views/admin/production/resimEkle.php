<?php $this->load->view('admin/production/header'); ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">

            </div>
            <div class="clearfix"></div>
           

              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün başarıyla Eklendi. </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php echo "Ürün Adı : ".$urun_name; ?>
                    <h3>ÜRÜNE RESİM YÜKLE <a href="<?php echo base_url('admin'); ?>"> <input style="float:right" type="button" class="btn
                          btn-primary" value="Geç"></a></h3>
                    
                    

                    <small>Resimler sürüklendiğinde ya da seçildiğinde otomatik yüklenecektir.</small>


                    <form action="<?php echo base_url('admin/resimEkle').'/'.$last_id; ?>" class="dropzone" id="dropForm"></form>

                    
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /page content -->



<?php $this->load->view('admin/production/footer'); ?>