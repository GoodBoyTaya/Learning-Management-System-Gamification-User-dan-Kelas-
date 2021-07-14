

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
              <h1>Edit Data Admin</h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=adminprofile" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali Ke Profil</a>
            </div>
          </div>
        </div>
      </section>
      </section>    
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" >
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nama Lengkap</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="fullname" name="fullname" value="<?php echo $updatesiswa['namauser'] ?>" required autocomplete="off">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">NISN</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="induk" name="induk" value="<?php echo $updatesiswa['nomorinduk'] ?>" required autocomplete="off">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nomor Handphone</label>
              <div class="col-sm-4">
                <input class="form-control" type="text" id="handphone" name="handphone" value="<?php echo $updatesiswa['nohp'] ?>" required autocomplete="off">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Alamat</label>
              <div class="col-sm-4">
                <input class="form-control" type="text" id="address" name="address"  value="<?php echo $updatesiswa['alamat'] ?>"required autocomplete="off">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="email" id="email" name="email" value="<?php echo $updatesiswa['email'] ?>" required autocomplete="off">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label for="exampleInputFile">Foto Profil</label>
              <input type="file" id="profilepic" name="profilepic" accept="image/jpeg">
            </div>
            <br/>
            <br/>
            <br/>
            <div  style="padding-left: 17%;">
              <input class="btn btn-success" type="submit" id="btnSubmit" name="btnSubmit" value = "Simpan">
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