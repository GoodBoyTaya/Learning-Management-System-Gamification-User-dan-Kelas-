<!-- <script src='https://cdn.tiny.cloud/1/q0pkrcfnzrz3svjvv9tgefsaovt1rhxwa25jgxp9l80vqt68/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
  <script>
    tinymce.init({
      selector: '#message'
    });
  </script> -->

<ol class="breadcrumb">
    <li><a href="?navito=beranda">Beranda</a></li>
    <li><a href="?navito=bank_soal">Bank Soal</a></li>
    <li class="active">Tambah Soal</li>
</ol>


<section class="probootstrap-section">
    <div class="container">
        <div class="col-md-8 col-md-push-1  probootstrap-animate" id="probootstrap-content">
            <h2>Form Soal</h2>
            <form action="#" method="post" enctype="multipart/form-data" class="probootstrap-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pelajaran">Pelajaran</label>
                            <select id="pelajaran" class="form-control" name="selectPelajaran" required>
                                <option disabled selected value="">-- Pilih Pelajaran --</option>
                                <option>Biologi</option>
                                <option>Fisika</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select id="kelas" class="form-control" name="selectKelas" required>
                                <option disabled selected value="">-- Pilih Kelas --</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="materi">Materi</label>
                    <select id="materi" class="form-control" name="selectMateri" required>
                        <option disabled selected value="">-- Pilih Materi --</option>
                        <option>Bab 1 - Sistem Pencernaan</option>
                        <option>Bab 2 - Sistem Pernafasan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipesoal">Tipe Soal</label>
                    <select id="tipesoal" class="form-control" name="selectTipe" required>
                        <option disabled selected value="">-- Pilih Tipe --</option>
                        <option value=1>Single choice</option>
                        <option value=2>Multiple choice</option>
                        <option value=3>True or false</option>
                        <option value=4>Isian</option>
                        <option value=5>Essai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kesulitan">Tingkat Kesulitan</label>
                    <select id="kesulitan" class="form-control" name="selectKesulitan" required>
                        <option disabled selected value="">-- Pilih Kesulitan --</option>
                        <!-- <option>Sangat Mudah</option> -->
                        <option value=1>Mudah</option>
                        <option value=2>Sedang</option>
                        <option value=3>Sulit</option>
                        <!-- <option>Sangat sulit</option> -->
                    </select>
                </div>
                <h4>Pertanyaan</h4>
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <textarea cols="30" rows="10" class="form-control" id="pertanyaan" name="txtPertanyaan" required></textarea>
                    <div class="form-group">
                        <label for="picPertanyaan">Pilih gambar pertanyaan (opsional)</label>
                        <img src="" id="picPertanyaan" class="uploaded-pic">
                        <input type="file" name="picPertanyaan" onchange="readURL(this, '#picPertanyaan');" id="exampleInputFile" accept="image/gif, image/jpeg, image/png">
                    </div>
                </div>
                <h4>Jawaban</h4>

                <!-- ////////// SINGLE CHOICE ///////// -->
                <div class="form-jawaban" id="fj1" style="display:none">
                    <div class="form-group ">
                        <label for="txtSc1">Jawaban 1</label>
                        <input type="text" class="form-control" id="txtSc1" name="txtSc1">
                        <span style="float:right"><input type="radio" name="radiosSc" id="radiosSc1" value=1 > Benar</span>
                        <div class="form-group">
                            <label for="fileSc1">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picSc1" class="uploaded-pic">
                            <input type="file" name="fileSc1" onchange="readURL(this, '#picSc1');" id="fileSc1" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                    <hr>

                    <div class="form-group ">
                        <label for="txtSc2">Jawaban 2</label>
                        <input type="text" class="form-control" id="txtSc2" name="txtSc2">
                        <span style="float:right"><input type="radio" name="radiosSc" value=2> Benar</span>
                        <div class="form-group">
                            <label for="fileSc2">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picSc2" class="uploaded-pic">
                            <input type="file" name="fileSc2" onchange="readURL(this, '#picSc2');" id="fileSc2" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                    <hr>

                    <div class="form-group ">
                        <label for="txtSc3">Jawaban 3</label>
                        <input type="text" class="form-control" id="txtSc3" name="txtSc3">
                        <span style="float:right"><input type="radio" name="radiosSc" value=3> Benar</span>
                        <div class="form-group">
                            <label for="fileSc3">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picSc3" class="uploaded-pic">
                            <input type="file" name="fileSc3" onchange="readURL(this, '#picSc3');" id="fileSc3" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                    <hr>

                    <div class="form-group ">
                        <label for="txtSc4">Jawaban 4</label>
                        <input type="text" class="form-control" id="txtSc4" name="txtSc4">
                        <span style="float:right"><input type="radio" name="radiosSc" value=4> Benar</span>
                        <div class="form-group">
                            <label for="fileSc4">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picSc4" class="uploaded-pic">
                            <input type="file" name="fileSc4" onchange="readURL(this, '#picSc4');" id="fileSc4" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                    <hr>

                    <div class="form-group ">
                        <label for="txtSc5">Jawaban 5 (opsional)</label>
                        <input type="text" class="form-control" id="txtSc5" name="txtSc5">
                        <span style="float:right"><input type="radio" name="radiosSc" value=5> Benar</span>
                        <div class="form-group">
                            <label for="fileSc5">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picSc5" class="uploaded-pic">
                            <input type="file" name="fileSc5" onchange="readURL(this, '#picSc5');" id="fileSc5" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                </div>



                <!-- Multiple Choice -->
                <div class="form-jawaban" id="fj2" style="display:none">
                    <div class="form-group ">
                        <label for="txtMc1">Jawaban 1</label>
                        <input type="text" class="form-control" id="txtMc1" name="txtMc1">
                        <span style="float:right"><input type="checkbox" name="checkboxesMc"> Benar</span>
                        <div class="form-group">
                            <label for="fileMc1">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picMc1" class="uploaded-pic">
                            <input type="file" name="fileMc1" onchange="readURL(this, '#picMc1');" id="fileMc1" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group ">
                        <label for="txtMc2">Jawaban 2</label>
                        <input type="text" class="form-control" id="txtMc2" name="txtMc2">
                        <span style="float:right"><input type="checkbox" name="checkboxesMc"> Benar</span>
                        <div class="form-group">
                            <label for="fileMc2">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picMc2" class="uploaded-pic">
                            <input type="file" name="fileMc2" onchange="readURL(this, '#picMc2');" id="fileMc2" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                    <hr>
                </div>


                <!-- True False -->
                <div class="form-jawaban" id="fj3" style="display:none">
                    <div>Benar / Salah</div>
                    <label class="radio-inline">
                        <input type="radio" name="optionsTF" value=1> <strong>True</strong>
                    </label>
                    <span class="m-l-5 m-r-5">/</span>
                    <label class="radio-inline">
                        <input type="radio" name="optionsTF" value=0> <strong>False</strong>
                    </label>
                </div>




                <!-- Isian -->
                <div class="form-jawaban" id="fj4" style="display:none">
                    <div class="form-group ">
                        <label for="txtIsian">Jawaban Isian</label>
                        <input type="text" class="form-control" id="txtIsian" name="txtIsian">
                        <div class="form-group">
                            <label for="fileIsian">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picIsian" class="uploaded-pic">
                            <input type="file" name="fileIsian" onchange="readURL(this, '#picIsian');" id="fileIsian" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                </div>



                <!-- Essai -->
                <div class="form-jawaban" id="fj5" style="display:none">
                    <div class="form-group">
                        <label for="txtEssai">Panduan Jawaban Essai</label>
                        <textarea cols="30" rows="10" class="form-control" id="txtEssai" name="txtEssai"></textarea>
                        <div class="form-group">
                            <label for="fileEssai">Pilih gambar jawaban (opsional)</label>
                            <img src="" id="picEssai" class="uploaded-pic">
                            <input type="file" name="fileEssai" onchange="readURL(this, '#picEssai');" id="fileEssai" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                </div>


                <div class="form-group text-right">
                    <input type="submit" class="btn btn-primary btn-lg m-t-40" id="btnSubmit" name="btnSubmit" value="Simpan soal">
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    $(function() {
        $('#tipesoal').change(function() {
            $('.form-jawaban').hide();
            $('#fj' + $(this).val()).show();
            // alert($('#tipesoal').value);
        });
        
    });

//     $(function(){
//     var requiredCheckboxes = $('.browsers :checkbox[required]');
//     requiredCheckboxes.change(function(){
//         if(requiredCheckboxes.is(':checked')) {
//             requiredCheckboxes.removeAttr('required');
//         } else {
//             requiredCheckboxes.attr('required', 'required');
//         }
//     });
// });

    function readURL(input, idImg) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(idImg)
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>