<script>
  $(document).ready(function() {
    $('#example').DataTable({
      searching: false,
      paging: false,
      info: false
    });
  });
</script>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail probootstrap-animate">
          <div class="caption">
            <h4>Pengingat</h4>
            <div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Akan datang</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Telat</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                  <!-- Page Akan Datang 1  -->
                  <div class="list-group akan-datang" id="pad1">
                    <button type="button" class="list-group-item list-group-item-danger">
                      <div class="space-between">
                        <div>Tugas Mat</div>
                        <div>Hari ini</div>
                      </div>
                      <small>Latihan persamaan kuadrat</small>
                    </button>
                    <a href="#" class="list-group-item list-group-item-warning">
                      <div class="space-between">
                        <div>UH Biologi</div>
                        <div>Besok</div>
                      </div>
                      <small>Bab 1 Sistem Pencernaan</small>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="space-between">
                        <div>UH Fisika</div>
                        <div>17 Maret</div>
                      </div>
                      <small>Bab 1 Gaya</small>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="space-between">
                        <div>Tugas PKn</div>
                        <div>18 Maret</div>
                      </div>
                      <small>Mencari kasus pelanggaran HAM</small>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="space-between">
                        <div>UH Geografi</div>
                        <div>18 Maret</div>
                      </div>
                      <small>Bab 1 Batu</small>
                    </a>
                  </div>
                  <!-- Page Akan Datang 2  -->
                  <div class="list-group akan-datang" id="pad2" style="display:none">
                    <button type="button" class="list-group-item">
                      <div class="space-between">
                        <div>Tugas B. Inggris</div>
                        <div>19 Maret</div>
                      </div>
                      <small>Simple Past Exercise</small>
                    </button>
                    <a href="#" class="list-group-item">
                      <div class="space-between">
                        <div>UH Kimia</div>
                        <div>20 Maret</div>
                      </div>
                      <small>Bab 1 Unsur</small>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="space-between">
                        <div>Tugas Olahraga</div>
                        <div>20 Maret</div>
                      </div>
                      <small>Membuat video senam</small>
                    </a>
                  </div>
                  <nav aria-label="Page navigation" class="text-center">
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li><a href="#pad1">1</a></li>
                      <li><a href="#pad2">2</a></li>
                      <li><a href="#pad3">3</a></li>
                      <li><a href="#pad4">4</a></li>
                      <li><a href="#pad5">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                  <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-danger">
                      <div class="space-between">
                        <div>Tugas Mat</div>
                        <div>10 Maret 2021</div>
                      </div>
                      <small>Latihan persamaan lingkaran</small>
                    </button>
                    <a href="#" class="list-group-item disabled">
                      <div class="space-between">
                        <div>UH Biologi</div>
                        <div>12 Maret 2021</div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-danger">
                      <div class="space-between">
                        <div>Tugas Fisika</div>
                        <div>12 Maret 2021</div>
                      </div>
                    </a>
                    <nav aria-label="Page navigation">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li><a href="#1">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="thumbnail">
          <div class="caption probootstrap-animate">
            <h4>Jadwal Hari ini</h4>
            <div class="list-group">
              <button type="button" class="list-group-item">
                <div class="space-between">
                  <div>Matematika</div>
                  <div>07.00-09.00</div>
                </div>
              </button>
              <a href="#" class="list-group-item list-group-item-info">
                <div class="space-between">
                  <div>Biologi</div>
                  <div>10.00-12.00</div>
                </div>
              </a>
              <button type="button" class="list-group-item">
                <div class="space-between">
                  <div>PKn</div>
                  <div>12.00-13.00</div>
                </div>
              </button>
              <button type="button" class="list-group-item">
                <div class="space-between">
                  <div>Olahraga</div>
                  <div>13.00-14.00</div>
                </div>
              </button>
              <button type="button" class="list-group-item">
                <div class="space-between">
                  <div>Seni Rupa</div>
                  <div>14.00-15.00</div>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-8">
        <div class="panel panel-primary probootstrap-animate">
          <div class="panel-heading" style="font-size:22px">Berita</div>
          <ul class="list-group">
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" width=128px height=128px src="https://cdn-image.hipwee.com/wp-content/uploads/2019/11/hipwee-12829-360x203.jpg" alt="gambar">
                  </a>
                </div>
                <div class="media-body">
                  <a href="?navito=berita_detail" class="media-heading">Pernah Nggak Sih Kamu Merasa Kalau Sekolah Itu Menyiksa? Mungkin Ini Alasannya…</a>
                  <footer>12 Februari 2021 | Budi Gunung</footer>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" width=128px height=128px src="https://cdn-image.hipwee.com/wp-content/uploads/2019/11/hipwee-12829-360x203.jpg" alt="gambar">
                  </a>
                </div>
                <div class="media-body">
                  <a href="?navito=berita_detail" class="media-heading">Dear Mahasiswa, Sebelum Berpikir Kamu Salah Jurusan, 5 Hal Ini Patut Kamu Pertanyakan</a>
                  <footer>12 Februari 2021 | Budi Gunung</footer>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" width=128px height=128px src="https://cdn-image.hipwee.com/wp-content/uploads/2019/11/hipwee-12829-360x203.jpg" alt="gambar">
                  </a>
                </div>
                <div class="media-body">
                  <a href=# class="media-heading">Dear Mahasiswa, Sebelum Berpikir Kamu Salah Jurusan, 5 Hal Ini Patut Kamu Pertanyakan</a>
                  <footer>12 Februari 2021 | Budi Gunung</footer>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" width=128px height=128px src="https://cdn-image.hipwee.com/wp-content/uploads/2019/11/hipwee-12829-360x203.jpg" alt="gambar">
                  </a>
                </div>
                <div class="media-body">
                  <a href=# class="media-heading">Dear Mahasiswa, Sebelum Berpikir Kamu Salah Jurusan, 5 Hal Ini Patut Kamu Pertanyakan</a>
                  <footer>12 Februari 2021 | Budi Gunung</footer>
                </div>
              </div>
            </li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // untuk pagination
  $(window).bind('hashchange', function() {
    //code
    $('.akan-datang').hide();
    $(location.hash).show();
  });
</script>