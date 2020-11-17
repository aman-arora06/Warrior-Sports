<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WARRIOR SPORTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript">
        // function GetCollected() {
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
        //               message += row.cells[2].innerHTML;
        //             message += "\nWe have recieved your : " + row.cells[6].innerHTML;
        //             message += " Racquets " + row.cells[8].innerHTML;
        //             message += "\nfor Stringing on" +row.cells[13].innerHTML;
        //             message += "\nYour Racquet will be strung with" +row.cells[9].innerHTML
        //             message +="\n"+row.cells[10].innerHTML+"Lbs tension on Your request.\n";
        //             message += "Your Racquet will be ready by " +row.cells[14].innerHTML;
        //             message += "and charges will be Rs." +row.cells[15].innerHTML;
        //             message += "\nThanks for visiting WSI";
        //
        //
        //         }
        //     }


            //alert(message);
            //alert(name);
        //}
        // function GetReady() {
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
        //               message += row.cells[2].innerHTML;
        //             message += "\nYour : " + row.cells[6].innerHTML;
        //             message += " Racquet " + row.cells[8].innerHTML;
        //             message += "\n has been strung with" +row.cells[10].innerHTML;
        //             message += "\nLBS tension and it can be collected on/after" +row.cells[14].innerHTML;
        //             message +="\n from our office between 10:30-19.00(All working Days)";
        //             message += "\nYour final bill for this STRINGING is " +row.cells[15].innerHTML;
        //             message += "\nThanks for visiting WSI\nKEEP WINNING";
        //
        //         }
        //     }
        //     alert(message);
        //     //alert(name);
        // }
         function GetDelivered() {
            document.getElementById('other-name').style.display = "block";
            document.getElementById('other-number').style.display = "block";
            document.getElementById('other-deliver').style.display = "block";

}






    </script>
    <?php echo "<script>document.writeln(name);</script>";
    ?>
  </head>
  <body>

    <nav  style="margin-bottom:20px"class="navbar navbar-expand-lg navbar-light bg-#a0ffe6">
      <!-- <img src="warriorSportsLogo.jpg" alt="" height="100px"> -->
  <a  style="padding-left:20px; font-family:Lobster;font-size:50px; color:green"class="navbar-brand" href="#">Warrior Sports<br><span style="color:#00005c;font-family:Mogra"><h5 style="margin-left:30px">---BE RESTLESS--- </h5><h5>Computerised Racquet Stringing <br>   Equipments & accessories</span></h5></a>

  </nav>
  <form class="" action="ready.php" method="post">


  </form>


  <?php
$conn=mysqli_connect('localhost','neVISA','neVISA@2020','warriorsports');

if(!$conn){
  echo 'connection error';
}


$sql="SELECT Serial_no,Title,Name,Stadium,Sports,phone1,phone2,RacquetBrand,RacquetModel,
StringType,StringTension,StringColor,RacquetCover,
CollectionDate,ExpDeliveryDate,TotalAmount FROM informative";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  ?> <form class="" action="ready.php" method="POST">

  <table style='border: 1px solid black' id="Table1"><tr style='border: 1px solid black'><th style='border: 1px solid black'></th>
  <th style='border: 1px solid black'>Serial_no<th style='border: 1px solid black'>Title</th><th style='border: 1px solid black'>Name</th><th style='border: 1px solid black'>Stadium</th>
  <th style='border: 1px solid black'>phone1</th><th style='border: 1px solid black'>phone2</th>
  <th style='border: 1px solid black'>Sports</th><th style='border: 1px solid black'>RacquetBrand</th>
  <th style='border: 1px solid black'>RacquetModel</th><th style='border: 1px solid black'>StringType</th>
  <th style='border: 1px solid black'>StringTension</th><th style='border: 1px solid black'>StringColor</th>
  <th style='border: 1px solid black'>RacquetCover</th><th style='border: 1px solid black'>CollectionDate</th>
  <th style='border: 1px solid black'>ExpDeliveryDate</th><th style='border: 1px solid black'>TotalAmount</th> </tr>
  <?php
  while($row = $result->fetch_assoc()) {
    ?><tr><td style="border: 1px solid black"><input type="checkbox" value="<?php echo $row['Serial_no']?><?php echo "*"?><?php echo $row['Title']?><?php echo "*"?><?php echo $row['Name']?><?php echo "*"?><?php echo $row['Stadium'] ?><?php echo "*"?>
      <?php echo $row['phone1'] ?>
      <?php echo "*"?><?php echo $row['phone2'] ?><?php echo "*"?><?php echo $row['Sports'] ?>
      <?php echo "*"?><?php echo $row['RacquetBrand'] ?><?php echo "*"?><?php echo $row['RacquetModel'] ?>
      <?php echo "*"?><?php echo $row['StringType'] ?><?php echo "*"?><?php echo $row['StringTension'] ?><?php echo "*"?><?php echo $row['StringColor'] ?>
      <?php echo "*"?><?php echo $row['RacquetCover'] ?><?php echo "*"?><?php echo $row['CollectionDate'] ?><?php echo "*"?><?php echo $row['ExpDeliveryDate'] ?>
      <?php echo "*"?><?php echo $row['TotalAmount'] ?>" name="ur"/>
      <td style="border: 1px solid black"><?php echo $row['Serial_no'] ?></td>
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

     <input type="Submit" name="self-deliver" value="Self-Delivery"  />
     <input type="button" name="delivered" value="other-Delivery" onclick="GetDelivered()" />

     <input  id="other-name" style="display: none;"type="text" name="other-name" value="Name" placehoder="Enter your name" />
     <input id="other-number" style="display: none;"type="text" name="other-number" value="Number" placehoder="Enter your number" />
     <input id="other-deliver" style="display: none;"type="submit" name="other-delivered" value="other-delivered" />

  </form>



<?php } ?>



<?php
$conn=mysqli_connect('localhost','neVISA','neVISA@2020','warriorsports');

if(!$conn){
  echo 'connection error';
 }
 //else{
//   echo 'no error';
// }


if(isset($_POST['ready']))
{
  $rmess=$_POST['ur'];
  //echo $rmess;
  $mess=explode("*",$rmess);
  //print_r($mess);
  $brand=explode(",",$mess[7]);

  $brand_count=count($brand);

 $model=explode(",",$mess[8]);

 $model_count=count($model);
 $stringtype=explode(",",$mess[9]);
 if($model_count>1 && $brand_count>1 && $stringtype>1){
    $ready="Dear ".$mess[1]." ".$mess[2]. "\nYour ".$brand_count." ".$mess[6]."Racquets for Stringing with following Details: \n";
    for($i=0;$i<$model_count;$i++){
      $j=$i+1;
      $ready.=$j.".".$brand[$i]."/".$model[$i]."/". $stringtype[$i]."\n";
    }
    $ready.="Are Strung and can be Collected from our store between 10:30-19:00(All working Days) ".date('d-m-Y',strtotime($mess[13]))." and Total Charges payable will be Rs.".$mess[15]." only.\nThanks for visiting Warrior Sports India.\n TX_".$mess[0].".";


 }else{
   $ready="Dear ".$mess[1]." ".$mess[2]. "\nYour ".$mess[6]."Racquet ".$mess[7]." ".$mess[8]." has been Strung with ".$mess[9]." @ ".$mess[10]." Lbs Tension & it can be collected on/after ".date("d-m-Y", strtotime($mess[14]))." from our STORE between 10:30-19:00 (All working days). Your bill for this STRINGING is Rs.".$mess[15]." only.\nThanks for Choosing WARRIOR SPORTS (INDIA).\n Keep Winning\nSerial_no ".$mess[0].".";
 }

    //echo $ready;

    $message = urlencode($ready);
    $url="http://alerts.prioritysms.com/api/web2sms.php";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Acc1ba8bf60dc73d8fc9a417faba6557a&to=$mess[4]&sender=WRRIOR&message=$message");// post data

    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;


}


if(isset($_POST['self-deliver']))

{

    $dmess=$_POST['ur'];

   $mess=explode("*",$dmess);
    $udate=date('Y-m-d');
    echo $udate;
    echo $mess[0];
     $sql="UPDATE informative SET ExpDeliveryDate='$udate' WHERE Serial_no='$mess[0]'";
     $result = $conn->query($sql);
     if(!mysqli_query($conn,$sql)){
       echo " not inserted";
     }else{
       echo "inserted";
     }
 //echo $mess[3];
 $brand=explode(",",$mess[7]);

 $brand_count=count($brand);

$model=explode(",",$mess[8]);

$model_count=count($model);
$stringtype=explode(",",$mess[9]);

if($model_count>1 && $brand_count>1 && $stringtype>1){
   $deliver="Dear ".$mess[1]." ".$mess[2]. "\nYour ".$brand_count." ".$mess[6]."Racquets for Stringing with following Details: \n";
   for($i=0;$i<$model_count;$i++){
     $j=$i+1;
     $deliver.=$j.".".$brand[$i]."/".$model[$i]."/".$stringtype[$i]."\n";
   }
   $deliver.="Are delivered to Yourself on".date('d-m-Y')." from our store on ".date('d-m-Y')."\nThanks for visting WARRIOR SPORTS (INDIA)-KEEP WINNING.\n TX_".$mess[0].".";


}else{
  $deliver="Dear ".$mess[1]." ".$mess[2]. "\nYour ".$mess[6]."Racquet ".$mess[7]." ".$mess[8]." which was Strung with ".$mess[9]." @ ".$mess[10]." Lbs Tension Delivered on ".date("d-m-Y")." from our STORE on".date('d-m-Y')."\nThanks for Patronizing WARRIOR SPORTS (INDIA).\n Keep Winning\nTx-".$mess[0].".";
}
   //echo $deliver;
  // $url="http://alerts.prioritysms.com/api/web2sms.php";
  // $message = urlencode($deliver);// urlencode your message
  // $curl = curl_init();
  // curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
  // curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Acc1ba8bf60dc73d8fc9a417faba6557a&to=$mess[4]&sender=WRRIOR&message=$message");// post data
  // // query parameter values must be given without squarebrackets.
  //  // Optional Authentication:
  // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  // curl_setopt($curl, CURLOPT_URL, $url);
  // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  // $result = curl_exec($curl);
  // curl_close($curl);
  // echo $result;
}
if(isset($_POST['other-delivered']))
{
    $dmess=$_POST['ur'];
    $name=$_POST['other-name'];
    $number=$_POST['other-number'];
   $mess=explode("*",$dmess);
   $brand=explode(",",$mess[7]);

   $brand_count=count($brand);

  $model=explode(",",$mess[8]);

  $model_count=count($model);
  $stringtype=explode(",",$mess[9]);

  if($model_count>1 && $brand_count>1 && $stringtype>1){
     $deliver="Dear ".$mess[1]." ".$mess[2]. "\nYour ".$brand_count." ".$mess[6]."Racquets for Stringing with following Details: \n";
     for($i=0;$i<$model_count;$i++){
       $j=$i+1;
       $deliver.=$j.".".$brand[$i]."/".$model[$i]."/".$stringtype[$i]."\n";
     }
     $deliver.="Are delivered to ".$name." on ".date('d-m-Y')." from our store on ".date('d-m-Y')."\nThanks for visting WARRIOR SPORTS (INDIA)-KEEP WINNING.\n TX_".$mess[0].".";
}
else{
 //echo $mess[3];
  $deliver="Dear ".$mess[1]." ".$mess[2]. "\nYour ".$mess[6]."Racquet ".$mess[7]." ".$mess[8]."which was Strung  with ".$mess[9]." @ ".$mess[10]." LBS Tension is delivered to ".$name." on ".date('d-m-Y').". From our office on ".date('d-m-Y'). ". Thanks for patronizing WARRIOR SPORTS (INDIA)!!!\n Keep Winning.\nSerial_no ".$mess[0].".";
}
//echo $deliver;
  $url="http://alerts.prioritysms.com/api/web2sms.php";
  $message = urlencode($deliver);// urlencode your message
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
  curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Acc1ba8bf60dc73d8fc9a417faba6557a&to=$mess[4]&sender=WRRIOR&message=$message");// post data
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
