<?php
require_once('./dbhelp.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = 'delete from employees where id = '.$id ;
    execute($sql);

    echo 'Xóa nhân viên thàng công';
}