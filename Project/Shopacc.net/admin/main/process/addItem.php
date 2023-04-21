<?php 
    $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
    $db -> set_charset("utf8");

    $author = $_SESSION['name'];
    if (isset($_POST['addItem'])) {
        $price = $_POST['price'];
        $rank = $_POST['rank'];
        $agent = $_POST['agent'];
        $skin = $_POST['skin'];
        $link = $_POST['link'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!$price || !$agent || !$skin || !$username || !$password || !isset($_FILES['imageCover'])
        || !isset($_FILES['imageAgent']) || !isset($_FILES['imageSkin']) || !isset($_FILES['imageAbout'])) 
        {
            $error_add = "Nhập đầy đủ thông tin !";
        }

        else {
            $file_cover = $_FILES['imageCover'];
            $fileCoverName = $file_cover['name'];
            move_uploaded_file($file_cover['tmp_name'],'../uploads/'.$fileCoverName);

            $file_agent = $_FILES['imageAgent'];
            $fileAgentName = $file_agent['name'];
            foreach ($fileAgentName as $key => $value) {
                move_uploaded_file($file_agent['tmp_name'][$key],'../uploads/'.$value);
            }

            $file_skin = $_FILES['imageSkin'];
            $fileSkinName = $file_skin['name'];
            foreach ($fileSkinName as $key => $value) {
                move_uploaded_file($file_skin['tmp_name'][$key],'../uploads/'.$value);
            }

            $file_about = $_FILES['imageAbout'];
            $fileAboutName = $file_about['name'];
            foreach ($fileAboutName as $key => $value) {
                move_uploaded_file($file_about['tmp_name'][$key],'../uploads/'.$value);
            }

            $sql_add = "INSERT INTO table_items(coverImg, price, rank, agent, skin, link, username, password, author) 
            VALUE ('$fileCoverName', '$price', '$rank', '$agent', '$skin', '$link', '$username', '$password', '$author')";
            $add_item = mysqli_query($db, $sql_add);
            $id_item = mysqli_insert_id($db);

            foreach ($fileAgentName as $key => $value) {
                mysqli_query($db, "INSERT INTO table_imgagent(id_item, image) 
                VALUES ('$id_item', '$value')");
            }

            foreach ($fileSkinName as $key => $value) {
                mysqli_query($db, "INSERT INTO table_imgskin(id_item, image) 
                VALUES ('$id_item', '$value')");
            }

            foreach ($fileAboutName as $key => $value) {
                mysqli_query($db, "INSERT INTO table_imgabout(id_item, image) 
                VALUES ('$id_item', '$value')");
            }

            header('location: http://localhost/shopacc.net/admin/admin.php?locate=items-manager');

        }

        

    }
?>