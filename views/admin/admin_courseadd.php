<script type="text/javascript">
        $(document).ready(function () {
          $('#tabeldata').DataTable({
            "paging" : false
          });
      });
      function popupgambar(gambar) {
        $("#imgPopUp")
            .attr('src', 'uploads/pic_mapel/'+gambar)

      } 
      if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
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
              <h1>Mata Pelajaran Sekolah</h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" >
            <div class="form-group form-group-lg">
            <h3>Tambah</h3>
            <label class="col-sm-2 control-label" for="formGroupInputLarge">Kode Mata Pelajaran</label>
            <div class="col-sm-3">
              <input class="form-control" type="text" name="kodemapel" id="formGroupInputLarge" required autocomplete="off">
          </div>
        </div>
        <br>
          <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Nama Mata Pelajaran</label>
              <div class="col-sm-7">
                <input class="form-control" type="text" name="namamapel" id="formGroupInputLarge" required autocomplete="off">
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
                <div class="col-sm-4">
                  <select class="form-control" name="selectcat" id="sel1">
                    <option selected value="WAJIB">Wajib</option>
                  </select>
                    <br>
                </div>
              </div>
              <?php
              }
              ?>
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
          <br>
          <hr style= "border-top: 5px solid rgba(0, 0, 0, 0.4);">
          <br>
          <div class="panel panel-default">

            <!-- Table -->
            <table id="tabeldata" class="table table-hover table-bordered">
              <thead style="font-size: larger;">
                <th style="text-align: center; max-width:100px;">ID Mata Pelajaran</th>
                <th style="text-align: center; max-width:100px;">Kode Mata Pelajaran</th>
                <th style="text-align: center;">Nama Mata Pelajaran</th>
                <th style="text-align: center;">Kategori</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Foto Mapel</th>
                <th style="text-align: center;">Action</th>
              </thead>
              <tbody>
              <?php
              foreach ($listmapel as $row) {
                ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $row['id'] ?></td>
                    <td style="text-align: center;"><?php echo $row['kodemapel'] ?></td>
                    <td style="font-weight:bold;"><?php echo $row['namamapel'] ?></td>
                    <td style="text-align: center;"><?php echo strtoupper($row['peminatan']) ?></td>
                    <?php
                      if ($row['statusmapel'] ) {
                        ?> 
                        <td style="text-align: center;">Aktif</td>
                    <?php
                      }
                      else {
                      ?>
                        <td style="text-align: center;">Tidak Aktif</td>
                    <?php
                      }
                    ?>
                    <td><i style="cursor: pointer;" class="icon-images btn-icon size-24" data-toggle="modal" data-target="#modalGambar" onclick="popupgambar('<?= $row['pic'] ?>')"> Klik Untuk Melihat</i>&nbsp;</td>
                    <td style="max-width: 150px;"><a class="btn btn-warning" href="?navito=admin_courseedit&id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Ubah Data</a></td>
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <div class="modal fade" id="modalGambar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Sampul Mata Pelajaran</h4>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="row">
                      <div class="col-md-12 text-center">
                        <img id="imgPopUp" class="img-fluid" style="max-height: 600px; max-width: 400px;" src="" alt="Foto Profil">
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
      

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