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
              <h1>Edit Data Sekolah</h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=superadminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
            <div class="col-sm-8">
              <a href="?navito=superadmin_schooldata" class="btn btn-info">Kembali ke Tabel&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" >
        <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Status Sekolah</label>
                <div class="col-sm-2">  
                  <select class="form-control" name="selectstat" id="sel1">
                    <?php if ($getsekolah[0]['stat']) {?>
                      <option selected value="1">Aktif</option>
                      <option value="0">Tidak Aktif</option>
                    <?php } 
                    else {?>
                      <option value="1">Aktif</option>
                      <option selected value="0">Tidak Aktif</option>
                    <?php }?>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nama Sekolah</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="name" id="formGroupInputLarge" required value="<?= $getsekolah[0]['namesekolah']?>">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nomor NPSN</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="npsn" id="formGroupInputLarge" required value="<?= $getsekolah[0]['npsn']?>">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Jenjang</label>
              <div class="col-sm-10">
                <select class="form-control" name="jenjang" id="formGroupInputLarge" required>
                <option disabled selected ><?= $getsekolah[0]['jenjang']?></option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Telepon</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="phone" id="formGroupInputLarge" required value="<?= $getsekolah[0]['phone']?>">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Alamat</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="address" id="formGroupInputLarge" required value="<?= $getsekolah[0]['address']?>">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="email" name="email" id="formGroupInputLarge" required value="<?= $getsekolah[0]['email']?>">
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="formGroupInputLarge">Foto Profil</label>
                <div class = "col-sm-10">
                <input class="form-control" type="file" id="profilepic" name="profilepic" accept="image/png"> Gunakan Format PNG
              </div>
              <br>
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