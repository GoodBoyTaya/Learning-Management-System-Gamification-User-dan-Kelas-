<style>
    .panel-jawab {
        padding-left: 10px;
        border: 1.5px solid;
    }

    .panel-benar {
        border-color: #03C04A;
        background-color: #d4ffb2;
    }

    .panel-jawab span {
        font-size: 16px;
    }

    .img-thumb {
        max-height: 200px;
    }

    .img-thumb:hover {
        cursor: zoom-in !important;
    }

    .img-soal {

        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    .img-soal:hover {
        cursor: zoom-out;
    }
</style>

<ol class="breadcrumb">
    <li><a href="?navito=beranda">Beranda</a></li>
    <li><a href="?navito=bank_soal">Bank Soal</a></li>
    <li><a href="?navito=bank_soal1">Biologi</a></li>
    <li class="active">Multiple Choice</li>
</ol>


<section class="probootstrap-section">
    <div class="container">
        <div class="m-b-20">
            <form class="form-inline">
                <a href="?navito=tambah_soal" class="btn btn-info m-r-5 m-b-5">Ubah Soal</a>
                <select class="form-control m-b-5">
                    <option>Aktif</option>
                    <option>Non-aktif</option>
                </select>
            </form>
            <div class="row">
                <div class="col-md-2"><strong>Pelajaran</strong></div>
                <div class="col-md-4">Biologi Kelas 7</div>
                <div class="col-md-2"><strong>Materi</strong></div>
                <div class="col-md-4">Ciri Makhluk Hidup</div>
            </div>
            <div class="row">
                <div class="col-md-2"><strong>Tipe Soal</strong></div>
                <div class="col-md-4">Multiple choice</div>
                <div class="col-md-2"><strong>Kesulitan</strong></div>
                <div class="col-md-4">Sedang</div>
            </div>
            <div class="row">
                <div class="col-md-2"><strong>Pembuat</strong></div>
                <div class="col-md-4">Sarah Sisilia</div>
                <div class="col-md-2"><strong>Tanggal dibuat</strong></div>
                <div class="col-md-4">1/1/2020</div>
            </div>
            <div class="row">
                <div class="col-md-2"><strong>Terakhir diupdate</strong></div>
                <div class="col-md-4">12/1/2020</div>
            </div>
        </div>
        <div class="col-md-12  probootstrap-animate" id="probootstrap-content">
            <h4>Ciri khas yang hanya dimiliki oleh mahluk hidup adalah</h4>
            <img src="img\img_sm_1.jpg" class="img-soal img-thumb" alt="Gambar Soal">

            <div class="form-jawaban">
                <div class="panel panel-jawab panel-benar">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" checked disabled>
                            <span>Berkembang biak</span>
                        </label>
                    </div>
                    <img src="img\img_sm_2.jpg" class="img-soal img-thumb" alt="Gambar Soal">
                </div>
                <div class="panel panel-jawab">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" disabled>
                            <span>Fotosintesis</span>
                        </label>
                    </div>
                    <img src="img\img_sm_2.jpg" class="img-soal img-thumb" alt="Gambar Soal">
                </div>
                <div class="panel panel-jawab">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" disabled>
                            <span>Berjalan</span>
                        </label>
                    </div>
                </div>

                <div class="panel panel-jawab panel-benar">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" checked disabled>
                            <span>Peka terhadap rangsang</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $("img").click(function() {
        $(this).toggleClass("img-thumb");
    });
</script>