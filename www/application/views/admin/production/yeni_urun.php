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
                    <h2>Yeni Ürün Ekle </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="<?php echo base_url('admin/urunEkle'); ?>" method="POST">

<!-- ÜRÜN KODU -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Kodu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="urun_kodu" type="text" class="form-control" placeholder="Ürün Kodunu Giriniz..." required>
                        </div>
                      </div>
<!-- ÜRÜN KODU -->



<!-- KATEGORİ -->
<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="kategori_id" class="select2_group form-control">
                            <optgroup label="Bilgisayar">
                              <option value="4">Laptop</option>
                              <option value="5">Masaüstü</option>
                              <option value="7">Netbook</option>
                              <option value="6">Server</option>
                            </optgroup>
                            <optgroup label="Donanım">
                              <option value="8">İşlemci</option>
                              <option value="9">Anakart</option>
                              <option value="10">Ram Bellek</option>
                              <option value="11">Ekran Kartı</option>
                              <option value="12">Hard Disk</option>
                              <option value="13">SSD Disk</option>
                              <option value="14">Monitör</option>
                            </optgroup>
                            <optgroup label="Tablet">
                              <option value="3">Tablet</option>

                            </optgroup>
                          </select>
                        </div>
                      </div>
<!-- KATEGORİ -->


                    
<!-- ÜRÜN ADI -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Adı</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="urun_name" type="text" class="form-control" placeholder="Ürün Adını Giriniz..." required>
                        </div>
                      </div>
<!-- ÜRÜN ADI -->

<!-- MARKA -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Marka</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="urun_marka" type="text" class="form-control" placeholder="Ürün Markası Giriniz..." required>
                        </div>
                      </div>
<!-- MARKA -->

<!-- MODEL -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Model</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="urun_model" type="text" class="form-control" placeholder="Ürün Modeli Giriniz..." required>
                        </div>
                      </div>
<!-- ÜRÜN ADI -->




<!-- AÇIKLAMA -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Açıklaması <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea name="urun_detay" class="form-control" rows="3" placeholder="Ürün Açıklaması Giriniz..." required></textarea>
                        </div>
                      </div>

<!-- AÇIKLAMA -->

<!-- ETİKETLER -->
                      <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Etiketleri</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="urun_etiketler" id="tags_1" type="text" class="tags form-control" value="i5, intel, tablet" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
<!-- ETİKETLER -->

<!-- DURUM -->

                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Durum
                          <br>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="urun_isyeni" value="1"> Sıfır
                            </label>
                      
                            <label>
                              <input type="radio" class="flat" checked name="urun_isyeni" value="0"> 2. El
                            </label>
                          </div>
                          
                        </div>
                      </div>

<!-- DURUM -->

<!-- STOK DURUM -->

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon">Adet</span>
                        <input name="urun_stok" type="number" class="form-control" aria-label="Ücret" required>
                        </div>
                      </div>
                      </div>

<!-- STOK DURUM -->

<!-- FİYAT -->

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Fiyat</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon">TL</span>
                        <input name="urun_fiyat" type="number" class="form-control" aria-label="Ücret" required>
                        <span class="input-group-addon">.00</span>
                        </div>
                      </div>
                      </div>
                    
<!-- FİYAT -->




                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="<?php echo base_url('admin'); ?>"> <input type="button" class="btn
                          btn-primary" value="Vazgeç"></a>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /page content -->




<?php $this->load->view('admin/production/footer'); ?>