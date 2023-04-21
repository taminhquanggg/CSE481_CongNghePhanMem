<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
  $db -> set_charset("utf8");
  $username = "";
  $password = "";

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) {
      $info_error = "Vui lòng nhập đầy đủ thông tin !";
    }

    $password = md5($password);

    $sql_u = "SELECT username, password, name, status FROM table_admin WHERE username='$username'";

    $log_u = mysqli_query($db, $sql_u);

    if (mysqli_num_rows($log_u) == 0) {
      $log_error = "Tên đăng nhập hoặc mật khẩu sai";
    } 
    else {
      $row = mysqli_fetch_array($log_u);
      if ($password != $row['password']) {
          $log_error = "Tên đăng nhập hoặc mật khẩu sai";
        }
      else  {
          $_SESSION['status'] = $row['status'];
          $_SESSION['name'] = $row['name'];
          $balance_user = $row['balance'];

          header('location: http://localhost/shopacc.net/admin/admin.php?locate=home-page');
        }
      }
  }
    
?>