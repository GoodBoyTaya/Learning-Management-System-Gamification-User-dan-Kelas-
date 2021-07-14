<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    $(document).ready(function() {
        $('#TabelTugas').DataTable({
            searching: false,
            paging: false,
            info: false
        });
    });
</script>

<style>
    .tbl-materi a {
        text-decoration: underline;
    }
</style>

<section class="probootstrap-section probootstrap-section-colored" style="height:140px; padding:2em 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left section-heading probootstrap-animate no-margin">
                <h1>Biologi</h1>
            </div>
            <div class="col-md-6 text-right section-heading probootstrap-animate no-margin">
                <p style="color:white">Ibu Sarah | Kamis 10.30-12.00</p>
                <ul class="probootstrap-footer-social list-link">
                    <li><a href="//meet.google.com" target="_blank"><i class="icon-video-camera"></i></a></li>
                    <li><a href="//web.google.com" target="_blank"><i class="icon-telegram"></i></a></li>
                    <li><a href="//youtube.com" target="_blank"><i class="icon-youtube"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
    <ol class="breadcrumb">
        <li><a href="?navito=home">Beranda</a></li>
        <li><a href="?navito=kelas">Kelas</a></li>
        <li class="active">Biologi</li>
    </ol>
</section>

<section class="probootstrap-section">

    <div class="container">
        <div class="row">
            <div class="col-md-3 m-t-50">
                <div class="panel panel-primary">
                    <table id="TabelMateri" class="table table-striped" class="display tbl-materi" style="width:100%">
                        <thead>
                            <tr>
                                <th>Materi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">Sistem Pencernaan</a></td>
                            </tr>
                            <tr>
                                <td><a href="?">Sistem Pencernaan</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Sistem Pencernaan</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Sistem Pencernaan</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="panel panel-primary">
                    <table id="TabelTugas" class="table table-striped" class="display tbl-materi" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tugas</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Evolusi </td>
                                <td> 75</td>

                            </tr>

                            <tr>
                                <td>Anatomi Tumbuhan </td>
                                <td>99</td>

                            </tr>

                            <tr>
                                <td>Metabolisme Tumbuhan </td>
                                <td>25</td>

                            </tr>

                            <tr>
                                <td>Hormon Tumbuhan </td>
                                <td>50</td>

                            </tr>

                        </tbody>
                    </table>
                </div>


                <div class="panel panel-primary">
                    <table id="TabelTugas" class="table table-striped" class="display tbl-materi" style="width:100%">
                        <thead>
                            <tr>
                                <th>Ujian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ujian pert 1</td>
                            </tr>
                            <tr>
                                <td>ujian pert 2</td>
                            </tr>
                            <tr>
                                <td>ujian pert 3</td>
                            </tr>
                            <tr>
                                <td>ujian pert 4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-9 m-t-50">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Link meet</label>
                        <div class="col-sm-10">
                            <input type="text " class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Link Telegram</label>
                        <div class="col-sm-10">
                            <input type="text " class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Link Youtube</label>
                        <div class="col-sm-10">
                            <input type="text " class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sistem pencernaan</h3>
                    </div>
                    <div class="panel-body">
                        <div class="space-between">
                            <h4 class="m-b-1">Deskripsi </h4><i class="icon-edit btn"></i>
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="10" class="form-control" id="message" name="message">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis error aut accusantium consectetur magni autem eos rerum fugit beatae, enim neque nam eum. Eos ipsa aperiam nobis quis, consequatur neque.</textarea>
                        </div>
                        <iframe src="https://docs.google.com/presentation/d/13OBhdvTXZqezLCm4NfcAk293lYatOb242g0x_OX9wSU/preview" style="width: 540px; height: 300px;margin-left: 15%;" frameborder="0"></iframe>
                        <div class="row">
                            <div class="col-md-6 space-between">
                                <div class="flex-start">
                                    <img width="20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg"><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">Modul 1 Sistem Pencernaan</a>
                                </div>
                                <i class="icon-cancel-circle btn"></i>
                            </div>
                            <div class="col-md-6 space-between">
                                <div class="flex-start">
                                    <img width="20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg"><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">Modul 1 Sistem Pencernaan</a>
                                </div>
                                <i class="icon-cancel-circle btn"></i>

                            </div>
                            <div class="col-md-6 space-between">
                                <div class="flex-start">
                                    <img width="20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg"><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">Modul 1 Sistem Pencernaan</a>
                                </div>
                                <i class="icon-cancel-circle btn"></i>
                            </div>
                            <div class="col-md-6 space-between">
                                <div class="flex-start">
                                    <img width="20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg"><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">Modul 1 Sistem Pencernaan</a>
                                </div>

                                <i class="icon-cancel-circle btn"></i>

                            </div>
                        </div>
                        <div class="panel panel-default m-t-20">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tugas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="space-between"><a href="">Evolusi</a>12-3-2021l</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ujian</h3>
                            </div>
                            <div class="panel-body">
                                <div class="space-between"><a href="">lambung</a>12-3-2021l</div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" class="btn btn-danger btn-lg m-t-40 m-r-10" id="submit" name="submit" value="Batal">
                            <input type="submit" class="btn btn-primary btn-lg m-t-40" id="submit" name="submit" value="Simpan materi">
                        </div>
                    </div>
                </div>


            </div>

        </div>

</section>