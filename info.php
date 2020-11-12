<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WARRIOR SPORTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript">
        function GetCollected() {
            var grid = document.getElementById("Table1");
            var checkBoxes = grid.getElementsByTagName("INPUT");
            var message = "";
            var name="";
            for (var i = 0; i < checkBoxes.length; i++) {
                if (checkBoxes[i].checked) {
                    var row = checkBoxes[i].parentNode.parentNode;
                    //name=row.cells[1].innerHTML;
                    //window.location.href="ready.php?ser="+name
                    message += "Dear "+row.cells[1].innerHTML;
                      message += row.cells[2].innerHTML;
                    message += "\nWe have recieved your : " + row.cells[6].innerHTML;
                    message += " Racquets " + row.cells[8].innerHTML;
                    message += "\nfor Stringing on" +row.cells[13].innerHTML;
                    message += "\nYour Racquet will be strung with" +row.cells[9].innerHTML
                    message +="\n"+row.cells[10].innerHTML+"Lbs tension on Your request.\n";
                    message += "Your Racquet will be ready by " +row.cells[14].innerHTML;
                    message += "and charges will be Rs." +row.cells[15].innerHTML;
                    message += "\nThanks for visiting WSI";


                }
            }


            alert(message);
            //alert(name);
        }
        function GetReady() {
            var grid = document.getElementById("Table1");
            var checkBoxes = grid.getElementsByTagName("INPUT");
            var message = "";
            var name="";
            for (var i = 0; i < checkBoxes.length; i++) {
                if (checkBoxes[i].checked) {
                    var row = checkBoxes[i].parentNode.parentNode;
                    //name=row.cells[1].innerHTML;
                    //window.location.href="ready.php?ser="+name
                    message += "Dear "+row.cells[1].innerHTML;
                      message += row.cells[2].innerHTML;
                    message += "\nYour : " + row.cells[6].innerHTML;
                    message += " Racquet " + row.cells[8].innerHTML;
                    message += "\n has been strung with" +row.cells[10].innerHTML;
                    message += "\nLBS tension and it can be collected on/after" +row.cells[14].innerHTML;
                    message +="\n from our office between 10:30-19.00(All working Days)";
                    message += "\nYour final bill for this STRINGING is " +row.cells[15].innerHTML;
                    message += "\nThanks for visiting WSI\nKEEP WINNING";

                }
            }
            alert(message);
            //alert(name);
        }
        // function GetDelivered() {
        //     var grid = document.getElementById("Table1");
        //     var checkBoxes = grid.getElementsByTagName("INPUT");
        //     var message = "";
        //     var name="";
        //     for (var i = 0; i < checkBoxes.length; i++) {
        //         if (checkBoxes[i].checked) {
        //             var row = checkBoxes[i].parentNode.parentNode;
        //             //name=row.cells[1].innerHTML;
        //             //window.location.href="ready.php?ser="+name
        //             message += "Dear "+row.cells[1].innerHTML;
        //             message += "\nWe have recieved your : " + row.cells[5].innerHTML;
        //             message += " Racquets " + row.cells[7].innerHTML;
        //             message += "\nfor Stringing on" +row.cells[12].innerHTML;
        //             message += "\nYour Racquet will be strung with" +row.cells[8].innerHTML
        //             message +="\n"+row.cells[9].innerHTML+"Lbs tension on Your request.\n";
        //             message += "Your Racquet will be ready by " +row.cells[13].innerHTML;
        //             message += "and charges will be Rs." +row.cells[14].innerHTML;
        //             message += "\nThanks for visiting WSI";
        //         }
        //     }
        //     alert(message);
            //alert(name);

        }

    </script>
    <?php echo "<script>document.writeln(name);</script>";
    ?>
  </head>
  <body>

    <nav  style="margin-bottom:20px"class="navbar navbar-expand-lg navbar-light bg-#a0ffe6">
      <img src="warriorSportsLogo.jpg" alt="" height="100px">
  <a  style="padding-left:20px; font-family:Lobster;font-size:50px; color:green"class="navbar-brand" href="#">Warrior Sports<br><span style="color:#00005c;font-family:Mogra"><h5>Computerised Racquet Stringing <br>   Equipments & accessories</span></h5></a>

  </nav>


  <?php
$conn=mysqli_connect('localhost','neVISA','neVISA@2020','warriorsports');

if(!$conn){
  echo 'connection error';
}


$sql="SELECT Title,Name,Stadium,Sports,phone1,phone2,RacquetBrand,RacquetModel,
StringType,StringTension,StringColor,RacquetCover,
CollectionDate,ExpDeliveryDate,TotalAmount FROM informative";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  ?> <form class="" action="ready.php" method="POST">

  <table style='border: 1px solid black' id="Table1"><tr style='border: 1px solid black'><th style='border: 1px solid black'></th>
  <th style='border: 1px solid black'>Title</th><th style='border: 1px solid black'>Name</th><th style='border: 1px solid black'>Stadium</th>
  <th style='border: 1px solid black'>phone1</th><th style='border: 1px solid black'>phone2</th>
  <th style='border: 1px solid black'>Sports</th><th style='border: 1px solid black'>RacquetBrand</th>
  <th style='border: 1px solid black'>RacquetModel</th><th style='border: 1px solid black'>StringType</th>
  <th style='border: 1px solid black'>StringTension</th><th style='border: 1px solid black'>StringColor</th>
  <th style='border: 1px solid black'>RacquetCover</th><th style='border: 1px solid black'>CollectionDate</th>
  <th style='border: 1px solid black'>ExpDeliveryDate</th><th style='border: 1px solid black'>TotalAmount</th> </tr>
  <?php
  while($row = $result->fetch_assoc()) {
    ?><tr><td style="border: 1px solid black"><input type="checkbox" value="<?php echo $row['Title']?><?php echo "*"?><?php echo $row['Name']?><?php echo "*"?><?php echo $row['Stadium'] ?><?php echo "*"?>
      <?php echo $row['phone1'] ?>
      <?php echo "*"?><?php echo $row['phone2'] ?><?php echo "*"?><?php echo $row['Sports'] ?>
      <?php echo "*"?><?php echo $row['RacquetBrand'] ?><?php echo "*"?><?php echo $row['RacquetModel'] ?>
      <?php echo "*"?><?php echo $row['StringType'] ?><?php echo "*"?><?php echo $row['StringTension'] ?><?php echo "*"?><?php echo $row['StringColor'] ?>
      <?php echo "*"?><?php echo $row['RacquetCover'] ?><?php echo "*"?><?php echo $row['CollectionDate'] ?><?php echo "*"?><?php echo $row['ExpDeliveryDate'] ?>
      <?php echo "*"?><?php echo $row['TotalAmount'] ?>"name="ur">
    <td style="border: 1px solid black"><?php echo $row['Title'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['Name'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['Stadium'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['phone1'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['phone2'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['Sports'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['RacquetBrand'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['RacquetModel'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['StringType'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['StringTension'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['StringColor'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['RacquetCover'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['CollectionDate'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['ExpDeliveryDate']?></td>
    <td style="border: 1px solid black"><?php echo $row['TotalAmount'] ?></td></tr>
  <?php }?>
  </table>
  <br />


    <input type="Submit" name="ready" value="Ready" onclick="GetReady()" />
     <input type="Submit" name="deliver" value="Deliver" onclick="GetDelivered()" />
  </form>



<?php } ?>


<?php


if(isset($_POST['ready']))
{
  $rmess=$_POST['ur'];
  //echo $rmess;
  $mess=explode("*",$rmess);
  //print_r($mess);
 //echo $mess[3];
  $ready="Dear ".$mess[0]." ".$mess[1]. "\nYour ".$mess[5]."Racquet ".$mess[6]." ".$mess[7]." has been Strung  with ".$mess[8]." at ".$mess[9]." Lbs Tension and it can be collected on/after ".$mess[13]."from our office between 10:30-19:00 (All working days). Your final bill for this stringing is ".$mess[14].".\nThanks for visiting WARRIOR SPORTS (INDIA).\n Keep Winning";
    echo $ready;
    $url="http://alerts.prioritysms.com/api/web2sms.php";
    $message = urlencode($ready);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Acc1ba8bf60dc73d8fc9a417faba6557a&to=$mess[3]&sender=WRRIOR&message=$message");// post data

    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;


}
if(isset($_POST['deliver']))
{
    $dmess=$_POST['ur'];

   $mess=explode("*",$dmess);

 //echo $mess[3];
  $deliver="Dear ".$mess[0]." ".$mess[1]. "\nYour ".$mess[5]." Racquet ".$mess[6]." ".$mess[7]."  which was Strung  with ".$mess[8]." at ".$mess[9]." Lbs Tension was delivered on ".date('d-m-Y')." Thanks for patronizing WARRIOR SPORTS (INDIA)!!!\n Keep Winning ";
   echo $deliver;
  $url="http://alerts.prioritysms.com/api/web2sms.php";
  $message = urlencode($deliver);// urlencode your message
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
  curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Acc1ba8bf60dc73d8fc9a417faba6557a&to=$mess[3]&sender=WRRIOR&message=$message");// post data
  // query parameter values must be given without squarebrackets.
   // Optional Authentication:
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  echo $result;
}



?>
<?php
$conn->close();
?>


</body>

</html>
