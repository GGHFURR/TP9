<?php
// memanggil db.php
include('db.php');

//mengambil data sesuai inputan yg dimasukkan
if (isset($_POST["employe_id"])) {
    $employe_id = $_POST["employe_id"];
    $employe_name = $_POST["employe_name"];
    $employe_department = $_POST["employe_department"];
    $employe_email = $_POST["employe_email"];

    //membuat database
    $db = new employe();
    //memanggil fungsi dengan parameternya
    $db->saveEmployeeData($employe_id, $employe_name, $employe_department, $employe_email);

    back();
} else {
    back();
}

//inisialisasi fungsi back untuk return nilai
function back()
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
