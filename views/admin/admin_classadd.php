<script type="text/javascript">
        $(document).ready(function () {
          $('#tabeldata').DataTable();
      });
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
              <h1>Kelas Sekolah</h1>
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
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group form-group-lg">
              <h3>Tambah kelas</h3>
              <?php 
              error_reporting(0);
                if (!$result[0]['ErrCode'] && !empty($result)) {
                  echo ("Kelas Telah Ditambahkan");
                }
                elseif ($result[0]['ErrCode']) {
                  echo ("Kelas sudah sampai Abjad Z dan tidak dapat ditambahkan");
                }
              ?>
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Kategori</label>
              <div class="col-sm-4">
                <select class="form-control" id="sel1" name="selcat">
                <?php if ($_SESSION['jenjang'] == 'SMA') 
                { ?>
                  <option value="IPA">IPA</option>
                  <option value="IPS">IPS</option>
                  <option value="wajib">Wajib</option>
                <?php
                }
                else 
                {
                ?>
                  <option value="wajib">Wajib</option>
                <?php
                }
                ?>
                </select>
              </div>
            </div>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Kelas</label>
                  <input class="btn btn-success" type="submit" id="btnSubmit" name="btnSubmit" value = "Simpan">
              <div class="col-sm-4">
                <select class="form-control" name="selclass">
                <?php if ($_SESSION['jenjang'] == 'SMA') 
                { ?>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                <?php
                }
                elseif ($_SESSION['jenjang'] == 'SMP') 
                {
                ?>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                <?php
                }
                else 
                {
                ?>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>                  
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                <?php
                }
                ?>
                </select>
              </div>
            </div>
          </form>
          <br>
          <hr style= "border-top: 5px solid rgba(0, 0, 0, 0.4);">
          <br>
          <div class="panel panel-default">
  
            <!-- Table -->
            <table id="tabeldata"  class="table table-hover table-bordered">
              <thead style="font-size: larger; font-weight:bold;">
                <th style="text-align: center;">Kode Kelas</th>
                <th style="text-align: center;">Deskripsi Kelas</th>
                <th style="text-align: center;">Tahun Ajaran</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Action</th>
              </thead>
              <tbody style="text-align:center;">
                <?php 
                  foreach ($listkelas as $row) {
                ?>
                  <tr>
                    <td><?php echo($row['idkelas']) ?></td>
                    <td><?php echo($row['deskripsi']) ?></td>
                    <td><?php echo($row['tahun_ajaran']) ?></td>
                    <?php
                      if ($row['stat'] ) {
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
                    <td style="max-width:600px;"><a class="btn btn-primary" href="?navito=admin_assignadd&id=<?php echo($row['idkelas']) ?>"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;Assign Mapel</a> 
                  <a class="btn btn-info" href="?navito=admin_classmemberdata&id=<?= $row['idkelas']?>"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Assign Anggota Kelas</a>
                  <a class="btn btn-warning" href="?navito=admin_classedit&id=<?= $row['idkelas'] ?>"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Edit Data</a></td>
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
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

    <!-- <td style="max-width:400px;"><a class="btn btn-primary" href="?navito=admin_studentadd"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Assign Mapel</a> 
                  <a class="btn btn-warning" href="?navito=admin_studentadd"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Assign Siswa</a>
                  <a class="btn btn-danger" href="?navito=admin_studentadd"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;Hapus Data</a></td> -->