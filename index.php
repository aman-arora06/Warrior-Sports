
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
      //A function for button Single
      // $(document).ready(function(){
      // var wrap=$(".test");
      // var button=$(".add_field");
      // $(button).click(function(s) {
      // s.preventDefault();
      // $(wrap).append('<label>Racquet Brand</label><input type="text"/><br><br><label>Racquet Model</label><input type="text"/><br><br><label>String Type</label><input type="text"><br><br><label>String Tension</label><input type="text"/><br><br><label>String Color</label><input type="text"/><br><br>');
      // });
      // });
      //A function for button Multiple
      $(document).ready(function(){
        var wrap=$(".test");
        var button=$(".add_mul_field");
          $(button).click(function(s) {
            s.preventDefault();
                $('.add_another_field').show();
    });
  });


      // A function for both the buttons to toggle
      // $(document).ready(function(){
      // $('.add_field').click(function(){
      // $('#testing').toggle("slide");
      // // $('#add').toggle("slide");
      // });
      // });
      // $(document).ready(function(){
      //   $(.'add_mul_field').click(function(){
      //     $('#testing').toggle("slide");
      //     $('.add_another_field').show();
      //   });
      // });
      // // A function for Add Racquet button
      $(document).ready(function(){
        var max_field=10;
        var wrap=$(".test");
        var button=$(".add_another_field");
        var x=1;

        $(button).click(function(s) {
          s.preventDefault();
          if(x < max_field){
          x++;

      $(wrap).append('<label>Racquet Brand</label><input type="text"/><br><br><label>Racquet Model</label><input type="text"/><br><br><label>String Type</label><input type="text"><br><br><label>String Tension</label><input type="text"/><br><br><label>String Color</label><input type="text"/><br><br>');
      }else{
        alert("you Reached your limit");
      }
      });
      });
      $(document).ready(function(){
        $('.add').click(function(){
          $('.MA').show();
        });
      });


      </script>


  </head>
  <body>
    <nav  style="margin-bottom:20px"class="navbar navbar-expand-lg navbar-light bg-#a0ffe6">
      <img src="warriorSportsLogo.jpg" alt="" height="100px">
  <a  style="padding-left:20px; font-family:Lobster;font-size:50px; color:green"class="navbar-brand" href="#">Warrior Sports<br><span style="color:#00005c;font-family:Mogra"><h5>Computerised Racquet Stringing <br>   Equipments & accessories</span></h5></a>


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
    <form class="" action="info.php" method="POST" name="add_name" id="add_name">


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
                      <div id="testing">
                      <label>Select Number Of racquets</label><br>
                      <button  class="add_field">Single</button>
                      <button  style="margin-left:20px"class="add_mul_field">Multiple</Button><br><br>

                      </div>
                        <div class="test">
                        <label class="include"> Racquet Brand</label>
                         <select  name="brand">
                          <option value="Yonex">Yonex</option>
                          <option value="Lining">Lining</option>
                          <option value="Victor">Victor</option>
                          <option value="Apacs">Apacs</option>
                          <option value="head">head</option>
                          <option value="Wilson">Wilson</option>
                          <option value="Prince">Prince</option>
                          <option value="Ashaway">Ashaway</option>

                        </select><br><br>


                            <label class="include" >Racquet Model</label>
                            <input class="include"  type="text" name="mytext[]"><br><br>


                            <label class="include"  >String Type </label>
                              <input class="include"  type="text" name="string" value="">
                              <br><br>

                            <label class="include"  >String Tension </label>
                              <input class="include"    type="text" name="tension" value="">
                            <br><br>
                            <label class="include"  >String Color </label>
                              <input class="include"  type="text" name="color" value="">
                            <br><br>
                            <label class="include" >Racquet cover </label>
                              <select class="include" name="des">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                              </select>
                            <br><br>
    </div>


                            <button  id="add" class="add_another_field" style="display :none"> ADD racquet</button><br><br>
                            <label >CollectionDate</label>
                              <input    type="date" name="Colldate" value="">
                            <br><br>
                            <label  >Exp.DeliveryDate  </label>
                              <input   type="date" name="exdate" value="">
                          <br><br>
                            <label   >Bill Amount</label>
                              <input   type="text" name="BA" value="">
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
          <input type="radio" name="maritalStatus" value="Unmarried">
          Unmarried
          <input  class=".add"type="radio" name="maritalStatus" value="Married">
          Married<br><br>
          <label  class="MA"style="display:none">Marriage Anniversary</label>
          <input  class="MA"style="display:none" type="date" name="MOA" value="">
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
          <label>Remarks</label>
            <input type="text" name="remarks" value="">
</section>
        </div>
      </div>
    </div>






    <div class="container" style="text-align:center">
      <input class="btn btn-info btn-lg" type="Submit" value="Report">

     <input  class="btn btn-primary btn-lg"type="Submit" name="submit" value="Submit">
     <input  class="btn btn-danger btn-lg"type="Submit" name="" value="Cancel">
   </div>

</form>

  </body>


</html>
