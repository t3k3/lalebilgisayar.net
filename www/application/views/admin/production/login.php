<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lale Bilgisayar | Yönetici Girişi | </title>

<!-- Bootstrap -->
<link href="<?php echo base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/admin/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url('assets/admin/vendors/google-code-prettify/bin/prettify.min.css'); ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url('assets/admin/vendors/select2/dist/css/select2.min.css'); ?>" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url('assets/admin/vendors/switchery/dist/switchery.min.css'); ?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/build/css/dropzone.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/admin/build/css/custom.min.css') ?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url('admin/loginyap'); ?>" method="POST">
              <h1>Yetkili Giriş</h1>
              <div>
                  <small style="color:red"><?php 
                    if (!isset($_GET['login']) == 0) {
                        echo "Giriş işlemi Başarısız.";
                    }
                  ?></small>
                <input type="text" class="form-control" placeholder="Kullanıcı Adı..." name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Parola..." name="password" required="" />
              </div>
              <div>
                <button class="btn btn-primary" type="submit">Giriş</button>
                
              </div>

              <div class="clearfix"></div>


            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
