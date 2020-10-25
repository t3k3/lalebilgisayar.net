
    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Kategoriler</h4>
            <ul>
            <li>
                <a href="notebook">Notebook</a>
              </li>
              
                                  <li>
                <a href="masaustu">Masaustu</a>
              </li>
              
                                  <li>
                <a href="server">Server</a>
              </li>
              
                                  <li>
                <a href="netbook">Netbook</a>
              </li>
              
                                  <li>
                <a href="islemci">İşlemci</a>
              </li>
              
                  
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Kategoriler</h4>
            <ul>
            
              
                                  <li>
                <a href="anakart">Anakart</a>
              </li>
              
                                  <li>
                <a href="ram_bellek">Ram Bellek</a>
              </li>
              
                                  <li>
                <a href="ekran_karti">Ekran Kartı</a>
              </li>
              
                                  <li>
                <a href="hard_disk">Hard Disk</a>
              </li>
              
                                  <li>
                <a href="ssd_disk">SSD Disk</a>
              </li>
              
                                  <li>
                <a href="monitor">Monitör</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Linkler</h4>
            <ul>
              <li><a href="<?php echo base_url(); ?>">Ana Sayfa</a></li>
              <li><a href="<?php echo base_url('kategori'); ?>">Ürünler</a></li>
              <li><a href="<?php echo base_url('iletisim'); ?>">İletişim</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Abone Ol!</h4>
            <p>Mail bültenine abone ol.</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">
                <input class="form-control" name="EMAIL" placeholder="EMail Adres..." onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'EMail Adres... '" required="" type="email">
                <button class="click-btn btn btn-default">Abone Ol!</button>
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>
  
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="footer-bottom row align-items-center">
          <p class="footer-text m-0 col-lg-8 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sitedeki İçerik ve Ürünler Lale Bilgisayar'a Aittir. İzinsiz Kopyalanamaz, Paylaşılamaz.
</p>

        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Teşekkürler</h2>
                    <p>Mesajınız başarıyla alındı...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Üzgünüm !</h2>
                    <p> Hata oluştu </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->




<?php $this->load->view('include_scripts'); ?>

</body>

</html>