<section class="probootstrap-section">
    <div class="container">

        <section class="probootstrap-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Jurusan</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="0"></option>
                                    <option value="1">IPA</option>
                                    <option value="2">IPS</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Kelas</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>XII-IPA 1</option>
                                    <option>XII-IPA 2</option>
                                    <option>XII-IPA 3</option>
                                    <option>XII-IPS 1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Nama Mahasiswa</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>Edward Sutanto</option>
                                    <option>Juan David</option>
                                    <option>Rolando Manurung</option>
                                    <option>Adhitya Bahatara</option>
                                    <option>Edwin Situmorang</option>              
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Kategori Badge</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>The Most Diligent Student</option>
                                    <option>The Most Active Student</option>
                                    <option>The Most Talented Student</option>
                                    <option>The Neatest Student</option>
                                    <option>The King of School Athelete</option>  
                                    <option>School Artist</option>              
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Badge Picture</label>
                                <input type="file" id="exampleInputFile" onchange="readURL(this);">
                                <img id="blah" src="#" alt="your image" />
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

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<script>
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>