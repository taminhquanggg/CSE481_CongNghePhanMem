<?php 
  $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
  $db -> set_charset("utf8");
  $name_admin = "";
  $username = "";
  $password = "";
  $password_again = "";
  $status = "";
  
  if (isset($_POST['add'])) {
    $name_admin = $_POST['name_admin'];
  	$username = $_POST['username'];
  	$password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $status = $_POST['status'];

  	$sql_u = "SELECT username FROM table_admin WHERE username='$username'";
  	$reg_u = mysqli_query($db, $sql_u);

  	if (mysqli_num_rows($reg_u) > 0) {
  	  $name_error = "Tài khoản đã được sử dụng ! <br> Vui lòng chọn tài khoản khác";		
  	}   elseif ($password != $password_again) {
            $password_error = "Mật khẩu không khớp !";
    }   elseif (!$username || !$password || !$password_again) {
            $info_error = "Vui lòng nhập đầy đủ thông tin !";
    }   else {
            $query = "INSERT INTO table_admin (username, password, name, status) VALUES ('$username', '".md5($password)."', '$name_admin', '$status')";
            $regults = mysqli_query($db, $query);    
          
  	}
  
  }
?>

