<?php
require 'connect.php';
$id = $_REQUEST['id'];
$thb = $_REQUEST['thb'];

$sql = "DELETE FROM exch152_history WHERE recordID = $id";

$sql_exe = $conn -> query($sql);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loading ...</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mitr:300,400,500,600" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="list-group-item list-group-item-danger lg3"><?php
      if ($sql_exe) {
        echo "* delete complete * at id = ".$id." จำนวนเงิน ".$thb;
        header("Refresh:3;url=index.php",true,303);
        // sleep(2);
      }else{
        echo "delete fail";
      }
       ?></div>
    </div>

  </body>
</html>
