<?php
include "config.php";
$userID = 0;
if (isset($_POST['user_name'])) {
    $userID = mysqli_real_escape_string($conn, $_POST['user_name']);
}
$nhanvien_arr = array();
if ($userID > 0) {
    $sql = "SELECT * FROM user_details WHERE user_id=" . $userID;;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $phonenumber = $row['phonenumber'];
        $gender = $row['gender'];
        $nhanvien_arr[] = array("id" => $id, "first_name"=>$first_name, "last_name"=>$last_name, "first_name"=>$first_name, "email"=>$email, "phonenumber"=>$phonenumber, "gender"=>$gender );
    }
}
echo json_encode($nhanvien_arr); 