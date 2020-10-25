


<?php $this->load->view('header', $page); ?>



    <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
<!--       
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div> -->


      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1081.5279180887374!2d32.859321987581886!3d39.940877439230164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34e66d5ccb52b%3A0xf1c1872727818ed3!2sNecatibey%2C%20Konya%20Sk.%20No%3A11%2C%2006250%20Alt%C4%B1nda%C4%9F%2FAnkara!5e0!3m2!1str!2str!4v1572698281019!5m2!1str!2str" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        <br>
        <br>
        <br>
      <div class="row">

        <div class="col-lg-8 mb-4 mb-lg-0">



        

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>
Konya Sokak <br>No: 11/1-2-3 Ulus
</h3>
              <p>Altındağ/ANKARA</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:03123112888">(0312) 311 2 888</a></h3>
              <h3><a href="tel:05433970343">(0543) 397 03 43</a></h3>
              <p>Pzt - Cmt 09:00 - 21:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">info@lalebilgisayar.net</a></h3>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->


  <?php $this->load->view('footer'); ?>