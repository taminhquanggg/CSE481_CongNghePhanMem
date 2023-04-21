<?php 
    session_start();
    unset($_SESSION['status']);
    session_destroy();
    header('location: http://localhost/shopacc.net/admin/main/login/login.php?locate=loginAdmin');
?>