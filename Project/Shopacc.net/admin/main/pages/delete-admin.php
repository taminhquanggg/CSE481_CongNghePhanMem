<?php 
  $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
  $db -> set_charset("utf8");
  if (isset($_GET['id'])) {
      $sql_del = "DELETE FROM table_admin WHERE id='$id_admin'";
      mysqli_query($db, $sql_del);
      header('location: http://localhost/shopacc.net/admin/admin.php?locate=mem-manager');
  }

?>