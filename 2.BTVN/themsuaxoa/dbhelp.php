<?php
require_once('./config.php');

function execute($sql) {
    // create connection toi db
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    // query
    mysqli_query($conn,$sql);
    // đóng connection
    mysqli_close($conn);
}

// sử dụng cho lệnh select  => trả về kết 
function executeResult($sql) {
    // create connection toi db
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    // query
    $resultset = mysqli_query($conn,$sql);
    $list = [];
    while($row = mysqli_fetch_array($resultset,1)) {
        $list[] = $row;
    }
    // đóng connection
    mysqli_close($conn);
    return $list;
}

