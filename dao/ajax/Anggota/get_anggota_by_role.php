<?php
include_once '../../../util/dbclass.php';
$sekolah = $_POST['sekolah'];
$jabatan = $_POST['jabatan'];
$result = 0;
$conn = new Database();
$data = array(
    'iduser' => '',
    'idsekolah' =>$sekolah,
    'rol' => $jabatan
);
$result = $conn->execute_sp('spGetUser',$data);
$conn = null;

foreach($result as $row){
    echo '<tr iduser="'.$row['id'].'" sel-user="'.$row['userrole'].'" fulname="'.$row['namauser'].'">';
    echo '<td style="max-width:3px;">'.$row['id'].'</td>';
    echo '<td>'.$row['namauser'].'</td>';
    echo '</tr>';
}
?>