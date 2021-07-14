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

<ol class="breadcrumb">
    <li><a href="#">Beranda</a></li>
    <li><a href="#">Bank Soal</a></li>
    <li class="active">Pilih Soal</li>
</ol>


<script>
    $(document).ready(function() {


    });
</script>

<section class="probootstrap-section">
    <div class="container">
        <!-- <button id="button">Row count</button> -->
        <div class="row m-b-10">
            <div class="col-md-6">
                <!-- <div class="flex-start"><strong>Soal terpilih:</strong><span id="countsoal"></span></div> -->
            </div>
            <div class="col-md-6 text-right"><button class="btn btn-primary">Pilih soal</button></div>
        </div>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Pelajaran</th>
                    <th>Kelas</th>
                    <th>Bab</th>
                    <th>Tipe</th>
                    <th>Level</th>
                    <th>Soal</th>
                    <th>Jawaban</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listSoal as $soal) {
                ?>
                    <tr data-id="<?php echo $soal['id']?>" tipe-soal=<?php echo $soal['tipe']?>>
                        <td><?php echo $soal['pelajaran'] ?></td>
                        <td><?php echo $soal['kelas'] ?></td>
                        <td><?php echo $soal['bab'] ?></td>
                        <td>
                            <?php
                            if ($soal['tipe'] == 1) {
                                echo 'Single choice';
                            } else if ($soal['tipe'] == 2) {
                                echo 'Multiple choice';
                            } else if ($soal['tipe'] == 3) {
                                echo 'True / False';
                            } else if ($soal['tipe'] == 4) {
                                echo 'Isian';
                            } else if ($soal['tipe'] == 5) {
                                echo 'Essai';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            switch ($soal['kesulitan']) {
                                case 1:
                                    echo 'Mudah';
                                    break;
                                case 2:
                                    echo 'Sedang';
                                    break;
                                case 3:
                                    echo 'Sulit';
                                    break;
                                default:
                                    echo '-';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($soal['jawaban_gambar'] != null) {
                                echo '<i class="icon-images btn-icon" style="font-size:24px;"></i>&nbsp';
                            }
                            echo $soal['pertanyaan']; ?></td>
                        </td>
                        <td>
                            <?php
                            if ($soal['jawaban_gambar'] != null) {
                                echo '<i class="icon-images btn-icon" style="font-size:24px;"></i>&nbsp';
                            }
                            echo $soal['jawaban']; ?>
                        </td>
                        <td><?php echo date('d/m/Y', strtotime($soal['tanggal'])) ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-edit"></i> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Ubah</a></li>
                                    <li><a href="#">Non aktif</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr data-id="id1" tipe-soal=4>
                    <td>Biologi</td>
                    <td>7</td>
                    <td>Ekosistem</td>
                    <td>Isian</td>
                    <td>Mudah</td>
                    <td>Dalam suatu area persawahan terdapat : 100 m2 tanah, lumpur, 1000 batang padi, 175 ekor belalang, 200 ekor ulat, 150 ekor burung pipit, 20 ekor burung hantu, 70 ekor tikus, 250 batang rumput, 12 ekor ular, 100 ekor katak, 1 ekor elang, air, udara, dan cahaya matahari.</td>
                    <td>Ayam</td>
                    <td>12/1/2020</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-edit"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr data-id="id2" tipe-soal=2>
                    <td>Biologi</td>
                    <td>7</td>
                    <td>Ciri Makhluk hidup</td>
                    <td>Multiple choice</td>
                    <td>Sedang</td>
                    <td>Ciri khas yang hanya dimiliki oleh mahluk hidup adalah</td>
                    <td>Berkembang biak, peka terhadap rangsang</td>
                    <td>10/5/2021</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-edit"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi pemilihan soal</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Nanti</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

</section>



<div class="cart-terpilih">

    <div id="cart-main">
        <i class="icon-enlarge2" style="display:none"></i>
        <i class="icon-minus"></i>
        &nbsp; Soal terpilih: <span id="countsoal">0</span>
        <div style="float:right"><button class="btn btn-info" id="lanjut-btn" data-toggle="modal" data-target="#myModal">>> Lanjut</button></div>
    </div>
    <div id="cart-detail">
        <span>Single choice:</span><span id="count-sc" style="float:right">0</span><br>
        <span>Multiple choice:</span><span id="count-mc" style="float:right">0</span><br>
        <span>True/false:</span><span id="count-tf" style="float:right">0</span><br>
        <span>Isian:</span><span id="count-isian" style="float:right">0</span><br>
        <span>Essai:</span><span id="count-essai" style="float:right">0</span>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#cart-main").click(function() {
            $("#cart-detail").toggle(speed = "slow");
            $(".icon-enlarge2").toggle();
            $(".icon-minus").toggle();
        });

        let sc = 0;
        let mc = 0;
        let tf = 0;
        let isian = 0;
        let essai = 0;
        let arraySoal = [];


        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function() {
            $(this).toggleClass('selected');
            $('#countsoal').html(table.rows('.selected').data().length);

            if ($(this).hasClass('selected')) {
                arraySoal.push($(this).attr('data-id'))
                switch ($(this).attr('tipe-soal')) {
                    case '1':
                        sc++;
                        $('#count-sc').html(sc);
                        break;
                    case '2':
                        mc++;
                        $('#count-mc').html(mc);
                        break;
                    case '3':
                        tf++;
                        $('#count-tf').html(tf);
                        break;
                    case '4':
                        isian++;
                        $('#count-isian').html(isian);
                        break;
                    case '5':
                        essai++;
                        $('#count-essai').html(essai);
                        break;
                }
            } else {
                let index = arraySoal.indexOf($(this).attr('data-id'));
                if (index !== -1) {
                    arraySoal.splice(index, 1);
                }
                switch ($(this).attr('tipe-soal')) {
                    case '1':
                        sc--;
                        $('#count-sc').html(sc);
                        break;
                    case '2':
                        mc--;
                        $('#count-mc').html(mc);
                        break;
                    case '3':
                        tf--;
                        $('#count-tf').html(tf);
                        break;
                    case '4':
                        isian--;
                        $('#count-isian').html(isian);
                        break;
                    case '5':
                        essai--;
                        $('#count-essai').html(essai);
                        break;
                }
            }


        });

        $('#button').click(function() {
            alert(table.rows('.selected').data().length + ' row(s) selected');
        });

        $("#lanjut-btn").click(function() {
            alert(arraySoal);
        });
    });
</script>