<?php
  $thb = $_POST['thb'];
  $type = $_POST['type'];

  if($type=="usd"){
    $result = $thb/31.2273;
  }else if ($type=="jpy") {
    $result = $thb/28.9814;
  }else if ($type=="krw") {
    $result = $thb/0.0290;
  }else if ($type=="gbp") {
    $result = $thb/43.3292;
  }else if ($type=="eur") {
    $result = $thb/38.2737;
  }

  // echo "Result1 = ".$result;
  // echo "<br>";

  if($type=="usd"){
    $rate = 31.2273;
  }else if ($type=="jpy") {
    $rate = 28.9814;
  }else if ($type=="krw") {
    $rate = 0.0290;
  }else if ($type=="gbp") {
    $rate = 43.3292;
  }else if ($type=="eur") {
    $rate = 38.2737;
  }

  // echo "Result2 = ".$thb/$rate;
  // echo "<br>";

  switch ($type) {
    case 'usd':
      $rate2 = 31.2273;
      break;

    case 'jpy':
      $rate2 = 28.9814;
      break;

    case 'krw':
      $rate2 = 0.0290;
      break;

    case 'gbp':
      $rate2 = 43.3292;
      break;

    case 'eur':
      $rate2 = 38.2737;
      break;

    default:
      $rate2 = 0;
      break;
  }

  // echo "Result3 = ".$thb/$rate2;
  // echo "<br>";

  require 'connect.php';

  $sql = "INSERT INTO exch152_history(thb,calculated,currency) VALUES($thb,$result,'$type')";

  $sql_exe=$conn -> query($sql);

  // print($sql_exe);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mitr:300,400,500,600" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="list-group-item lg2 active">
        <?php echo "ค่าที่กรอก = ".$thb;
        echo " | สกุลเงินที่เลือก = ".$type;
        ?>
      </div>


    <?php
      $sql = "SELECT * FROM `exch152_history` ORDER BY `exch152_history`.`dateRecord` DESC";

      $sql_exe = $conn->query($sql);


      while ($row = mysqli_fetch_assoc($sql_exe)) { ?>
        <div class="list-group-item table-striped">
        <?php
        echo $row['thb']." exchange to ".$row['currency']." = ".$row['calculated']." ".$row['dateRecord'];
        // $array[''];
    ?>
        <a class="float-right" href="delete.php?id=<?php echo $row['recordID']?>&thb=<?php echo $row['thb']?>">delete</a>
        </div>

        <?php
      }

      $conn->close();
     ?>

     </div>

  </body>
</html>
