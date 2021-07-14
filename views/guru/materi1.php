<ol class="breadcrumb">
    <li><a href="?navito=beranda">Beranda</a></li>
    <li><a href="?navito=bank_soal">Bank Soal</a></li>
    <li class="active">Biologi</li>
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
                    
                    <th>Deskripsi</th>
                    <th>Aksi</th>

                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Biologi</td>
                    <td>Bab1-Ekosistem</td>
                   
                    <td>sistem ekosistem adalah </td>
                    
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-edit"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Lihat</a></li>
                                <li><a href="#">Non aktif</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fisika</td>
                    <td>Bab1-Tata Surya</td>
                   
                    <td>Planet yg tidak memiliki setelit yaitu...dan...</td>
                    
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
</section>