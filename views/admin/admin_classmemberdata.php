<script type="text/javascript">
        $(document).ready(function () {
          $('#tabeldata').DataTable();
      });


    function confirmationDelete(anchor){
        var conf = confirm('Apakah anda yakin ingin menghapus data ini?');
        if(conf)
            window.location=anchor.attr("href");
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
              <h1>Tabel Anggota <?= $selectedkelas[0]['deskripsi'] ?></h1>
            </div>
          </div>
          <div class="row">  
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a><br><br>
            </div> 
            <div class="col-sm-8">
              <a href="?navito=admin_classadd" class="btn btn-info">Kembali ke Tabel&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>           
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">              
              <a class="btn btn-success" href="?navito=admin_classmemberadd&idkelas=<?= $selectedkelas[0]['idkelas'] ?>"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp; Tambah Data</a>
            </div>
          </div>
          <br>     
          <div class="panel panel-default">
          
            <!-- Table -->
            <table id="tabeldata" class="table table-hover table-bordered" >
              <thead style="font-size: larger;">
                <th style="max-width: 100px;">ID Anggota</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th style="text-align:center;">Action</th>
              </thead>
              <tbody>
                <?php
                  
                  foreach ($listanggota as $row) {
                ?>
                  <tr>
                    <td ><?= $row['anggotaid']?></td>
                    <td><?= $row['fullname'] ?></td>
                    <?php
                    if ($row['jabatan']==1) {
                    ?>
                      <td>Wali Kelas</td>
                    <?php
                    }
                    else {
                    ?>
                      <td>Siswa</td>
                    <?php
                    }
                    ?>
                    <td style="max-width: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" onclick='confirmationDelete($(this));return false;' href="?navito=admin_classmemberdelete&id=<?php echo $row['anggotaid']?>"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;Hapus Data</a></td>
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