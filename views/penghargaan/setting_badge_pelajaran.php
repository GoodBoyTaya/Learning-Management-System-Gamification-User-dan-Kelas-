<section class="probootstrap-section">
    <div class="container">

        <section class="probootstrap-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="">Badge Pelajaran</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Form Badge</label>
                                <select class="form-control" id="NamaPelajaran">
                                    <option></option>
                                    <option>Form Badge Pelajaran</option>
                                    <option>Form Badge Tugas</option>
                                    <option>Form Badge Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Mata Pelajaran</label>
                                <select class="form-control" id="NamaPelajaran">
                                    <option></option>
                                    <option>Biologi</option>
                                    <option>Matematika</option>
                                    <option>Fisika</option>
                                    <option>Kimia</option>
                                </select>
                            </div>

                            <!-- =========================================================== batas bagi tingkat ================================================== -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Setting Badge</label>
                                <div>
                                    <label for="exampleInputEmail1" style="margin-left: 350px;">Bronze</label>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Batas Nilai</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="50">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Badge</label>
                                            <input type="file" id="exampleInputFile" onchange="readURL(this);">
                                            <img id="blah" src="#" alt="your image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- =========================================================== batas bagi tingkat ================================================== -->
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1" style="margin-left: 350px;">Silver</label>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Batas Nilai</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="50">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Badge</label>
                                            <input type="file" id="exampleInputFile" onchange="readURL(this);">
                                            <img id="blah" src="#" alt="your image" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- =========================================================== batas bagi tingkat ================================================== -->
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1" style="margin-left: 350px;">Gold</label>
                                </div>

                                <div class="form-group">
                                    <div>

                                        <div class="form-group">
                                            <div class="form-group ">
                                                <label for="exampleInputEmail1">Batas Nilai</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="50">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Gambar Badge</label>
                                            <input type="file" id="exampleInputFile" onchange="readURL(this);">
                                            <img id="blah" src="#" alt="your image" />
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- ===================================================== section baru ================================================== -->
       

        <div class="clearfix visible-md-block"></div>


        <div class="clearfix visible-sm-block visible-xs-block"></div>
    </div>

    </div>
</section>



<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>