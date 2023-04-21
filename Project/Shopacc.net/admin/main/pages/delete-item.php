<?php 
  $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
  $db -> set_charset("utf8");
  if (isset($_GET['id'])) {
      $id_item = $_GET['id'];
      $sql_del = "DELETE FROM table_items WHERE id='$id_item'";
      mysqli_query($db, $sql_del);
      mysqli_query($db, "DELETE FROM table_imgagent WHERE id_item='$id_item'");
      mysqli_query($db, "DELETE FROM table_imgskin WHERE id_item='$id_item'");
      mysqli_query($db, "DELETE FROM table_imgabout WHERE id_item='$id_item'");
      header('location: http://localhost/shopacc.net/admin/admin.php?locate=items-manager');
  }
?>