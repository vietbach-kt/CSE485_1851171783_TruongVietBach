<?php
require_once('./db.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = 'delete from subject where id = '.$id ;
    execute($sql);

    echo 'Xóa môn học thàng công';
}