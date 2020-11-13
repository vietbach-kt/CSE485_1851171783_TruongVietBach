<?php
include "config.php";
$nhanvienID = 0;
if (isset($_POST['user_name'])) {
    $nhanvienID = mysqli_real_escape_string($conn, $_POST['user_name']);
}
$nhanvien_arr = array();
if ($nhanvienID > 0) {
    $sql = "SELECT id, content FROM comments WHERE user_id=" . $nhanvienID;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $content = $row['content'];
        $nhanvien_arr[] = array("id" => $id, "content" => $content);
    }
}
echo json_encode($nhanvien_arr); 