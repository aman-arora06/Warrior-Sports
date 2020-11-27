<?php


$conn=mysqli_connect('localhost','root','Champion1@','warriorsports');

if(!$conn){
echo 'connection error';
}


$sql="SELECT Serial_no,Title,Name,Stadium,Sports,phone1,phone2,RacquetBrand,RacquetModel,
StringType,StringTension,StringColor,RacquetCover,
CollectionDate,ExpDeliveryDate,TotalAmount FROM Informative WHERE Serial_no='89'";
$result = $conn->query($sql);
?>
<style>
bode{
  width:8.5in;
  margin:0in .1875in;

}
@media print {
body {
 visibility:hidden;
 margin:0;
 padding:0;
}

#printable, #printable *{
 visibility: visible;
}
#printable {
 width:3in;
 height:1.5in;
 margin-top:0px;
 margin-right:.125in;
 overflow: hidden;
 @page{
   size:3in 1.5in;
   size:portrait;
 }
}

.page-break{
  display:block; page-break-after:always;
}
.box{
  display:block;
  box-sizing:border-box;
  width:95mm;
  height:48mm;
  float:left;
  text-align:left;
  vertical-align: top;

}
}
</style>
<body>
<div align="center" id="Printable" class="box">

    <table border style ="border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;">

        <th style="text-align:center;border-top-width:0px;border-left-width:0px;border-right-width:0px;">
          <b style="font-size:20px;">World of Warriors</b></th>
          <?php
          while($row = $result->fetch_assoc()) {
            ?>

        <?php
        $cdate=$row['CollectionDate'];
        $c_date=explode(" ",$cdate);
        $newdate=date("d/m/Y",strtotime($c_date[0]));
        $ED=$row['ExpDeliveryDate'];
        $EOD=date("d/m/Y",strtotime($ED));
        $Rbrand=$row['RacquetBrand'];
        $NRbrand=explode(",",$Rbrand);
        $Rlen=count($NRbrand);
        ?>


         <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo "DATE OF RECEIPT: ".$newdate." TX:".$row['Serial_no']?></td></tr>
        <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo "NAME: ".$row['Name']."    TEL: ".$row['phone1']?></td></tr>
        <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo "CLUB: ".$row['Stadium'] ?></td><tr>
        <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo "RACQUET DETAILS: ".$row['Sports']." ".$row['RacquetBrand']." ".$row['RacquetModel']?></td><tr>
        <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo"STRING/TENSION: ".$row['StringType']."/".$row['StringTension']."LBS"?></td><tr>
       <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo "EXP DELIVERY DATE: ".$EOD." Cover: ".$row['RacquetCover']?></td><tr>
        <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo"BILL: ".$row['TotalAmount']?></td><tr>
        <tr><td style=font-size:10px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><?php echo "Powered by: WARRIOR SPORTS(INDIA) +91 -80776683186/958270414"?></td></tr>



        <?php } ?>

</table>


</div>
<div class="page-break"></div>
</body>
<input type="button" onclick="window.print()"value="print now">
