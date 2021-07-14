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
                                <td>Evolusi <img width=20 height=20 src="https://lh3.googleusercontent.com/proxy/khT_hweHO2RK3MeF6A6GUmEnSvcGfggLHO4vzguMwxui5djq-baSCkCIEhFskFXJqPkaZQHICSFSLVZHfrYNWIjQezjkPsyHgZi4zkQuYHQ1bKkotVVwk3fldoSdjWOdB1TvzxPobNOEalk"> </td>
                                <td> 75</td>

                            </tr>

                            <tr>
                                <td>Anatomi Tumbuhan <img width=20 height=20 src="https://www.freepnglogos.com/uploads/medal-png/gold-medal-28.png"> </td>
                                <td>99</td>

                            </tr>

                            <tr>
                                <td>Metabolisme Tumbuhan </td>
                                <td>25</td>

                            </tr>

                            <tr>
                                <td>Hormon Tumbuhan <img width=20 height=20 src="https://img1.pnghut.com/21/16/20/cTF15Ea18m/trophy-prize-tableware-medal-gold.jpg"> </td>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sistem pencernaan</h3>
                    </div>
                    <div class="panel-body">
                        <h4 class="m-b-1">Deskrpdi</h4>
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis error aut accusantium consectetur magni autem eos rerum fugit beatae, enim neque nam eum. Eos ipsa aperiam nobis quis, consequatur neque.</h5>
                        <iframe src="https://docs.google.com/presentation/d/13OBhdvTXZqezLCm4NfcAk293lYatOb242g0x_OX9wSU/preview" style="width: 540px; height: 300px;margin-left: 15%;" frameborder="0"></iframe>
                        <div class="row">
                            <div class="col-md-6 flex-start">
                                <img width="20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg"><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">lorem</a>

                            </div>
                            <div class="col-md-6 flex-start">
                                <img width=" 20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg"><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">ipsum</a>

                            </div>
                            <div class="col-md-6 flex-start">
                                <img width=" 20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" /><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">fileasdf</a>
                            </div>
                            <div class="col-md-6 flex-start">
                                <img width=" 20px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" /><a href="https://docs.google.com/document/d/1uCYQcThXyTpExpPVIQCUjCWqNNG0fvNpXcGL6i-OfKk/edit">fileasdf</a>
                            </div>

                    </div>
                        <div class="panel panel-default m-t-20">
                            <div class="panel-heading">
                                <h3 class="panel-title">tugas</h3>
                            </div>
                            <div class="panel-body">

                                <div class="space-between"><a href="">Evolusi</a>12-3-2021l</div>


                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">ujian</h3>
                            </div>
                            <div class="panel-body">
                                <div class="space-between"><a href="">lambung</a>12-3-2021l</div>
                            </div>
                        </div>
                </div>
            </div>


        </div>

    </div>

</section>