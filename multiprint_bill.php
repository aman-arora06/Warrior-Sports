<?php


$conn=mysqli_connect('localhost','root','Champion1@','warriorsports');

if(!$conn){
echo 'connection error';
}


$sql="SELECT Serial_no,Title,Name,Stadium,Sports,phone1,phone2,RacquetBrand,RacquetModel,
StringType,StringTension,StringColor,RacquetCover,
CollectionDate,ExpDeliveryDate,TotalAmount FROM Informative WHERE Serial_no='85'";
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
@page{
  size:4.1in 2in;
  /* size:portrait; */
  margin-left:.125in;
  width:100%;
  height:100%;
  position:absolute;
  top:0px;
  bottom:0px;
  margin:auto;
  margin-top:0px;
}

#printable, #printable *{
 visibility: visible;
}
#printable {
 width:100%;
 height:100%;
 margin-top:0px;
  overflow: hidden;



}

.page-break{
  display:block; page-break-after:always;
}
.box{
  display:block;
  box-sizing:border-box;
  width:100%;
  height:100%;
  position:absolute;
  top:0px;
  bottom:0px;
  margin:auto;
  margin-top:0px;

}
}
</style>

          <?php
          while($row = $result->fetch_assoc()) {
            ?>

        <?php
        $cdate=$row['CollectionDate'];

        $c_date=explode(" ",$cdate);

        $newdate=date("d/m/Y",strtotime($c_date[0]));
        //echo $newdate;
        $ED=$row['ExpDeliveryDate'];
        $EOD=date("d/m/Y",strtotime($ED));
        $Rbrand=$row['Sports'];
        // $NRbrand=explode(",",$Rbrand);
        $game=strtoupper($Rbrand);
        $cap=substr($game,0,3);
        $Name=$row['Name'];
        $NAME=strtoupper($Name);
        $stdm=$row['Stadium'];
        $cov=$row['RacquetCover'];
        $brand=$row['RacquetBrand'];
        $RBbrand=explode(',',$brand);
        $brandl=count($RBbrand);
        $str=$row['StringType'];
        $col=$row['StringColor'];
        $Ten=$row['StringTension'];
        $model=$row['RacquetModel'];
        $Rmodel=explode(',',$model);
        $modell=count($Rmodel);
        $COV=strtoupper($cov);
        $STDM=strtoupper($stdm);
        $BRAND=strtoupper($brand);
        $COL=strtoupper($col);
        $TEN=strtoupper($Ten);
        $STR=strtoupper($str);
        $MODEL=strtoupper($model);
        // $Rlen=count($NRbrand);


     for($i=0;$i<$brandl;$i++){

          echo"
          <body>
          <div  id=Printable class=box>

              <table border style =width:95%;margin-left:5px;border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;>

                  <th style=border-bottom: solid 1px;text-align:center;border-top-width:0px;border-left-width:0px;border-right-width:0px;>
                    <b style=font-size:20px;>World of Warriors</b></th><tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><b style=font-size:12px;font-family:Courier;>DATE OF RECEIPT: <b style=font-family:Courier;font-size:12px;>".$newdate."<b style=float:right;font-family:Courier;font-size:12px;> TX:".$row['Serial_no']."</td></tr>
        <tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;> <b style=font-family:Courier;font-size:12px;>NAME: ".$NAME."<b style=float:right;font-family:Courier;font-size:12px;>TEL: ".$row['phone1']."</td></tr>
        <tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><b style=font-family:Courier;font-size:12px;>CLUB: ".$STDM."</td><tr>
        <tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><b style=font-family:Courier;font-size:12px;>RQT DETAILS: ".$cap." / ".$RBbrand[$i]." ".$Rmodel[$i]."</td><tr>
        <tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><b style=font-family:Courier;font-size:12px;>STR/COL/TEN: ".$STR." / ".$COL."<b style='border:solid 1px;font-family:Courier;font-size:10.5px;float:right;'>".$TEN." LBS</td><tr>
       <tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><b style=font-family:Courier;font-size:12px;>EXP DELIVERY DATE: ".$EOD."<b style=float:right;font-family:Courier;font-size:12px;> Cover: ".$COV."</td><tr>
        <tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><b style=font-family:Courier;font-size:12px;>AMOUNT: ".$row['TotalAmount']."/- ONLY.</td><tr>
        <tr><td style=border-top-width:0px;border-left-width:0px;border-right-width:0px;border-bottom-width:0px;><b style=font-family:Courier;font-size:9px;>Powered by: WARRIOR SPORTS (INDIA) ND +91-8076683186/9582704145</td></tr>

        </div>
        </table>
        <div class='page-break'></div>
        <hr>

        </body>
";
         }
       }?>







<input type="button" onclick="window.print()"value="print now">
