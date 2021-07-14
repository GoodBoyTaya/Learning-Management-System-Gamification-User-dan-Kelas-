<ol class="breadcrumb">
    <li><a href="?navito=beranda">Beranda</a></li>
    <li><a href="?navito=bank_soal">Bank Soal</a></li>
    <li><a href="?navito=bank_soal1">Biologi</a></li>
    <li class="active">Semua Kelas</li>
</ol>


<script>
    // $(document).ready(function() {
    //     $('#example').DataTable({
    //         columnDefs: [{
    //             targets: [0],
    //             orderData: [0, 1]
    //         }, {
    //             targets: [1],
    //             orderData: [1, 0]
    //         }, {
    //             targets: [4],
    //             orderData: [4, 0]
    //         }]
    //     });
    // });

    // $(document).ready(function() {
    //     // Setup - add a text input to each footer cell
    //     $('#example tfoot th').each(function() {
    //         var title = $(this).text();
    //         $(this).html('<input type="text" placeholder="Search ' + title + '" style="width:' + title.length + 'ch;" />');
    //     });

    //     // DataTable
    //     var table = $('#example').DataTable({
    //         initComplete: function() {
    //             // Apply the search
    //             this.api().columns().every(function() {
    //                 var that = this;

    //                 $('input', this.footer()).on('keyup change clear', function() {
    //                     if (that.search() !== this.value) {
    //                         that
    //                             .search(this.value)
    //                             .draw();
    //                     }
    //                 });
    //             });
    //         }
    //     });
    // });

    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>





<section class="probootstrap-section">
    <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Materi</th>
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
                <tr>
                    <td>Biologi 7</td>
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
                                <li><a href="?navito=soal_isian">Lihat</a></li>
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fisika 7</td>
                    <td>Tata Surya</td>
                    <td>Single choice</td>
                    <td>Sedang</td>
                    <td>Planet yg tidak memiliki setelit yaitu...dan...</td>
                    <td>Jupiter, Neptunus</td>
                    <td>10/5/2021</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-edit"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="?navito=soal_single_choice">Lihat</a></li>
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Biologi 7</td>
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
                                <li><a href="?navito=soal_multiple_choice">Lihat</a></li>
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Biologi 7</td>
                    <td>Sel</td>
                    <td>Single choice</td>
                    <td>Sedang</td>
                    <td>Nama lain inti sel</td>
                    <td>Nukleus</td>
                    <td>10/5/2021</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-edit"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="?navito=soal_single_choice">Lihat</a></li>
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Biologi 7</td>
                    <td>Sel</td>
                    <td>True/False</td>
                    <td>Sedang</td>
                    <td>Mitokondria adalah sel penghasil ATP</td>
                    <td>True</td>
                    <td>10/5/2021</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-edit"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="?navito=soal_true_false">Lihat</a></li>
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Biologi 7</td>
                    <td>Tumbuhan</td>
                    <td>Essai</td>
                    <td>Sedang</td>
                    <td>Jelaskan proses fotositnetis</td>
                    <td>Fotosintesis merupakan proses reaksi kimia yang terjadi pada tumbuhan. Proses ini mengubah sinar matahari menjadi makanan atau
                        energi bagi tumbuhan. Tumbuhan hijau membutuhkan sinar matahari untuk dapat melakukan proses ini,
                        sehingga kebutuhan nutrisinya terpenuhi. Tumbuhan hijau dikategorikan sebagai organisme autotrof, yakni organisme yang dapat membuat makanannya sendiri. </td>
                    <td>10/5/2021</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-edit"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="?navito=soal_essai">Lihat</a></li>
                                <li><a href="#">Ubah</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section>