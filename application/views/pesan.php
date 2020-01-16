 <!-- ==== SERVICES ==== -->
  <div class="container" id="services" name="services">
    <br>
    <br>
    <div class="row">
      <h2 class="centered">ONE BRAND, ONE VOICE.</h2>
      <hr>
      <br>
      <div class="col-lg-offset-2 col-lg-8">
        <p>Silakan registrasikan data anda dengan klik <a href="<?php echo base_url('data/tambahwisatawan') ?>"> disini </a>
      </div>
      <!-- col-lg -->
    </div>
    <!-- row -->
<center>
    <div class="row">
      <div class="col-md-4">
          <div class="container" style="margin-top: 20px">
            <h3>Input Data Pesanan</h3>
    <hr>
            <div class="col-md-10">
            <?php echo form_open('data/simpanpesanan') ?>
              
              <!-- <div class="form-group">
                <label for="text">Kode Pesanan</label>
                <input type="text" name="Kode_pemesanan" class="form-control" placeholder="Kode Pemesanan">
              </div>
 -->
              <div class="form-group">
                <label for="text">Kode Paket</label>
                <select name="Kd_paket" class="form-control">
                    <option value="Kd_paket">--Pilih--</option>
                    <?php 
                    $sql = $this->db->get('jenis_paket');
                    foreach ($sql->result() as $row) {
                    ?>
                    <option value="<?php echo $row->jenis_paket ?>"><?php echo $row->jenis_paket ?></option> 
                    <?php } ?>
                </select>
                <!-- <input type="text" name="Kd_paket" class="form-control" placeholder="Kode Paket"> -->
              </div>

              <div class="form-group">
                <label for="text">Tanggal Pemesanan</label>
                <input type="date" name="Tgl_pemesanan" class="form-control" placeholder="Tanggal Pemesanan">
              </div>

               <div class="form-group">
                <label for="text">Jumlah Peserta</label>
                <input type="text" name="Jml_peserta" class="form-control" placeholder="Jumlah Peserta">
              </div>

              <div class="form-group">
                <label for="text">Total Harga</label>
                <input type="text" name="Total_harga" class="form-control" placeholder="Total Harga">
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
      <br>
<!--       <div class="col-lg-offset-2 col-lg-8">
        <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/iphone.png" alt="">
      </div> -->
      <!-- col -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->


  <!-- ==== SECTION DIVIDER2 -->
  <!-- <section class="section-divider textdivider divider2"> -->
    <!-- <div class="container">
      <h1>DESIGN IS AN INTERACTION</h1>
      <hr>
      <p>To develop a deeper and more meaningful connection with consumers, we believe design must invite them to take part in the conversation.</p>
    </div> -->
    <!-- container -->
  <!-- </section> -->
  <!-- section -->
