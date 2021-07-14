<script type="text/javascript">
        $(document).ready(function () {
          $('#tabeldata').DataTable();
      });

      function popupgambar(gambar) {
        $("#imgPopUp")
            .attr('src', 'uploads/pic_user/'+gambar)

      } 
    function confirmationDelete(anchor){
        var conf = confirm('Apakah anda yakin ingin menghapus data ini?');
        if(conf)
            window.location=anchor.attr("href");
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
              <h1>Tabel Data Admin</h1>
            </div>
          </div>
          <div class="row">  
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a><br><br>
            </div>            
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">              
              <a class="btn btn-success" href="?navito=superadmin_adminadd"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp; Tambah Data</a>
            </div>
          </div>
          <br>     
          <div class="panel panel-default">
          
            <!-- Table -->
            <table id="tabeldata" class="table table-hover table-bordered" >
              <thead style="font-size: larger;">
                <th>No. ID</th>
                <th>Nama Admin</th>
                <th>Nama Sekolah</th>
                <th>Foto Profil</th>
                <th style="text-align:center;">Action</th>
              </thead>
              <tbody>
                <?php
                  
                  foreach ($listadmin as $row) {
                ?>
                  <tr>
                    <td style="max-width: 50px;"><?php echo $row['id'] ?></td>
                    <td><?php echo $row['namauser'] ?></td>
                    <td><?php echo $row['namasekolah'] ?></td>
                    <td><i style="cursor: pointer; max-width 100px;" class="icon-images btn-icon size-24" data-toggle="modal" data-target="#modalGambar" onclick="popupgambar('<?= $row['pic'] ?>')"> Klik Untuk Melihat</i>&nbsp;</td>
                    <td style="max-width: 150px;"><a class="btn btn-warning" href="?navito=superadmin_adminedit&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Edit Data</a><br><br>
                    <a class="btn btn-danger" onclick='confirmationDelete($(this));return false;' href="?navito=superadmin_admindelete&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;Hapus Data</a></td>
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
                <h4 class="modal-title" id="myModalLabel">Gambar Admin</h4>
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