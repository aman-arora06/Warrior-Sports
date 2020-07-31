<?php
$conn=mysqli_connect('localhost','neVISA','neVISA@2020','WarriorSports');

if(!$conn){
  echo 'connection error';
}
if(isset($_POST['submit'])){
$surname=$_POST['title'];
$name=$_POST['playersName'];
$birthyear=$_POST['DOB'];
$Arena=$_POST['stadium'];
$phone1=$_POST['tel1'];
$phone2=$_POST['tel2'];
$sports=$_POST['game'];
$RacquetBrand=$_POST['brand'];
// $RacquetModel=$_POST['model'];

if(count($_POST))
{
	$len = count($_POST['mytext']);
  $RacquetModel = "";
	for ($i=0; $i < $len; $i++)
	{

    $RacquetModel.=	$_POST['mytext'][$i] . ',' ;



	}

}

$string=$_POST['string'];
$tension=$_POST['tension'];
$color=$_POST['color'];
$cover=$_POST['des'];
$cdate=$_POST['Colldate'];
$Exdate=$_POST['exdate'];
$Bill=$_POST['BA'];
$Remarks=$_POST['remarks'];
$DOB=$_POST['DOB'];
$Marriage_anni=$_POST['MOA'];
$email=$_POST['email'];
$FB=$_POST['fb'];
$Insta=$_POST['insta'];
}


$sql1="INSERT INTO informative
(Name,Stadium,phone1,phone2,
  Sports,RacquetBrand,RacquetModel,StringType,
  Stringtension,StringColor,RacquetCover,
  CollectionDate,ExpDeliveryDate,Amount,Remarks)
VALUES('$name','$Arena','$phone1','$phone2',
  '$sports','$RacquetBrand','$RacquetModel','$string',
  '$tension','$color','$cover',
  '$cdate','$Exdate','$Bill','$Remarks');";
  $sql="INSERT INTO social
  (DateOfBirth,MarriageAnniversary,Email
  ,Facebook,Instagram)
  VALUES('$DOB','$Marriage_anni','$email','$FB','$Insta');";


if(!mysqli_query($conn,$sql)){
  echo " not instered";
}else{
  echo "inserted";
}
if(!mysqli_query($conn,$sql1)){
  echo " not instered";
}else{
  echo "inserted";
}

// header("refresh:2; url=index.php")
// mysqli_query($conn,$sql);

?>
!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WARRIOR SPORTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript"></script>
  </head>
  <body>
    <form class="" action="info.php" method="post">


    <p>DATE:<?php $cdate ?></p><br>
    <p>Name/Club: <?php echo "$name / $sports" ?></p><br>
    <p>Tel/E-MAIL:<?php echo "$phone1 /  $email"?></p><br>
    <p>RACQUET DETAILS: <?php  echo "$RacquetBrand/ $RacquetModel" ?></p><br>
    <P>STRING/TENSION/COVER:<?php echo "$string/ $tension/  $cover"?></p><br>
    <P>DT_OF_RECEIPT:<?php echo" $cdate Exp_DEL_DATE:  $Exdate"?></P><br>
    <P>Remarks:<?php  echo $Remarks?></p><br>
    <img src="warriorSportsLogo.jpg" alt=""><p><em>WARRIOR SPORTS(INDIA),New Delhi.</em></p>
     <input  class="btn btn-success" type="Submit" name="" value="Print" onclick="window.print()">
   </form>
</body>
</html>
