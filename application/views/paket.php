 <!-- ==== SERVICES ==== -->
  <div class="container" id="services" name="services">
    <br>
    <br>
    <div class="row">
      <h2 class="centered">DAFTAR PAKET OUTBOND</h2>
      <hr>
      <br>
      <!-- col-lg -->
    </div>
    <!-- row -->
<center>
    <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                      <th>No.</th>
                      <th>Jenis Paket</th>
                      <th>Harga</th>
                      <th>Fasilitas</th>
                      <th>Kegiatan</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1;
                    foreach($data_paket as $paket){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $paket->Jenis_paket ?></td>
                    <td><?php echo "Rp ".$paket->Harga ?></td>
                    <td><?php echo $paket->Fasilitas ?></td>
                    <td><?php echo $paket->Kegiatan ?></td>
        
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        
      <br>
      <div class="col-lg-offset-2 col-lg-8">
        <img src="<?php echo base_url(); ?>assets/img/1.jpg">
      </div>
      <!-- col -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->


 
