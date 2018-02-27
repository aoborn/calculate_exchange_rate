<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mitr:300,400,500,600" rel="stylesheet">
    <style>
    .dd-option-image, .dd-selected-image {
      /* vertical-align: middle; */
      /* float: left; */
      margin-right: 10px !important;
      max-width: 25px !important;
    }
    .dd-selected-image ,.dd-option-image{
      margin-top: 4.5px !important;
    }
    .dd-selected-text,.dd-option-text{
      line-height: 0 !important;
      margin-top: 18px;
    }
    </style>
  </head>
  <body>

    <div class="box card">
      <form class="form-group" action="calculate-result.php" method="post" data-toggle="validator">
        <label class="text-fixed2">โปรแกรมคำนวณอัตราการแลกเปลี่ยน</label>
        <label class="text-fixed"><img class="float-left flag" src="img/thb.svg">จำนวนเงิน (บาท)</label>
        <input type="number" class="form-control" type="text" name="thb" value="">
        <label class="text-fixed">สกุลเงินที่ต้องการคำนวณ</label>
          <div id="myDropdown">
              <select class="form-control" id="flag">
                  <option data-imagesrc="img/usd.svg" value="usd">USD</option>
                  <option data-imagesrc="img/jpy.svg" value="jpy">JPY</option>
                  <option data-imagesrc="img/krw.svg" value="krw">KRW</option>
                  <option data-imagesrc="img/gbp.svg" value="gbp">GBP</option>
                  <option data-imagesrc="img/eur.svg" value="eur">EUR</option>
              </select>
          </div>
          <input class="inph" type="hidden" name="type">
        <button class="btn btn-outline-success btn-fixed btn-submit" type="submit" name="button">Calculate</button>
      </form>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>\
    <script>
        var x;

        $('#myDropdown').ddslick({
            onSelected: function(selectedData){
                //console.log(selectedData);
                x=selectedData.selectedData.value;
                //console.log(x);
            }
        });

        $(".btn-submit").click(function(){
            $(".inph").attr({
                'value': x ,
            });
        });
    </script>
  </body>
</html>
