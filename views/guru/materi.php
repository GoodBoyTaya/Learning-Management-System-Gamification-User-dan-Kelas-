<ol class="breadcrumb">
    <li><a href="?navito=beranda">Beranda</a></li>
    <li class="active">Bank Soal</li>
</ol>



<script>
    $(document).ready(function() {
        $('#example').DataTable({
            columnDefs: [{
                targets: [0],
                orderData: [0, 1]
            }, {
                targets: [1],
                orderData: [1, 0]
            }, {
                targets: [4],
                orderData: [4, 0]
            }]
        });
    });
</script>


<section class="probootstrap-section">
    <div class="container">
        <div class="text-right m-b-20"><a href="?navito=tambah_soal" class="btn btn-info">+ Tambah Soal</a></div>
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Daftar Pelajaran</div>
            <!-- List group -->
            <div class="list-group">
                <a href="?navito=bank_soal1" class="list-group-item probootstrap-animate">
                    <div class="space-between">
                        <div class="flex-start">
                            <div class="image"><img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/folder-blue-512.png" width="48" alt="Free Bootstrap Template by uicookies.com"></div>
                            <div>
                                <h4 class="list-group-item-heading">Biologi</h4>
                                <p class="list-group-item-text">Banyak materi: 101</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item probootstrap-animate">
                    <div class="space-between">
                        <div class="flex-start">
                            <div class="image"><img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/folder-blue-512.png" width="48" alt="Free Bootstrap Template by uicookies.com"></div>
                            <div>
                                <h4 class="list-group-item-heading">Fisika</h4>
                                <p class="list-group-item-text">Banyak materi: 101</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>