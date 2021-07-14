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
              <h1>Profil</h1>
            </div>
            <div class="col-sm-3">
              <a href="?navito=adminlanding" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i>&nbsp;&nbsp;&nbsp; Kembali ke Halaman Awal</a>
            </div>
          </div>
        </div>
      </section>

      
      
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-4">
              <div class="thumbnail">
                <br/>
                <img src="uploads/pic_user/<?= $adminprofile[0]['pic']; ?>" class="img-circle" alt="..." style="max-width:300px;max-height:300px;position:relative;">
              </div>
            </div>
            <div class="col-sm-6 col-md-8">
              <div class="thumbnail">
                <table style = "border-collapse: separate; border-spacing: 10px; font-size: large;">
                  <tbody>
                    <tr>
                      <td></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><h3><u><?= $adminprofile[0]['namauser'] ?></u></h3></td>
                    </tr>
                    <tr>
                      <td><b>NIGN</b></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><?= $adminprofile[0]['nomorinduk'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Alamat</b></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><?= $adminprofile[0]['alamat']?></td>    
                    </tr>
                    <tr>
                      <td><b>No Handphone</b></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><?= $adminprofile[0]['nohp']?></td>    
                    </tr>
                    <tr>
                      <td><b>Email</b></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><?= $adminprofile[0]['email']?></td>    
                    </tr>
                    <tr>
                      <td><b>Asal Sekolah</b></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><?= $adminprofile[0]['namasekolah']?></td>    
                    </tr>
                    <tr>
                      <td><br/></td>
                      <td><br/></td>
                    </tr>
                    <tr>
                      <td><br/></td>
                      <td><br/></td>
                    </tr>
                    <tr>
                        <td><a href="?navito=adminprofileedit&id=<?= $adminprofile[0]['id']?>" class="btn btn-info" role="button"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Ubah Data Profil</a></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td></td>    
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>


      </section>
    </div>
