<script type="text/javascript">
        $(document).ready(function () {
          $('#tabeldata').DataTable();
      });

      function popupgambar(gambar) {
        $("#imgPopUp")
            .attr('src', 'uploads/pic_sekolah/'+gambar)

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
              <h1>Tabel Data Sekolah</h1>
            </div>
          </div>
          <div class="row">  
            <div class="col-sm-3">
              <a href="?navito=superadminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a><br><br>
            </div>            
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">              
              <a class="btn btn-success" href="?navito=superadmin_schooladd"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp; Tambah Data</a>
            </div>
          </div>
          <br>     
          <div class="panel panel-default">
          
            <!-- Table -->
            <table id="tabeldata" class="table table-hover table-bordered" >
              <thead style="font-size: larger;">
                <th>ID Sekolah</th>
                <th>Nama Sekolah</th>
                <th>Alamat</th>
                <th>Jenjang</th>
                <th>Logo Sekolah</th>
                <th>status</th>
                <th style="text-align:center;">Action</th>
              </thead>
              <tbody>
                <?php
                  
                  foreach ($listsekolah as $row) {
                ?>
                  <tr>
                    <td style="max-width: 50px;"><?php echo $row['idsekolah'] ?></td>
                    <td style="font-weight:bolder;"><?php echo $row['namesekolah'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td style="font-weight:bolder;"><?php echo $row['jenjang'] ?></td>
                    <td><i style="cursor: pointer; max-width 100px;" class="icon-images btn-icon size-24" data-toggle="modal" data-target="#modalGambar" onclick="popupgambar('<?= $row['logo'] ?>')"> Klik Untuk Melihat</i>&nbsp;</td>
                    <?php
                      if ($row['stat']) {
                        ?>
                        <td style="font-weight:bolder;">Aktif</td>
                     <?php
                      }
                      else {
                        ?>
                        <td style="font-weight:bolder;">Tidak Aktif</td>
                        <?php
                      }
                      ?>
                    <td style="max-width: 150px;"><a class="btn btn-warning" href="?navito=superadmin_schooledit&id=<?php echo $row['idsekolah']?>"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Edit Data</a>                 </tr>
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
                <h4 class="modal-title" id="myModalLabel">Logo Sekolah</h4>
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