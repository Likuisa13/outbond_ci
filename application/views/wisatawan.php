<!DOCTYPE html>
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
    <!-- Main content -->
   <div class="container" style="margin-top: 20px">
            <h3>Input Data wisatawan</h3>
    <hr>
            <div class="col-md-10">
            <?php echo form_open('data/simpanwisatawan') ?>
              <!-- <div class="form-group">
                <label for="text">Kode Paket</label>
                <input type="text" name="Kd_paket" class="form-control" placeholder="Kode Paket">
              </div> -->

              <div class="form-group">
                <label for="text">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
              </div> 
              

              <div class="form-group">
                <label for="text">Instansi</label>
                <input type="text" name="nama_instansi" class="form-control" placeholder="Nama Instansi">
              </div> 
              

              <!-- <form class="form-horizontal" id="submit"> -->
              <div class="form-group">
                  <label for="text">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>
                
                <!-- <form class="form-horizontal" id="submit"> -->
              <div class="form-group">
                  <label for="text">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>

                <!-- <form class="form-horizontal" id="submit"> -->
              <div class="form-group">
                  <label for="text">No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="No. Telepon">
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
