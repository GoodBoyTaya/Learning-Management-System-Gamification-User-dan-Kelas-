<?php
  $kelas = $_GET['idkelas'];
?>

<style>
    .cart-terpilih {
        border-radius: 5px;
        z-index: 9;
        width: 300px;
        position: fixed;
        bottom: 23px;
        right: 10px;
        -webkit-box-shadow: 0px 0px 3px 1px #444444;
        box-shadow: 0px 0px 3px 1px #444444;

    }

    #cart-main {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        padding: 8px;
        background-color: blueviolet;
        color: white;
    }

    #cart-detail {
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: snow;
        padding: 8px;
    }
</style>


<script type="text/javascript">
      if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
// $(document).ready(function() {
//   $('#tabeldata').DataTable({
//       paging:false
//     });
// });
$(document).ready(function() {
  	
    $.fn.dataTable.ext.errMode = 'none';
        $("#sel1").change(function() {
            table = $('#tabeldata').DataTable({paging:false});
            table;
            var jabatan = $("#sel1").val();
            // alert(pelajaran);
            $.ajax({
                type: 'POST',
                url: "./dao/ajax/Anggota/get_anggota_by_role.php",
                data: {
                    sekolah: <?= $_SESSION['id_sekolah']?>,
                    jabatan: jabatan
                },
                cache: false,
                success: function(msg) {
                  table.destroy();
                  $("#isitabel").html(msg);
                  $('#tabeldata').DataTable({  
                      paging:false});

                }
            });
        });
    });




    $(document).ready(function() {
      $("#sel1").change(function() {
        wk = 0;
        $('#count-wk').html(wk);
        sw = 0;
        $('#count-sw').html(sw);
        IsiId = [];
        IsiNama =[];
      });

        $("#cart-main").click(function() {
            $("#cart-detail").toggle(speed = "slow");
            $(".icon-enlarge2").toggle();
            $(".icon-minus").toggle();
        });

        let wk = 0;
        let sw = 0;
        let IsiId = [];
        let IsiNama = [];


        $('#tabeldata tbody').on('click', 'tr', function() {
            $(this).toggleClass('selected');
            $('#countuser').html(table.rows('.selected').data().length);
            var role= $("#sel1").val();

            if ($(this).hasClass('selected')) {
                IsiId.push($(this).attr('iduser'))
                IsiNama.push($(this).attr('fulname'))
                switch ($(this).attr('sel-user')) {
                    case '2':
                        wk++;
                        $('#count-wk').html(wk);
                        break;
                    case '3':
                        sw++;
                        $('#count-sw').html(sw);
                        break;
                }
            } else {
                let index = IsiId.indexOf($(this).attr('iduser'));
                let index2 = IsiNama.indexOf($(this).attr('fulname'));
                if (index !== -1) {
                    IsiId.splice(index, 1);
                }
                if (index2 !== -1) {
                    IsiNama.splice(index, 1);
                }
                switch ($(this).attr('sel-user')) {
                    case '2':
                        wk--;
                        $('#count-wk').html(wk);
                        break;
                    case '3':
                        sw--;
                        $('#count-sw').html(sw);
                        break;
                }
            }
            $('#isipilihan').html('<li>'+IsiNama+'</li>');

            $("#btnSubmit").click(function() {
              if (IsiId != []) {
                let indeks = 0;
                for(var i = 0 ; i< IsiId.length;i++){
                   $.ajax({
                       type: 'POST',
                       url: "./dao/ajax/Anggota/setAnggota.php",
                       data: {
                           kelas: '<?= $kelas ?>',
                           user: IsiId[i],
                           role :role
                       },
                       cache: false,
                       success: function(msg) {
                         if (msg == '0') {
                           alert('Data '+ IsiNama[indeks].toString() + ' Sudah Ditambahkan Sebelumnya');
                           indeks+=1;
                         }
                       }
                   });
                 };
              }
              else{
                alert("Belum ada anggota yang dipilih");
              }
              indeks = 0;
              IsiId = [];
              IsiNama = [];
            });
        });

        
      });
      function CheckJabatan(anchor){
        var role= $("#sel1").val();
        if(role != null){
          window.location=anchor.attr("data-target");
        }
        else{
          alert("Belum ada Jabatan yang Dipilih");
          location.reload();
        }
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
            <div class="col-md-12 text-center section-heading probootstrap-animate" id="hiya">
              <h1>Mata Pelajaran Sekolah</h1>
            </div>
          </div>
          <div class="row">                        
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
            <div class="col-sm-8">
              <a href="?navito=admin_classmemberdata&id=<?= $kelas ?>" class="btn btn-info">Kembali ke Tabel&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"> </i></a><br/><br/> 
            </div>
          </div>
        </div>
      </section>   
      <section class="probootstrap-section probootstrap-animate">
        <div class="container">
          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal" >
            <div class="form-group form-group-lg">
              <label class="col-sm-2 control-label" for="formGroupInputLarge">Jabatan</label>
              <div class="col-sm-4">  
              <div id="hasil"></div>
                <select class="form-control" name="selectcat" id="sel1">
                  <option selected disabled>-- Pilih Jabatan --</option>
                  <option value="2">Guru</option>
                  <option value="3">Siswa</option>
                </select>
                  <br>
                <p>*) Memilih jabatan baru akan menghapus pilihan user pada jabatan yang lainnya</p>
              </div>
            </div>
            <br>
            <hr style= "border-top: 5px solid rgba(0, 0, 0, 0.4);">
            <br>
            <div class="panel panel-default">

              <!-- Table -->
              <table id="tabeldata" class="table table-hover table-bordered">
                <thead style="font-size: larger;cursor:default;">
                  <th style="text-align: center;">Id User</th>
                  <th style="text-align: center;">Nama</th>
                </thead>
                <tbody id="isitabel" style="cursor:pointer;font-weight:bold;">

                </tbody>
              </table>
            </div>
        </div>
      
      </section>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Konfirmasi pemilihan soal</h4>
                  </div>
                  <div class="modal-body">
                    <p>Anggota Yang Dipilih</p>
                    <ul  id="isipilihan">

                    </ul>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Nanti</button>
                      <input class="btn btn-success" type="submit" id="btnSubmit" name="btnSubmit" value = "Simpan">
                    </form> 
                  </div>
              </div>
          </div>
        </div>


      <div class="cart-terpilih">
          <div id="cart-main">
              <i class="icon-enlarge2" style="display:none"></i>
              <i class="icon-minus"></i>
          <div style="float:right"><button class="btn btn-info"  onclick='CheckJabatan($(this));return false;' id="lanjut-btn" data-toggle="modal" data-target="#myModal">>> Lanjut</button></div>
              &nbsp; Jumlah Anggota Kelas : <?= $count[0]['hitung'] ?>
          </div>
          <div id="cart-detail">
              <span>Guru:</span><span id="count-wk" style="float:right">0</span><br>
              <span>Murid:</span><span id="count-sw" style="float:right">0</span><br>
          </div>
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