lo<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Web Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/plugins') ?>/font-awesome/css/font-awesome.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/dist') ?>/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark bg-dark navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('assets/template/back/dist') ?>/img/smartcity.png" alt="SmartCity" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Outbond

</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/template/back/dist') ?>/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Administrator</a>
          <a href="<?php echo base_url('login/logout'); ?>" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              Log Out
            </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Data
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('data/index') ?>" class="nav-link">
                  <i class="fa fa-file nav-icon"></i>
                  <p>Data Paket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('data/indexpemesanan') ?>" class="nav-link">
                  <i class="fa fa-file nav-icon"></i>
                  <p>Data Pemesanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('data/indexwisatawan') ?>" class="nav-link">
                  <i class="fa fa-file nav-icon"></i>
                  <p>Data Wisatawan</p>
                </a>
              </li>
          </li> 
        </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Paket</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paket</li>  -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <div class="container" style="margin-top: 20px">
            <h3>Input Data Paket</h3>
    <hr>
            <div class="col-md-10">
            <?php echo form_open('data/simpan') ?>
              <!-- <div class="form-group">
                <label for="text">Kode Paket</label>
                <input type="text" name="Kd_paket" class="form-control" placeholder="Kode Paket">
              </div> -->

              <div class="form-group">
                <label for="text">Jenis Paket</label>
                <select name="Jenis_paket" class="form-control">
                    <option value="Jenis_paket">--Pilih--</option>
                    <?php 
                    $sql = $this->db->get('jenis_paket');
                    foreach ($sql->result() as $row) {
                    ?>
                    <option value="<?php echo $row->jenis_paket ?>"><?php echo $row->jenis_paket ?></option> 
                    <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Harga</label>
                <select name="Harga" class="form-control">
                    <option value="Harga">--Pilih--</option>
                    <?php 
                    $sql = $this->db->get('jenis_paket');
                    foreach ($sql->result() as $row) {
                    ?>
                    <option value="<?php echo $row->total_harga ?>">Rp.<?php echo $row->total_harga ?></option> 
                    <?php } ?>
                </select>
              </div>

              <form class="form-horizontal" id="submit">
              <div class="form-group">
                  <label for="text">Fasilitas</label>
                  <textarea name="fasilitas" class="form-control" rows="7" col="150"></textarea>
                    <!-- <input type="text" name="Fasilitas" class="form-control" placeholder="Fasilitas"> -->
                </div>
                
                <form class="form-horizontal" id="submit">
              <div class="form-group">
                  <label for="text">Kegiatan</label>
                    <input type="text" name="Kegiatan" class="form-control" placeholder="Kegiatan">
                </div>
                <div class="form-group">
                <button class="btn btn-sm btn-success" id="btn_upload" type="submit">Upload</button>
                <a href="<?php echo base_url('data/')?>" class="btn btn-sm btn-primary">Back</a>
                </div>
            </form>   
            <?php echo form_close() ?>
        </div>
      </div>
</form></hr>

<script type="text/javascript" src="<?php echo base_url('assets/dist/js/bootstrap.js')  ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
 
        $('#btn_upload').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>/data/do_upload',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Data Berhasil.");
                   }
                 });
            });
         
 
    });
     </script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</script>

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="page-footer">
    <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-block-down">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <div class="footer-copyright text-center py-3"><strong>Copyright &copy; 2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.</div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/template/back/plugins') ?>/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/template/back/plugins') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('assets/template/back/plugins') ?>/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/demo.js"></script>
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/pages/dashboard3.js"></script>
</body>
</html>
