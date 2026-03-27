<?php
    $link = mysqli_connect("127.0.0.1", "root", "", "cs67", 3307);
    if (!$link) {
        die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . mysqli_connect_error());
    }
    mysqli_set_charset($link, "utf8");
?>
