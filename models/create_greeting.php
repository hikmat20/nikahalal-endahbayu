<?php
require_once '../config/connection.php';
require_once '../models/timesince.php';


$order_id = 'NH0721001';
$customer_id = 'CU0721001';
$nama = $greeting = '';
$date = date('Y-m-d H:i:s');
$callback = [];



if (isset($_POST)) {
    $nama         = $_POST['nama'];
    $greeting     = $_POST['greeting'];
    $status       = '1';

    $query = mysqli_query($conn, "INSERT INTO greeting(order_id,customer_id,`name`,greeting,`status`,created_at) VALUES('$order_id','$customer_id','$nama','$greeting','$status','$date')");

    if (!$query) {
        $callback = [
            'code' => 0,
            'msg' => "Faild add greeting. Please try again!" . mysqli_error($conn),
            'nama' => '',
            'greeting' => '',
            'date' => '',
        ];
    } else {
        $callback = [
            'code' => 1,
            'msg' => "Success. Your greeting has been added!",
            'nama' => $nama,
            'greeting' => $greeting,
            'date' => time_since(strtotime($date)),
        ];
    }
    echo json_encode($callback);
}
