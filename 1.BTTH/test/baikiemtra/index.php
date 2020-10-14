<?php
require_once('db.php');
?>

<doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <h1 class="text-center"> Quản lý môn học</h1>
            <div style="display: flex;justify-content: space-between;">
                <a href="action.php" type="button" class="btn btn-primary mb-2"> + Thêm môn học</a>
                <div>Tên môn : <input type="text" placeholder="Tìm kiếm">&nbsp; <button type="button" class="btn btn-primary">Tìm</button></div>
            </div>
            <div class="card">
                <div class="card-header">
                    Danh sách môn học
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã môn</th>
                                <th>Tên môn học</th>
                                <th>Mô tả</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'select * from subject';
                            $subjectList = executeResult($sql);
                            foreach ($subjectList as $sbl) {
                                echo '<tr>
                                            <td>' . $sbl['id'] . '</td>
                                            <td>' . $sbl['mamh'] . '</td>
                                            <td>' . $sbl['name'] . '</td>
                                            <td>' . $sbl['description'] . '</td>                            
                                            <td>
                                                <button type="button" class="btn btn-warning" onclick =\'window.open("action.php?id='.$sbl['id'].'","_self")\'>sửa</button>&nbsp;
                                                <button type="button" class="btn btn-danger" onclick ="deleteSubject('.$sbl['id'].')">xóa</button>
                                            </td>
                                        </tr>';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            deleteSubject = (id) =>{
                let option = confirm('Bạn có muốn xóa nhân viên này không?')
                if(!option){
                    return
                }
                console.log(id);
                $.post('delete.php', {
                    'id': id
                }, function(data){
                    alert(data)
                    location.reload()
                })
            }
        </script>
    </body>


    </html>