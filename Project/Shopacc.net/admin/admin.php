<?php 
    session_start(); 
    include('./main/process/register.php');
    include('./main/process/change-info-admin.php');
    include('./main/process/addItem.php');
    include('./main/process/revenue.php');
    
    if (!$_SESSION['status']) {
        header('location: http://localhost/shopacc.net/admin/main/login/login.php?locate=loginAdmin');
    }


    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="/shopacc.net/user/pages/public/img/logo/logo-title.jpg">
    <link rel="stylesheet" href="./main/style/style.css">
    <link rel="stylesheet" href="/shopacc.net/user/pages/public/base.css">
    
</head>
<body>
    <?php include('../admin/main/pages/sidebar.php') ?>

    <?php 
        if (!isset($_GET['locate']) or $_GET['locate'] == 'home-page') {
            include('../admin/main/pages/home-page.php');
        } 
        elseif ($_GET['locate'] == 'mem-manager') {
            include('../admin/main/pages/mem-manager.php');
        }
        elseif ($_GET['locate'] == 'items-manager') {
            include('../admin/main/pages/items-manager.php');
        }
        elseif ($_GET['locate'] == 'change') {
            include('../admin/main/pages/change-info.php');
        }
        elseif ($_GET['locate'] == 'deleteAdmin') {
            include('../admin/main/pages/delete-admin.php');
        }
        elseif ($_GET['locate'] == 'addItem') {
            include('../admin/main/pages/add-item.php');
        }
        elseif ($_GET['locate'] == 'deleteItem') {
            include('../admin/main/pages/delete-item.php');
        }
        elseif ($_GET['locate'] == 'deleteItem') {
            include('../admin/main/pages/delete-item.php');
        }
        elseif ($_GET['locate'] == 'revenue-manager') {
            include('../admin/main/pages/revenue-manager.php');
        }
        elseif ($_GET['locate'] == 'sold-item-manager') {
            include('../admin/main/pages/sold-item-manager.php');
        }
    ?>


    <!-- scrpit add nofication -->
    <script>
        const addBtns = document.querySelectorAll('.add-member')
        const addTableBox = document.querySelector('.add-nofi')
        const addTableBoxClose = document.querySelector('.close')

        function showAddTable() {
            addTableBox.classList.add('open')
        }

        function hideAddTable() {
            addTableBox.classList.remove('open')
        }

        for (const add of addBtns) {
            add.addEventListener('click', showAddTable)
        }
        addTableBoxClose.addEventListener('click', hideAddTable)
    </script>

    <!-- scrpit change nofication -->
    <!-- <script>
        const changeBtns = document.querySelectorAll('.change')
        const changeTableBox = document.querySelector('.change-nofi')
        const changTableBoxClose = document.querySelector('.close')

        function showChangeTable() {
            changeTableBox.classList.add('open')
        }

        function hideAddTable() {
            changeTableBox.classList.remove('open')
        }

        for (const add of changeBtns) {
            add.addEventListener('click', showChangeTable)
        }
        changTableBoxClose.addEventListener('click', hideAddTable)
    </script> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>



