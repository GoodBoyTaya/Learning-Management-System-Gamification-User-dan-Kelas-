<section class="probootstrap-section probootstrap-section-colored" style="height:120px; padding:2em 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1>Buat Ujian</h1>
            </div>
        </div>
    </div>
</section>


<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Mata Pelajaran</label>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Mata Pelajaran
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Biologi</a></li>
                                            <li><a href="#">Fisika</a></li>
                                            <li><a href="#">Kimia</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Materi</label>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Materi
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">a</a></li>
                                            <li><a href="#">b</a></li>
                                            <li><a href="#">c</a></li>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal dan Jam Mulai</label>
                                </div>
                                <div>
                                    <form action="/action_page.php">
                                        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                                    </form>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal dan Jam Selesai</label>
                                </div>
                                <div>
                                    <form action="/action_page.php">
                                        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                                    </form>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="exampleInputPassword1">Banyak Soal PG</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>

                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Random Soal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="?navito=pilih_soal" class="btn btn-info">Pilih soal</a>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="exampleInputPassword1">Soal Terpilih</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" disabled placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Banyak Soal Single Choice</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Banyak Soal Isian</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Banyak Soal Esai</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>