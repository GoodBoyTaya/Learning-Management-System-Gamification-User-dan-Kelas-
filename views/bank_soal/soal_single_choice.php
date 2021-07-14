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
</style>

<ol class="breadcrumb">
    <li><a href="?navito=beranda">Beranda</a></li>
    <li><a href="?navito=bank_soal">Bank Soal</a></li>
    <li><a href="?navito=bank_soal1">Biologi</a></li>
    <li class="active">Single Choice</li>
</ol>


<section class="probootstrap-section">
    <div class="container">
        <div class="m-b-20">
            <form class="form-inline">
                <a href="?navito=tambah_soal" class="btn btn-info m-r-5 m-b-5">Ubah Soal</a>
                <select class="form-control m-b-5" id="myModal"  data-toggle="modal" data-target=".bs-example-modal-sm">
                    <option>Aktif</option>
                    <option>Non-aktif</option>
                </select>
            </form>
            <div class="row">
                <div class="col-md-2"><strong>Pelajaran</strong></div>
                <div class="col-md-4">Biologi Kelas 7</div>
                <div class="col-md-2"><strong>Materi</strong></div>
                <div class="col-md-4">Sel</div>
            </div>
            <div class="row">
                <div class="col-md-2"><strong>Tipe Soal</strong></div>
                <div class="col-md-4">Singel choice</div>
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
            <h4>Nama lain inti sel adalah ...</h4>
            <div class="form-jawaban">
                <div class="panel panel-jawab panel-benar">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked disabled>
                            <span>Nukleus</span>
                        </label>
                    </div>
                </div>
                <div class="panel panel-jawab">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" disabled>
                            <span>Mitokondria</span>
                        </label>
                    </div>
                </div>
                <div class="panel panel-jawab">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option1" disabled>
                            <span>Retikulum Endoplasma</span>
                        </label>
                    </div>
                </div>
                <div class="panel panel-jawab">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" disabled>
                            <span>Flagel</span>
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
