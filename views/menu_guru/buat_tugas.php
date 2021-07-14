<section class="probootstrap-section probootstrap-section-colored" style="height:120px; padding:2em 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1>Buat Tugas</h1>
            </div>
        </div>
    </div>
</section>



<section class="probootstrap-section">
    <div class="container">

        <section class="probootstrap-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
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
                                <label for="exampleInputPassword1">Keterangan Soal</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File Soal</label>
                                <input type="file" id="exampleInputFile">
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>



        </section>
        <div class="clearfix visible-md-block"></div>


        <div class="clearfix visible-sm-block visible-xs-block"></div>


    </div>
    </div>
</section>