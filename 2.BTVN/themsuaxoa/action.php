<?php
require_once('dbhelp.php');
$s_name = $s_description = $s_salary = $s_gender = $s_birthday = '';
if (!empty($_POST)) {
  $s_id = '';
  if (isset($_POST['name'])) {
    $s_name = $_POST['name'];
  }
  if (isset($_POST['description'])) {
    $s_description = $_POST['description'];
  }
  if (isset($_POST['salary'])) {
    $s_salary = $_POST['salary'];
  }
  if (isset($_POST['gender'])) {
    $s_gender = $_POST['gender'];
  }
  if (isset($_POST['birthday'])) {
    $s_birthday = $_POST['birthday'];
  }
  if (isset($_POST['id'])) {
    $s_id = $_POST['id'];
  }

  $s_id = str_replace('\'', '\\\'', $s_id);
  $s_name = str_replace('\'', '\\\'', $s_name);
  $s_description = str_replace('\'', '\\\'', $s_description);
  $s_salary = str_replace('\'', '\\\'', $s_salary);
  $s_gender = str_replace('\'', '\\\'', $s_gender);
  $s_birthday = str_replace('\'', '\\\'', $s_birthday);

  if ($s_id != '') {
    // update
    $sql = "update employees set name ='$s_name', description ='$s_description', salary='$s_salary', gender='$s_gender',birthday='$s_birthday' where id =" . $s_id;
  } else {
    // insert
    $sql = "insert into employees(name, description, salary, gender, birthday) value ('$s_name', '$s_description', '$s_salary', '$s_gender', '$s_birthday')";
  }

  execute($sql);

  header('Location: index.php');
  die();
}

$id = '';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = 'select * from employees where id = ' . $id;
  $employeeList = executeResult($sql);
  if ($employeeList != null && count($employeeList) > 0) {
    $epl = $employeeList[0];
    $s_name = $epl['name'];
    $s_description = $epl['description'];
    $s_salary = $epl['salary'];
    $s_gender = $epl['gender'];
    $s_birthday = $epl['birthday'];
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <h1 class="text-center"> Quản lý nhân viên</h1>
    <div class="card">
      <div class="card-header">
        Create Record
      </div>
      <form class="card-body" method="POST">
        <div class="form-group">
          <label>Name</label>
          <input type="number" name="id" value="<?= $id ?>" style="display:none">
          <input type="text" name="name" value="<?= $s_name ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description" value="<?= $s_description ?>" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Salary</label>
          <input type="text" name="salary" value="<?= $s_salary ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <div><label class="form-check-label">Gender</label></div>
          <input type="radio" name="gender" value="<?= $s_gender ?>" checked>Female &nbsp;
          <input type="radio" name="gender" value="<?= $s_gender ?>">Male
        </div>
        <div class="form-group">
          <label>Birthday</label>
          <input type="date" name="birthday" value="<?= $s_birthday ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>&nbsp;
        <button type="button" class="btn btn-danger" onclick="window.open('index.php','_self')">Cannel</button>
      </form>
    </div>
  </div>
</body>