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
              <a href="?navito=admin_classadd" class="btn btn-info">Kembali ke Tabel&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" >
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nama Kelas</label>
            <div class="col-sm-5">
              <input class="form-control" type="text" name="kelas" id="formGroupInputLarge" value="<?php echo $editkelas[0]['deskripsi'] ?>" required autocomplete="off">
            </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Abjad</label>
            <div class="col-sm-1">
              <input class="form-control" type="text" name="abjad" id="formGroupInputLarge" value="<?php echo $editkelas[0]['abjad'] ?>" required autocomplete="off" disabled>
            </div>
            </div>
            <br>
          <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Tahun Ajaran</label>
              <div class="col-sm-2">
                <input class="form-control" type="text" name="tahunajaran" id="formGroupInputLarge" value="<?php echo $editkelas[0]['tahun_ajaran'] ?>" required autocomplete="off">
              </div>
          </div>
          <br>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="formGroupInputLarge">Status Kelas</label>
                  <div class="col-sm-2">  
                    <select class="form-control" name="selectstat" id="sel1">
                      <?php if ($editkelas[0]['stat']) {?>
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