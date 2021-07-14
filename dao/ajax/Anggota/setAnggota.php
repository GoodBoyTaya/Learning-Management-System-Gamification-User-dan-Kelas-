<?php
include_once '../../../util/dbclass.php';
$kelas = $_POST['kelas'];
$user = $_POST['user'];
$rol = $_POST['role'];

if ($rol == 2) {
    $jabatan = '1';
}
elseif ($rol == 3) {
    $jabatan = '2';
}

$result = 0;
$conn = new Database();
$data = array(
    'kelas' => $kelas,
    'userid' =>$user,
    'rol' => $jabatan
);
$result = $conn->execute_sp('spSetAnggota',$data);
$conn = null;

if ($result[0]['ErrCode'] == 1) {
    echo (0);
}
else {
    echo (1);
}

?>