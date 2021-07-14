<script type="text/javascript">
        $(document).ready(function () {
          $('#tabeldata').DataTable({
            "paging" : false
          });
          
      });
      function confirmationDelete(anchor){
        var conf = confirm('Apakah anda yakin ingin menghapus data ini? (Akan Menghapus semua jadwal dan Mata Pelajaran dalam Kelas ini)');
        if(conf)
            window.location=anchor.attr("href");
      }

      $(document).ready(function() {
        $("#sel1").change(function() {
            var pelajaran = $("#sel1").val();
            // alert(pelajaran);
            $.ajax({
                type: 'POST',
                url: "./dao/ajax/pilih_guru/get_guru.php",
                data: {
                    pelajaran: pelajaran
                },
                cache: false,
                success: function(msg) {
                    $("#sel2").html(msg);
                }
            });
        });
    });
    $(document).ready(function() {
            $('.selectassign').select2();
        });

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
              <h1>Assign Mapel <?= $selectedkelas[0]['deskripsi'] ?></h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
            <div class="col-sm-8">
              <a href="?navito=admin_classadd" class="btn btn-info">Kembali ke Tabel Kelas&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group form-group-lg">
              <h3>Tambah Jadwal</h3>
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Mata Pelajaran</label>
              <div class="col-sm-4">
                <select class="selectassign form-control" id="sel1" name="selcourse" required>
                <option disabled selected value="">-- Pilih Mapel --</option>
                  <?php 
                    foreach ($listmapel as $select) {
                  ?>
                    <option value="<?php echo ($select['id'])?>" > <?php echo ($select['namamapel']. "  -  ") ?> <?php echo (strtoupper($select['peminatan'])) ?>  </option>
                  <?php
                    }
                  ?>
                </select>
              </div>
              
            </div>
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Guru</label>
              <div class="col-sm-4">
                <select class="form-control selectassign" id="sel2" name="selteach" required>

                </select>
              </div>
            <input class="btn btn-success" type="submit" id="btnSubmit" name="btnSubmit" value = "Simpan">
              
            </div>
          </form>
          <br>
          <hr style= "border-top: 5px solid rgba(0, 0, 0, 0.4);">
          <br>
          <div class="panel panel-default">
  
            <!-- Table -->
            <table id="tabeldata"  class="table table-hover table-bordered">
              <thead style="font-size: larger; font-weight:bold;">
                <th style="text-align: center;">Id Assign</th>
                <th style="text-align: center;">Nama Mapel</th>
                <th style="text-align: center;">Nama Guru</th>
                <th style="text-align: center;">Hari Mengajar</th>
                <th style="text-align: center;">Jam Mulai</th>
                <th style="text-align: center;">Jam Selesai</th>
                <th style="text-align: center;">Action</th>
              </thead>
              <tbody style="text-align:center;">
                <?php 
                  foreach ($listassign as $row) {
                ?>
                  <tr>
                    <td><?php echo($row['idassign']) ?></td>
                    <td style="font-weight:bold;"><?php echo($row['namamapel']) ?></td>
                    <td><?php echo($row['namaguru']) ?></td>
                    <td style="max-width:100px;"><?php echo($row['hari']) ?></td>
                    <td><?php echo($row['jam_mulai']) ?></td>
                    <td><?php echo($row['jam_selesai']) ?></td>
                    <?php
                      if (!$row['idjadwal']) {
                    ?>
                        <td style="max-width:900px;"><a class="btn btn-primary" href="?navito=admin_scheduleadd&id=<?php echo($row['idmengajar']) ?>"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Tambah Jadwal</a>
                    <?php
                      }
                      else {
                    ?>
                    <td style="max-width:900px;"><a class="btn btn-warning" href="?navito=admin_scheduleedit&id=<?php echo($row['idjadwal']) ?>"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Edit Jadwal</a> 
                    <?php
                      }
                    ?>
                    <br><br>
                    <a class="btn btn-danger" onclick='confirmationDelete($(this));return false;' href="?navito=admin_selectedassigndelete&idassign=<?php echo($row['idassign']) ?>&idmengajar=<?php echo($row['idmengajar']) ?>&idjadwal=<?= $row['idjadwal'] ?>"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;Hapus Jadwal</a> 
                    </td>

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