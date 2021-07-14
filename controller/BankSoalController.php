<?php
include_once 'dao/PertanyaanDaoImpl.php';
include_once 'dao/JawabanDaoImpl.php';
include_once 'model/Pertanyaan.php';
include_once 'model/Jawaban.php';

class BankSoalController
{
    private $pertanyaanDao;
    private $jawabanDao;

    public function __construct()
    {
        $this->pertanyaanDao = new PertanyaanDaoImpl();
        $this->jawabanDao = new JawabanDaoImpl();
    }

    public function index()
    {
    }

    public function checkJawabanTerisi(Jawaban $jawaban)
    {
        //jawaban harus punya isi/gambar atau keduanya
        if (!((trim($jawaban->getJawaban_isi()) == '') && (trim($jawaban->getJawaban_isi()) == ''))) {
            return true;
        } else {
            return false;
        }
    }

    public function add()
    {
        $submitPressed = filter_input(INPUT_POST, "btnSubmit");
        if ($submitPressed) {
            echo ('aaaaaaa');
            //-------------- PERTANYAAN --------------
            $mapel = filter_input(INPUT_POST, "selectPelajaran");
            $kelas = filter_input(INPUT_POST, "selectKelas");
            $materi = filter_input(INPUT_POST, "selectMateri");
            $tipe = filter_input(INPUT_POST, "selectTipe");
            $kesulitan = filter_input(INPUT_POST, "selectKesulitan");
            $isiPertanyaan = filter_input(INPUT_POST, "txtPertanyaan");


            //buat object Pertanyaan
            $pertanyaan = new Pertanyaan();
            $pertanyaan->setPertanyaan_tipe($tipe);
            $pertanyaan->setPertanyaan_bab($materi);
            $pertanyaan->setPertanyaan_level($kesulitan);
            $pertanyaan->setPertanyaan_isi($isiPertanyaan);
            $pertanyaan->setPertanyaan_gambar($_FILES['picPertanyaan']['name']);
            // $pertanyaan->setPertanyaan_created_by();
            // $pertanyaan->setPertanyaan_gambar($gambar);
            $pertanyaan->setPertanyaan_status(1);
            if (isset($_FILES['picPertanyaan']['name'])) {
                $pertanyaan->setPertanyaan_gambar($_FILES['picPertanyaan']['name']);
            }
            $result = $this->pertanyaanDao->setPertanyaan($pertanyaan);

            if ($result) {
                // save gambar
                // if (isset($_FILES['picPertanyaan']['name'])) {
                //     $targetDirectory = 'uploads/pic_pertanyaan';
                //     $fileExtension = pathinfo($_FILES['picPertanyaan']['name'], PATHINFO_EXTENSION);
                //     $newFileName = $isbn . '.' . $fileExtension;
                //     $targetFile = $targetDirectory . $newFileName;
                //     if ($_FILES['bookCover']['size'] > 1024 * 2048) {
                //         echo '<div>Upload error. File size exceed 2MB</div>';
                //     } else {
                //         move_uploaded_file($_FILES['bookCover']['tmp_name'], $targetFile);
                //     }
                // }
                // if ($fileExtension == null) {
                //     $book->setCover("default.png");
                //     $result = $this->bookDao->insertBook($book);
                // } else {
                //     $book->setCover($newFileName);
                //     $result = $this->bookDao->insertBook($book);
                // }
                // if ($result) {
                //     echo '<div class="bg-success">Data Successfully added (Book: ' . $title . ')</div>';
                // } else {
                //     echo '<div class="bg-error">Error add data</div>';
                // }


                // ----------- JAWABAN ---------------
                $jawaban1 = new Jawaban();
                $jawaban2 = new Jawaban();
                $jawaban3 = new Jawaban();
                $jawaban4 = new Jawaban();
                $jawaban5 = new Jawaban();

                $jawabanArray = array($jawaban1, $jawaban2, $jawaban3, $jawaban4, $jawaban5);

                for ($i = 0; $i <= 4; $i++) {
                    $jawabanArray[$i]->setJawaban_benar(0);
                }

                if ($tipe == 1) {
                    //Single choice
                    $isiJawaban1 = filter_input(INPUT_POST, "txtSc1");
                    $isiJawaban2 = filter_input(INPUT_POST, "txtSc2");
                    $isiJawaban3 = filter_input(INPUT_POST, "txtSc3");
                    $isiJawaban4 = filter_input(INPUT_POST, "txtSc4");
                    $isiJawaban5 = filter_input(INPUT_POST, "txtSc5");
                    $jawabanBenar = filter_input(INPUT_POST, "radiosSc");


                    $jawaban1->setJawaban_isi($isiJawaban1);
                    $jawaban2->setJawaban_isi($isiJawaban2);
                    $jawaban3->setJawaban_isi($isiJawaban3);
                    $jawaban4->setJawaban_isi($isiJawaban4);
                    $jawaban5->setJawaban_isi($isiJawaban5);

                    for ($i = 0; $i <= 4; $i++) {
                        if ($i == $jawabanBenar - 1) {
                            $jawabanArray[$i]->setJawaban_benar(1);
                        }
                    }
                } else if ($tipe == 2) {
                    //Multiple choice
                    $isiJawaban1 = filter_input(INPUT_POST, "txtMc1");
                    $isiJawaban2 = filter_input(INPUT_POST, "txtMc2");
                    $isiJawaban3 = filter_input(INPUT_POST, "txtMc3");
                    $isiJawaban4 = filter_input(INPUT_POST, "txtMc4");
                    $isiJawaban5 = filter_input(INPUT_POST, "txtMc5");
                    $jawabanBenar = filter_input(INPUT_POST, "checkBoxesSc");

                    if (isset($jawabanBenar)) {
                        foreach ($jawabanBenar as $i) {
                            $jawabanArray[$i - 1]->setJawaban_benar(1);
                        }
                    } else {
                        echo "Jawaban benar belum dipilih!";
                    }
                } else if ($tipe == 3) {
                    //True False
                    $benar1 = filter_input(INPUT_POST, "optionsSc");
                    if ($benar1 == 1) {
                        $jawaban1->setJawaban_benar(1);
                    } else {
                        $jawaban1->setJawaban_benar(0);
                    }
                } else if ($tipe == 4) {
                    //Isian
                    $isiJawaban1 = filter_input(INPUT_POST, "txtIsian");
                    $jawaban1->setJawaban_isi($isiJawaban1);
                    $jawaban1->setJawaban_benar(1);
                } else if ($tipe == 5) {
                    //Essai
                    $isiJawaban1 = filter_input(INPUT_POST, "txtEssai");
                    $jawaban1->setJawaban_isi($isiJawaban1);
                    $jawaban1->setJawaban_benar(1);
                }
            }




            // if (isset($_FILES['bookCover']['name'])) {
            //     $targetDirectory = 'uploads/';
            //     $fileExtension = pathinfo($_FILES['bookCover']['name'], PATHINFO_EXTENSION);
            //     $newFileName = $isbn . '.' . $fileExtension;
            //     $targetFile = $targetDirectory . $newFileName;
            //     if ($_FILES['bookCover']['size'] > 1024 * 2048) {
            //         echo '<div>Upload error. File size exceed 2MB</div>';
            //     } else {
            //         move_uploaded_file($_FILES['bookCover']['tmp_name'], $targetFile);
            //     }
            // }
            // if ($fileExtension == null) {
            //     $book->setCover("default.png");
            //     $result = $this->bookDao->insertBook($book);
            // } else {
            //     $book->setCover($newFileName);
            //     $result = $this->bookDao->insertBook($book);
            // }
            // if ($result) {
            //     echo '<div class="bg-success">Data Successfully added (Book: ' . $title . ')</div>';
            // } else {
            //     echo '<div class="bg-error">Error add data</div>';
            // }
        }
        // $books = $this->bookDao->getBookData();
        include_once 'views\bank_soal\tambah_soal.php';
    }
}
