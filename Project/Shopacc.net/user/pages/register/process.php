<?php 
  $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');

  $username = "";
  $password = "";
  $password_again = "";
  $reg_status = 0;

  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	$password = $_POST['password'];
    $password_again = $_POST['password_again'];

  	$sql_u = "SELECT username FROM table_user WHERE username='$username'";
  	$reg_u = mysqli_query($db, $sql_u);

  	if (mysqli_num_rows($reg_u) > 0) {
  	  $name_error = "Tài khoản đã được sử dụng ! <br> Vui lòng chọn tài khoản khác"; 		
  	}   elseif ($password != $password_again) {
            $password_error = "Mật khẩu không khớp !";
    }   elseif (!$username || !$password || !$password_again) {
            $info_error = "Vui lòng nhập đầy đủ thông tin !";
    }   else {
            $query = "INSERT INTO table_user (username, password) VALUES ('$username', '".md5($password)."')";
            $regults = mysqli_query($db, $query);
            $reg_status = 1;
  	}
    
  }

?>

