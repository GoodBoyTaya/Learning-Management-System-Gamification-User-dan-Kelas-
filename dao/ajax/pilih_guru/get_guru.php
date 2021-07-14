<?php
include_once '../../../util/dbclass.php';
echo '<option disabled selected value="">-- Pilih Guru --</option>';
$pelajaran = $_POST['pelajaran'];
$conn = new Database();
$param = array(
    'idmapel' => $pelajaran,
);
$result = $conn->execute_sp('spGetGuruByMapel', $param);
$conn = null;
foreach($result as $row){
    echo '<option value="'.$row['userid'].'">'.$row['fullname'].'</option>';
}