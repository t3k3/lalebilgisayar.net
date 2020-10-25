      <?php $this->load->view('admin/production/header'); ?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürünler</h2>
                    <a href="<?php echo base_url('admin/yeniEklePage'); ?>"><button style="float: right" class="btn btn-success fa fa-plus"> Ürün Ekle</button></a>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Ürün Kodu</th>
                          <th>Ürün Adı</th>
                          <th>Kategori</th>
                          <th>Fiyat</th>
                          <th>Stok</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php foreach($urunData as $row) { ?>
                      <tr>
                          <td><?php echo $row->urun_kodu ?></td>
                          <td><?php echo $row->urun_name ?></td>
                          <td><?php 
                          
                          foreach ($kategoriData as $kategori) {
                            if ($kategori->kategori_id == $row->kategori_id) {
                              echo $kategori->kategori_name;
                            }
                          }

                          
                          ?></td>
                          <td><?php echo $row->urun_fiyat ?></td>
                          <td><?php echo $row->urun_stok ?></td>
                          <td><a href="<?php echo base_url('admin/urunSil/').$row->id; ?>"><input class="btn btn-danger btn-sm" type="button" value="Sil"></a>
                          <a href="<?php echo base_url('home/urun/').$row->id; ?>"><input class="btn btn-primary btn-sm" type="button" value="Git"></a></td>
                          
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

      <?php $this->load->view('admin/production/footer'); ?>
