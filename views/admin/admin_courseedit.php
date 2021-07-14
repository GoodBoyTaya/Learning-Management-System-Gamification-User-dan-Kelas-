<script type="text/javascript">
        $(document).ready(function () {
          $('#tabeldata').DataTable();
      });
</script>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h1>Edit Mata Pelajaran Sekolah</h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
            <div class="col-sm-8">
              <a href="?navito=admin_courseadd" class="btn btn-info">Kembali ke Tabel&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" >
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Kode Mata Pelajaran</label>
            <div class="col-sm-3">
              <input class="form-control" type="text" name="kodemapel" id="formGroupInputLarge" value="<?php echo $updatemapel['kodemapel'] ?>" required autocomplete="off">
            </div>
            </div>
          <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nama Mata Pelajaran</label>
              <div class="col-sm-7">
                <input class="form-control" type="text" name="namamapel" id="formGroupInputLarge" value="<?php echo $updatemapel['namamapel'] ?>" required autocomplete="off">
              </div>
          </div>
            <?php
              if ($_SESSION['jenjang']=='SMA') {
            ?>
                <div class="form-group form-group-lg">
                  <label class="col-sm-2 control-label" for="formGroupInputLarge">Kategori</label>
                  <div class="col-sm-4">  
                    <select class="form-control" name="selectcat" id="sel1">
                      <option selected value="WAJIB">Wajib</option>
                      <option value="IPA">IPA</option>
                      <option value="IPS">IPS</option>
                    </select>
                      <br>
                  </div>
                </div>
              <?php
              }
              else {
              ?>
                <div class="form-group form-group-lg">
                  <label class="col-sm-2 control-label" for="formGroupInputLarge">Kategori</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="selectcat" id="sel1">
                      <option selected value="WAJIB">Wajib</option>
                    </select>
                  </div>
                  <br>
                </div>
              <?php
              }
              ?>
              <br>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="formGroupInputLarge">Status Mapel</label>
                  <div class="col-sm-2">  
                    <select class="form-control" name="selectstat" id="sel1">
                      <?php if ($updatemapel['statusmapel']) {?>
                        <option selected value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                      <?php } 
                      else {?>
                        <option value="1">Aktif</option>
                        <option selected value="0">Tidak Aktif</option>
                      <?php }?>
                     </select>
                  </div>
            <br>
            <br>
            <br>

            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Foto Profil</label>
              <div class="col-sm-4">
                <input type="file" id="exampleInputFile" name="mapelpic" accept="image/jpeg">
              </div>
            </div>
            <br>
            <br>
            <div style="padding-left: 15%;">
              <div class="col-sm-10">
                <input class="btn btn-success" type="submit" id="btnSubmit" name="btnSubmit" value = "Simpan">
              </div>
            </div>
          </form>
        </div>
      </section>
      

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-4 probootstrap-back-to-top">
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>