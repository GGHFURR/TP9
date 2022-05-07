<?php
// memanggil db.php
include('db.php');

//mengambil data sesuai inputan yg dimasukkan
if (isset($_POST["Data"])) {
    $data = $_POST["Data"];
    $value = $_POST["Value"];

    //membuat database
    $db = new company();
    //memanggil fungsi dengan parameternya
    $db->saveCompanyData($data, $value);

    back();
} else {
    back();
}

//inisialisasi fungsi back untuk return nilai
function back()
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
