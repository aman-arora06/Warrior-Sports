

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WARRIOR SPORTS</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="warrior.css">
       <link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Mogra&display=swap" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <script type="text/javascript">
		$(document).on('click','.add_another_field',function(e){
			e.preventDefault();
      var count = 2;
      let demo = $(".increase");
      if(!(demo.children().length) >= 2){
          demo.append(" "+'<span class="counter">'+ count + "</span>");
        }
			$(".counter").html(function(i,val){
				return +val+1;
			});
		});


    $(document).on('click','.remove_another_field',function(e){
      e.preventDefault();
      $(".test").hide();
      $(".add_another_field").hide();
      $(".remove_another_field").hide();

      });
      $(document).ready(function(){
  $("input[type='radio']").change(function(){
  if($(this).val()=="Married")
  {
  $(".MA").show();
  }
  if($(this).val()=="Unmarried")
  {
  $(".MA").hide();
}
 });
});
var RacquetBrand=[];
var RacquetModel=[];
var StringType=[];
var StringTension=[];
var StringColor=[];
var Remarks=[];
var Amount=[];
var Cover=[];
function addUsers(){
  var inputText=document.getElementById('RacquetBrand').value;
  var inputText1=document.getElementById('RacquetModel').value;
  var inputText2=document.getElementById('StringType').value;
  var inputText3=document.getElementById('StringTension').value;
  var inputText4=document.getElementById('StringColor').value;
  var inputText5=document.getElementById('Remarks').value;
  var inputText6=document.getElementById('RacquetAmount').value;
  var inputText7=document.getElementById('RacquetCover').value;
  RacquetBrand.push(inputText);
    var pval="";
  for(i=0;i<RacquetBrand.length;i++){
    pval=pval+RacquetBrand[i]+",";
  }

  RacquetModel.push(inputText1);
    var pval1="";
  for(i=0;i<RacquetModel.length;i++){
    pval1=pval1+RacquetModel[i]+",";
  }
  StringType.push(inputText2);
    var pval2="";
  for(i=0;i<StringType.length;i++){
    pval2=pval2+StringType[i]+",";
  }
  StringTension.push(inputText3);
    var pval3="";
  for(i=0;i<StringTension.length;i++){
    pval3=pval3+StringTension[i]+",";
  }
  StringColor.push(inputText4);
    var pval4="";
  for(i=0;i<StringColor.length;i++){
    pval4=pval4+StringColor[i]+",";
  }
  Remarks.push(inputText5);
    var pval5="";
  for(i=0;i<Remarks.length;i++){
    pval5=pval5+Remarks[i]+",";
  }
  Amount.push(parseInt(inputText6));
    var pval6="";
  for(i=0;i<Amount.length;i++){
    pval6=pval6+Amount[i]+",";
  }
  Cover.push(inputText7);
    var pval7="";
  for(i=0;i<Cover.length;i++){
    pval7=pval7+Amount[i]+",";
  }

}
function setArrayToHidden(){
  document.getElementById('Brand').value=RacquetBrand;
  document.getElementById('Model').value=RacquetModel;
  document.getElementById('String').value=StringType;
  document.getElementById('Color').value=StringColor;
  document.getElementById('Tension').value=StringTension;
  document.getElementById('Amount').value=Amount;
  document.getElementById('Marks').value=Remarks;
  document.getElementById('Cover').value=Cover;

}



      </script>


  </head>
  <body>
    <nav  style="margin-bottom:20px"class="navbar navbar-expand-lg navbar-light bg-#a0ffe6">
    <!-- <img src="warriorSportsLogo.jpg" alt="" height="100px"> -->
  <a  style="padding-left:20px; font-family:Lobster;font-size:50px; color:green"class="navbar-brand" href="#">Warrior Sports<br><span style="color:#00005c;font-family:Mogra"><h5 style="margin-left:30px">---BE RESTLESS--- </h5><h5>Computerised Racquet Stringing <br>   Equipments & accessories</span></h5></a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul style="margin-left:200px"class="navbar-nav ">
      <li class="nav-item">
        <a style="font-size: 1.5rem; color:green; font-family:Mogra"class="nav-link" href="#Personal">Personal/</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 1.5rem;color:green;font-family:Mogra"class="nav-link" href="#Informative">Informative/</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 1.5rem;color:green;font-family:Mogra"class="nav-link" href="#Social">Social</a>
      </li>

    </ul>
  </div>
</nav>


 <form class="" action="index.php" method="POST">
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-4">

              <section id="Personal">
          <h3 style="padding-bottom:20px" >Personal</h3>
          <label>Title/Name</label>
          <select name="title">
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Miss">Miss.</option>
            <option value="Dr.">Dr.</option>
            <option value="Coach">Coach</option>
            <option value="Prof">Prof</option>

          </select>
          <input type="text" name="playersName" value="">

          <br><br>

          <label>Gender</label><br>
          <input type="radio" name="sex" value="Male">
          Male
          <input type="radio" name="sex" value="Female">
          Female<br><br>


            <label>Stadium/Club</label>
              <input type="text" name="stadium" value="">
              <br><br>
              <label>Telephone no.1</label>
                <input type="tel" name="tel1" value="">
                <br><br>
                <label>WhatsAppNo:</label>
                  <input type="tel" name="tel2" value="">
                  <br><br>
</section>

                  </div>



                    <div class="col-lg-4">
                       <section id="Informative">
                    <h3 style="padding-bottom:20px">Informative</h3>

                         <label >Sports</label>
                      <select name="game">
                        <option value="Badminton">Badminton</option>
                        <option value="Tennis">Tennis</option>
                        <option value="Squash">Squash</option>
                        <option value="Other">Other</option>

                      </select><br><br>



                        <div class="test">
                            <p class="increase include" style="Font-family:bold">Details of Racquet :<span class="counter">1</span></p>
                        <label class="include"> Racquet Brand</label>
                        <input class="include" onfocus="this.value=''"type="text" name="brand" id="RacquetBrand" value=""><br><br>

                               <input id="Brand" type="hidden" name="hidden_js_brand">
                                <label class="include" >Racquet Model</label>
                            <input class="include" onfocus="this.value=''"type="text" name="model" id="RacquetModel" value=""><br><br>

                               <input id="Model" type="hidden" name="hidden_js_model">
                            <label class="include">String Type </label>
                              <input class="include"  onfocus="this.value=''"type="text" name="string"id="StringType"value="">
                              <br><br>

                               <input id="String" type="hidden" name="hidden_js_string">
                            <label class="include">String Tension </label>
                              <input class="include"  onfocus="this.value=''"   type="text" name="tension" id="StringTension" value="">
                            <br><br>

                              <input id="Tension" type="hidden" name="hidden_js_tension">
                            <label class="include">String Color </label>
                              <input class="include" onfocus="this.value=''"  type="text" name="color" id="StringColor"value="">
                            <br><br>

                              <input id="Color" type="hidden" name="hidden_js_color">
                            <label class="include">Racquet cover</label>
                              <select id="RacquetCover"class="include" name="des">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                              <input id="Cover" type="hidden" name="hidden_js_cover">

                            <br><br>
                            <label>Amount</label>
                              <input onfocus="this.value=''"  type="text" name="BA" value="" id="RacquetAmount">
                            <input id="Amount" type="hidden" name="hidden_js_amount">
                            <input id="Tamount" type="hidden" name="hidden_js_Tamount">
                            <br><br>
                            <label>Remarks</label>
                              <input type="text"  onfocus="this.value=''"name="remarks" value=""id="Remarks"><br>

                                 <input id="Marks" type="hidden" name="hidden_js_marks">
    </div><br>


                              <input type="button" onclick="addUsers();" class="add_another_field"name="addRacquet"value="Add Racquet"/>
                            <button   class="remove_another_field"style="margin-left:50px">No</button><br><br>

                            <label>CollectionDate</label>
                              <input    type="date" name="Colldate" value="">
                            <br><br>
                            <label>Exp.DeliveryDate  </label>
                              <input   type="date" name="exdate" value="">
                          <br><br>


                          </section>

                          </div>






        <div class="col-lg-4">

            <section id="Social">
          <h3 style="padding-bottom:20px">Social</h3>
          <label>Date of birth</label>
          <input type="date" name="DOB" value="">
          <br><br>
          <Label>Marital status</label><br>
          <input  class="marriage"type="radio" name="maritalStatus" value="Unmarried">
          Unmarried
          <input  class="marriage"type="radio" name="maritalStatus" value="Married">
          Married<br><br>
          <label  class="MA"style="display:none">Marriage Anniversary</label>
          <input  class="MA"style="display:none" type="date" name="MOA" value="marriage_anni">
          <br><br>
          <label> Email-id</label>
            <input type="email" name="email" value="">
          <br><br>

          <label> Facebook</label>
            <input type="text" name="fb" value="">
          <br><br>
          <label> Instagram id</label>
            <input type="text" name="insta" value="">
          <br><br>

</section>

        </div>
      </div>
    </div>







    <div class="container" style="text-align:center">

     <input  class="btn btn-primary btn-lg"type="Submit" name="submit" value="Submit" onclick="setArrayToHidden()">


   </div>
 </form>
 <button style="margin-left:54%" onclick="window.location.href='/my_First_client/ready.php'"class="btn btn-danger btn-lg"  value="Report">Report</button>



  </body>


</html>
<?php
$conn=mysqli_connect('localhost','neVISA','neVISA@2020','warriorsports');

if(!$conn){
  echo 'connection error';
}
if(isset($_POST['submit'])){
$Title=$_POST['title'];
$name=$_POST['playersName'];
$gender=$_POST['sex'];
$Arena=$_POST['stadium'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$Sport=$_POST['game'];
$data=$_POST['hidden_js_brand'];
$data1=$_POST['hidden_js_model'];
$data2=$_POST['hidden_js_string'];
$data3=$_POST['hidden_js_tension'];
$data4=$_POST['hidden_js_color'];
$data5=$_POST['hidden_js_marks'];
$data6=$_POST['hidden_js_amount'];
$Tamount=explode(',',$data6);
$TotalAmount=array_sum($Tamount);
$data7=$_POST['hidden_js_cover'];
$del_date=$_POST['exdate'];
$DOB=$_POST['DOB'];
$Marriage_anni=$_POST['MOA'];
$email=$_POST['email'];
$Fb=$_POST['fb'];
$Insta=$_POST['insta'];
$new_date=date("d-m-Y",strtotime($del_date));

 $sql="INSERT INTO Informative(Title,Name,Stadium,phone1,phone2,Sports,
   RacquetBrand,RacquetModel,StringType,
   StringTension,StringColor,RacquetCover,CollectionDate,ExpDeliveryDate,
 Amount,Remarks,TotalAmount)
 VALUES('$Title','$name','$Arena','$tel1','$tel2','$Sport','$data',
   '$data1','$data2','$data3','$data4','$data7',NOW(),
   '$del_date','$data6','$data5','$TotalAmount')";

 if(!mysqli_query($conn,$sql)){
   echo " not inserted";
 }else{
   echo "inserted";
 }
 if($data7="yes"){
   $cover="WithCover";

 }else{
   $cover="WithoutCover";
 }

 $details="INSERT INTO social(DateOfBirth,MarriageAnniversary,Email,Facebook,Instagram)
 VALUES('$DOB','$Marriage_anni','$email','$Fb','$Insta')";
 // if(!mysqli_query($conn,$details)){
 //    echo " not inserted";
 // }else{
 //    echo "inserted";
 // }
 if(isset($_POST['submit']))
 {
   $brand=explode(",",$data);
   print_r($brand);
   $model=explode(",",$data1);
   print_r($model);
   $stringtype=explode(",",$data2);
   print_r($stringtype);
   $model_count=count($model);
   $brand_count=count($brand);
   $stringtype_count=count($stringtype);
   if($model_count>1 && $brand_count>1 && $stringtype>1){
      $collected="Dear ".$Title." ".$name. "\nWe've recieved your ".$brand_count." ".$Sport." Racquets for Stringing with following Details: \n";
      for($i=0;$i<$model_count;$i++){
        $j=$i+1;
        $collected.=$j.".".$brand[$i]."/".$model[$i]."/". $stringtype[$i]."\n";
      }
      $collected.="Your Racquets will be ready by EOD ".date('d-m-Y',strtotime($del_date))." and Total Charges payable will be Rs.".$TotalAmount." only.\nThanks for visiting Warrior Sports India.\n.";
  }
  else{

   $collected="Dear ".$Title." ".$name. " \nWe've Recieved Your ".$Sport." Racquet ".$data." ".$data1." ".$cover." for stringing on ".date('d-m-Y').". Your Racquet will be strung with ".$data2." at ".$data3." LBS tension Upon Your Request.Your Racquet will be ready by ".$new_date." and charges will be Rs.".$TotalAmount." only.\nThanks for visiting WARRIOR SPORTS (INDIA). ";

    }
    echo $collected;
   $url="http://alerts.prioritysms.com/api/web2sms.php";
   $message = urlencode($collected);// urlencode your message
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
   curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Acc1ba8bf60dc73d8fc9a417faba6557a&to=$tel1&sender=WRRIOR&message=$message");// post data
   // query parameter values must be given without squarebrackets.
    // Optional Authentication:
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   $result = curl_exec($curl);
   curl_close($curl);
   echo $result;
}
}
?>
