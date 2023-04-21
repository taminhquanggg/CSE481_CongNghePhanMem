<?php 
  $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
  $db -> set_charset("utf8");
  if (isset($_GET['id'])) {
    $id_admin = $_GET['id'];
    $sql_u = "SELECT * FROM table_admin WHERE id='$id_admin'";
    $list_u = mysqli_query($db, $sql_u);
    $row = mysqli_fetch_array($list_u);
    
    if (isset($_POST['change_name_admin'])) {
      $new_name = $_POST['new_name'];
      $password = md5($_POST['password1']);
      if (!$new_name || !$password) {
        $error1 = "Nhập đầy đủ thông tin!";
      }
      elseif ($password != $row['password']) {
        $error1 = "Mật khẩu sai!";
      }
      else {
        $sql_update_name = "UPDATE table_admin SET name='$new_name' WHERE id='$id_admin'";
        mysqli_query($db, $sql_update_name);
        header('location: http://localhost/shopacc.net/admin/admin.php?locate=change&id='.$id_admin);
        
      }
    }

    elseif (isset($_POST['change_username_admin'])) {
      $new_username = $_POST['new_username'];
      $password = md5($_POST['password2']);
      if (!$new_username || !$password) {
        $error2 = "Nhập đầy đủ thông tin!";
      }
      elseif ($password != $row['password']) {
        $error2 = "Mật khẩu sai!";
      }
      else {
        $sql_update_name = "UPDATE table_admin SET username='$new_username' WHERE id='$id_admin'";
        mysqli_query($db, $sql_update_name);
        header('location: http://localhost/shopacc.net/admin/admin.php?locate=change&id='.$id_admin);
      }
    }

    elseif (isset($_POST['change_password_admin'])) {
      $pass_old = $_POST['password_old'];
      $pass_new = $_POST['password_new'];
      $repass_new = $_POST['repassword_new'];
      if (!$pass_old || !$pass_new || !$repass_new) {
        $error3 = "Nhập đầy đủ thông tin!";
      }
      elseif (md5($pass_old) != $row['password']) {
        $error3 = "Mật khẩu cũ sai!";
      }
      elseif (md5($pass_new) != md5($repass_new)) {
        $error3 = "Mật mới không khớp!";
      }
      else {
        $pass_new = md5($pass_new);
        $sql_update_name = "UPDATE table_admin SET password='$pass_new' WHERE id='$id_admin'";
        mysqli_query($db, $sql_update_name);
        header('location: http://localhost/shopacc.net/admin/admin.php?locate=change&id='.$id_admin);
      }
    }
  }
?>
