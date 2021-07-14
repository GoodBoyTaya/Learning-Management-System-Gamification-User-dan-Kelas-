
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
              <h1>Tambah Jadwal</h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
            <div class="col-sm-8">
              <a href="?navito=admin_assignadd&id=<?= $idkelas  ?>" class="btn btn-info">Kembali ke Tabel&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>
          </div>
        </div>
      </section>
      </section>    
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <div class="col-sm 2">
              <h4>Kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <span style="font-weight: bold;"> <?php echo($selectedassign[0]['deskripsi']) ?></span></h4>
              <h4>Nama Guru &nbsp;&nbsp;:&nbsp;<span style="font-weight: bold;"> <?php echo($selectedassign[0 ]['namaguru']) ?></span> </h4>
              <h4>Nama Mapel :&nbsp;<span style="font-weight: bold;"> <?php echo($selectedassign[0 ]['namamapel']) ?></span> </h4>
          </div>
          <br>
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" >
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Hari Pelajaran</label>
              <div class="col-sm-4">
                <select class="form-control" name="selday" id="sel1" required>
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Jam Mulai</label>
              <div class="col-sm-4">
                <div class='input-group date' id='inputjammasuk'>
                  <input type='text' class="form-control" name="inputjammasuk" required autocomplete="off"/>
                  <span class="input-group-addon" style="cursor: pointer;">
                  <span class="glyphicon glyphicon-time"></span>
                  </span>
                </div>
              </div>
            </div>
            <br>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Jam Selesai</label>
              <div class="col-sm-4">
                <div class='input-group date' id='inputjamkeluar'>
                  <input type='text' class="form-control" name="inputjamkeluar" required autocomplete="off"/>
                  <span class="input-group-addon" style="cursor: pointer;">
                  <span class="glyphicon glyphicon-time"></span>
                  </span>
                </div>
              </div>
            </div>
            <br>
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

<script type="text/javascript">
      $(function () {
          $('#inputjammasuk').datetimepicker({
              format: 'HH:mm',
          });
      });
      $(function () {
          $('#inputjamkeluar').datetimepicker({
              format: 'HH:mm'
          });
      });
  </script>