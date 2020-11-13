<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "config.php";
    ?>
    <div class="container">
        <div>Name </div>
        <select id="name_nv">
            <option value="0">- Select -</option>
            <?php
            $sql_nv_categories = "SELECT * FROM users";
            $nv_categories_data = mysqli_query($conn, $sql_nv_categories);
            while ($row = mysqli_fetch_assoc($nv_categories_data)) {
                $nhanvienId = $row['id'];
                $nhanvien_name = $row['name'];
                echo "<option value='" . $nhanvienId . "' >" . $nhanvien_name . "</option>";
            }
            ?>
        </select>
        <div class="clear"></div>
        <div>Description </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody id="sel_nhanvien">

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $("#name_nv").change(function() {
                let userid = $(this).val();
                $.ajax({
                    url: 'getdbcomment.php',
                    type: 'POST',
                    data: {
                        user_name: userid
                    },
                    dataType: 'json',
                    success: function(res) { 
                        console.log(res);
                        $("#sel_nhanvien").empty(); 
                        for (let i = 0; i < res.length; i++) {
                            let id = res[i]['id']; 
                            let firstname = res[i]['content']; 
                            $("#sel_nhanvien").append(
                                ` <tr>
                                    <td>${id}</td>
                                    <td>${firstname  }</td>
                                </tr>`);
                        }
                    } 
                });
            });
        });
    </script>
</body>

</html>