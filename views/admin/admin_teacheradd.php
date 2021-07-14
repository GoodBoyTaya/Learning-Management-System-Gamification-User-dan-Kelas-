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
              <h1>Tambah Data Guru</h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
            <div class="col-sm-8">
              <a href="?navito=admin_teacherdata" class="btn btn-info">Kembali ke Tabel&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <form method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nama Lengkap</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="fullname" name="fullname" required autocomplete="off">
              </div>
            </div>
            <br/>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">NIGN</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="induk" name="induk" required autocomplete="off">
              </div>
            </div>
            <br/>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Mata Pelajaran</label>
              <div class="col-sm-10">
                  <select class="selectmapel form-control" id="mapel" name="mapel[]" required multiple="multiple">
                  <?php
                    foreach ($listmapeladd as $select){
                  ?>
                    <option value="<?php echo ($select['id'])?>" > <?php echo ($select['namamapel']. "  -  ") ?> <?php echo (strtoupper($select['peminatan'])) ?>  </option>
                  <?php
                    }
                  ?>
                  </select>
              </div>
            </div>
            <br/>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nomor Handphone</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="handphone" name="handphone" required autocomplete="off">
              </div>
            </div>
            <br/>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="email" id="email" name="email" required autocomplete="off">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label for="exampleInputFile">Foto Profil</label>
              <input type="file" id="profilepic" name="profilepic" accept="image/jpg">
            </div>
            <br/>
            <br/>
            <br/>
            <div  style="padding-left: 17%;">
              <input class="btn btn-success" type="submit" id="btnSubmit" name="btnSubmit" value="Simpan">
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
    

    <script type="text/javascript">
        $(document).ready(function() {
            $('.selectmapel').select2();
        });
    </script>