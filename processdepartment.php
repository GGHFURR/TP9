<?php
// memanggil db.php
include('db.php');

//mengambil data sesuai inputan yg dimasukkan
if (isset($_POST["Department_id"])) {
    $department_id = $_POST["Department_id"];
    $department_name = $_POST["Department_name"];
    $department_address = $_POST["Department_address"];

    //membuat database
    $db = new department();
    //memanggil fungsi dengan parameternya
    $db->saveDepartmentData($department_id, $department_name, $department_address);

    back();
} else {
    back();
}

//inisialisasi fungsi back untuk return nilai
function back()
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
