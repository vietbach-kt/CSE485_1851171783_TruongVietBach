<?php
require_once('./dbqlnv.php');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Bài tập thực hành</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
  <div class="container">
    <h2>Datatable</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>
    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="/action_page.php">
              <div class="form-group">
                <label for="email">Your name:</label>
                <input type="text" class="form-control" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="pwd">Gender:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
              <div class="form-group">
                <label for="pwd">Birth:</label>
                <input class="form-control" type="date" id="example-datetime-local-input">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <table id="myTable" class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Gender</th>
          <th>Birth</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $sql = 'select * from subject';
            $subjectList = executeResult($sql);
            foreach ($subjectList as $sbl) {
              echo '
              <tr>
                <td>' . $sbl['id'] . '</td>
                <td>' . $sbl['mamh'] . '</td>
                <td>' . $sbl['name'] . '</td>
                <td>' . $sbl['description'] . '</td>                            
                <td>
                    <button type="button" class="btn btn-warning">sửa</button>&nbsp;
                    <button type="button" class="btn btn-danger" )">xóa</button>
                </td>
              </tr>';
              }
          ?>
        </tr>
      </tbody>
    </table>
  </div>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>