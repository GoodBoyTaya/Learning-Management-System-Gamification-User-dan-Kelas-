<script>
    $(document).ready(function() {
        $('#example').DataTable({
            searching: false,
            paging: false,
            info: false
        });
    });

    $(document).ready(function() {
        $('#tabel2').DataTable({
            searching: false,
            paging: false,
            info: false
        });
    });

    $(document).ready(function() {
        $('#tabel3').DataTable({
            searching: false,
            paging: false,
            info: false
        });
    });
</script>

<style>
    h4{
        font-weight: bold;
    }
    h4.baris1 {
        margin-left: 370px;
        
    }
    .baris2{
        margin-left: 420px;
    }
    .baris3{
        margin-left: 410px;
    }
    .baris4{
        margin-left: 460px;;
    }
</style>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="thumbnail probootstrap-animate">
                    <div class="caption">
                        
                            <h4 class="baris1">Siswa-Siswi Dengan Nilai Tertinggi</h4>
                            <h4 class="baris2">SMA RK Bintang Timur</h4>
                            <h4 class="baris3">Tahun Ajaran 2021/2022</h4>
                            <h4 class="baris4">(Kelas XI-IPA)</h4>
                      

                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Akan datang</a></li>
                                <li role="presentation"><a href="#biologi" aria-controls="profile" role="tab" data-toggle="tab">Biologi</a></li>
                                <li role="presentation"><a href="#kimia" aria-controls="profile" role="tab" data-toggle="tab">Kimia</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- SETINGKAT -->
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <!-- Page Akan Datang 1  -->
                                    <div class="list-group akan-datang" id="pad1">

                                        <table id="example" class="display tbl-materi" style="width:100%">
                                            <thead class="thead-dark">
                                                <br><br>
                                                <div>
                                                    <h3 style="text-align: center;"></h3>
                                                </div>
                                                <tr>
                                                    <th>Peringkat</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>Adhitya Bhatara</td>
                                                    <td>99</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Edward Sutanto</td>
                                                    <td>97</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Tiffani Astadini</td>
                                                    <td>96</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Aldrich Sancho</td>
                                                    <td>95</td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>Edwin Desemsky</td>
                                                    <td>94</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>Rolando Manurung</td>
                                                    <td>93</td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td>Juan David</td>
                                                    <td>92</td>
                                                </tr>

                                                <tr>
                                                    <td>8</td>
                                                    <td>Lamhot Siborong-borong</td>
                                                    <td>91</td>
                                                </tr>

                                                <tr>
                                                    <td>9</td>
                                                    <td>Steven Peter</td>
                                                    <td>90</td>
                                                </tr>

                                                <tr>
                                                    <td>10</td>
                                                    <td>Lamhot Siborong-borong</td>
                                                    <td>89</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- tab 2 -->
                                <div role="tabpanel" class="tab-pane fade" id="biologi">
                                    <div class="list-group">
                                        <table id="tabel2" class="display tbl-materi" style="width:100%">
                                            <thead class="thead-dark">
                                                <br><br>
                                                <div>
                                                    <h3 style="text-align: center;"></h3>
                                                </div>
                                                <tr>
                                                    <th>Peringkat</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>Adhitya Bhatara</td>
                                                    <td>99</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Edward Sutanto</td>
                                                    <td>97</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Tiffani Astadini</td>
                                                    <td>96</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Aldrich Sancho</td>
                                                    <td>95</td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>Edwin Desemsky</td>
                                                    <td>94</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- tab 3 -->
                                <div role="tabpanel" class="tab-pane fade" id="kimia">
                                    <div class="list-group">
                                        <table id="tabel3" class="display tbl-materi" style="width:100%">
                                            <thead class="thead-dark">
                                                <br><br>
                                                <div>
                                                    <h3 style="text-align: center;"></h3>
                                                </div>
                                                <tr>
                                                    <th>Peringkat</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>Adhitya Bhatara</td>
                                                    <td>99</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Edward Sutanto</td>
                                                    <td>97</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Tiffani Astadini</td>
                                                    <td>96</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Aldrich Sancho</td>
                                                    <td>95</td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>Edwin Desemsky</td>
                                                    <td>94</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
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