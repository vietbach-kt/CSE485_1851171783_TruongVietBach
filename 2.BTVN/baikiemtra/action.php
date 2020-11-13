<?php
require_once('db.php');
$s_name = $s_description = $s_mamh = $s_id = '';
if (!empty($_POST)) {

    if (isset($_POST['id'])) {
        $s_id = $_POST['id'];
    }
    if (isset($_POST['mamh'])) {
        $s_mamh = $_POST['mamh'];
    }
    if (isset($_POST['name'])) {
        $s_name = $_POST['name'];
    }
    if (isset($_POST['description'])) {
        $s_description = $_POST['description'];
    }

    $s_id = str_replace('\'', '\\\'', $s_id);
    $s_name = str_replace('\'', '\\\'', $s_name);
    $s_description = str_replace('\'', '\\\'', $s_description);
    $s_mamh = str_replace('\'', '\\\'', $s_mamh);


    if ($s_id != '') {
        $sql = "update subject set name ='$s_name', description ='$s_description', mamh='$s_mamh' where id =" . $s_id;
    } else {
        $sql = "insert into subject(name, description, mamh) value ('$s_name', '$s_description', '$s_mamh')";
    }

    execute($sql);

    header('Location: index.php');
    die();
}

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'select * from subject where id = ' . $id;
    $subjectList = executeResult($sql);
    if ($subjectList != null && count($subjectList) > 0) {
        $sbl = $subjectList[0];
        $s_name = $sbl['name'];
        $s_description = $sbl['description'];
        // echo $s_description;
        $s_mamh = $sbl['mamh'];
    } else {
        $id = '';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
    label {
        width: 150px;
    }
    input {
        width: 100%;
    }
    label.error {
        display: inline-block;
        color:red;
        width: 200px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center"> Quản lý môn học</h1>
        <div class="card">
            <div class="card-header">
                <?php
                // echo "$id ? 'Thêm môn học' : 'Cập nhật môn học' ";
                ?>
            </div>
            <form class="card-body" method="POST" id="form">
                <div class="form-group">
                    <label>Mã môn</label>
                    <input type="text" name="mamh" value="<?= $s_mamh ?>" class="form-control" placeholder="" aria-describedby="helpId" require>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="number" name="id" value="<?= $id ?>" style="display:none">
                    <input type="text" name="name" value="<?= $s_name ?>" class="form-control" placeholder="" aria-describedby="helpId" require>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" value="<?= $s_description ?>" rows="3" require></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Lưu lại</button>&nbsp;
                <button type="button" class="btn btn-dark" onclick="window.open('action.php','_self')">Reset</button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // $("#form").on('click', function (e) {
            //     e.preventDefault()
            // });
            $("#form").validate({
                rules: {
                    mamh : "required",
                    name: "required",
                    description: "required",
                },
                messages: {
                    mamh: "Vui lòng nhập mã môn",
                    name: "Vui lòng nhập tên môn",
                    description: "Vui lòng nhập mô tả",   
                }
            });

        });
    </script>
</body>