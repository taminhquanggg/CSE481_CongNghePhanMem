<?php
    $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
    $db -> set_charset("utf8");
    $revenue = 0;
    $sold = 0;
    $all = 0;
    $sql_select_items = mysqli_query($db, "SELECT * FROM table_items ORDER BY id DESC");
    while ($row_items = mysqli_fetch_array($sql_select_items)) {
        $all = $all + 1;
        if ($row_items['status']=='Đã bán') {
            $revenue = $revenue + $row_items['price'];
            $sold = $sold + 1 ;
        }
    }

?>