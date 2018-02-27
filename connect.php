<?php

  // if
    //($_SERVER['HTTP_HOST']=='localhost') {
    $DB_SERVER = 'localhost';
    $DB_USER_READER = 'u13580251';
    $DB_PASS_READER = 'm12Mr3XCOJ';
    $DB_NAME = 'db13580251';
  // }else {
  //   //บน sever imsu.co
    // $DB_SERVER = 'localhost';
    // $DB_USER_READER = 'u13580251';
    // $DB_PASS_READER = 'm12Mr3XCOJ';
    // $DB_NAME = 'db13580251';
  // }

  //คำสั่งฐานข้อมูล
  $conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);

  //ตรวจสอบการเชื่อต่อ
  if ($conn -> connect_error) {
    die("connection failed".connect_error);
  }

  //เซ็ตค่ารูปแบบตัวอักษร
  mysqli_set_charset($conn,"utf8");

 ?>
