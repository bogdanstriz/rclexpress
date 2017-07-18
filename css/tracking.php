<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href= "css/index.css" type= "text/css" rel= "stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style> 
	body {
  background-color: #e0e0e0;
}
#mainboxleft {
  height: 50px;
  background-color: ;
}
#logoborder {
  background-color: white;
  padding: 20px;
  width: 100%;
  border-radius: 20px;
  border: 2px solid #e0e0e0;
}
#topbtn1 {
  background-color: #000;
  color: white;
  text-align: center;
  display: inline-block;
  width: 100%;
  border-radius: 0px;
}
#topbtn2 {
  background-color: #000;
  color: white;
  text-align: center;
  display: inline-block;
  width: 100%;
  border-radius: 0px;
}
#topbtn3 {
  background-color: #000;
  color: white;
  text-align: center;
  display: inline-block;
  width: 100%;
  border-radius: 0px;
}
#topbtn4 {
  background-color: #000;
  color: white;
  text-align: center;
  display: inline-block;
  width: 100%;
  border-radius: 0px;
}
#topbtn5 {
  background-color: #800000;
  color: white;
  text-align: center;
  display: inline-block;
  width: 100%;
  border-radius: 0px;
}
#topbtn1:hover {
  background-color: #e0e0e0;
  color: black;
  border-color: black
}
#topbtn2:hover {
  background-color: #e0e0e0;
  color: black;
  border-color: black
}
#topbtn3:hover {
  background-color: #e0e0e0;
  color: black;
  border-color: black
}
#topbtn4:hover {
  background-color: #e0e0e0;
  color: black;
  border-color: black
}

#topbtn5:hover {
  background-color: #e0e0e0;
  color: black;
  border-color: black
}
.row {
  width: 100%;
}
#mainbox {
  background-color: #eee;
}
#mainboxright {
  height: 50px;
  background-color: ;
}
#headermain {
  background-color: white;
  padding-top: 50px;
  padding-bottom: 40px;
}
#headerboxleft {
  height: 50px;
  background-color: ;
}
#headerboxright {
  height: 50px;
  background-color: ;
}
#topbox {
  height: 30px;
}
#bottombox {
  background-color: red;
  height: 25px;
}
#mainimage {
}
#aboutusmain {
  background-color: #e0e0e0;
}
#aboutusheader {
  background-color: #999;
  padding-top: 10px;
  padding-bottom: 15px;
}
#ourmissionheader {
  background-color: #999;
  padding-top: 10px;
  padding-bottom: 15px;
}
#contactusheader {
  background-color: #999;
  padding-top: 10px;
  padding-bottom: 15px;
}
#contactlistleft {
  float: left;
}
#contactlistright {
  float: right;
  float: bottom;
}

/* Navigation Bar at the top of the screen, it doesn't move when you scroll down */
#topnavbarfixed {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 999999;

}
#trackingheader {
  background-color: #999;
  padding-top: 10px;
  padding-bottom: 15px;
}

#trackingbox {
  background-color: white;
  border: 3px solid;
  border-radius: 20px;
  border-color: #eee;
  margin-top: 50px;
}
</style>

</head>
<body>
<?php 


//Injection Protection

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

//Gets value of submited info

	$name = $_POST['name'];
	$_subject = $_POST['_subject'];
	$rnumber = $_POST['rnumber'];
	$visitor_email = $_POST['email'];
	$questcom = $_POST['questcom']

//Composes email

	$email_from = 'bogdanstriz@gmail.com';
	$email_subject = 'WEBSITE TRACKING UPDATE';
	$email_body = "Name: $name \n
				   RCL Pro #: $pnumber \n
				   $name Refrence #: $rnumber \n
				   Email: $email \n
				   \n
			   	   Comments: $questcom";


//Sending the email

	$to = "bogdanstriz@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);


	

?>



<div class="container-fluid" style="margin-top: 50px">

<!-- ------------------------- Buttons ------------------------------ -->

          <div class= "row" id= "topnavbarfixed">
          <div class= "mx-auto" style= "height: 30px; width: 100%"></div>
      
      <div class= "col-md-3" style= "padding: 0px" >
          <a href= "../index.html#aboutusheaderabove"   >
            <button id="topbtn1" class="btn">About us</button></a>
          </div>
       
       <div class= "col-md-3" style= "padding: 0px"  >
            <a href= "../index.html#ourmissionheaderabove"  ><button id="topbtn2" class="btn" >Our Mission</button></a>
           </div>

       <div class= "col-md-3" style= "padding: 0px" >
            <a href= "../index.html#trackingheaderabove"><button id="topbtn3" class="btn">Track a Shipment</button></a>
            </div>
       
       <div class= "col-md-3" style= "padding: 0px" >
            <a href= "../index.html#contactusheaderabove"><button id="topbtn3" class="btn">Contact us</button></a>
            </div>
       

          </div>

          <!-- ------------ Buttons End ----------------------------  -->


  <div style="height: 30px;" class="mx-auto"></div>
  <div class="row mx-auto">
    <div class="col-lg-2" id="mainboxleft"></div>
    <div class="col-lg-8 mx-auto text-center" id="mainbox">

     <div class= "mx-auto" style= "height: 30px"></div>
      <div class= "mx-auto col-lg-10" id= "aboutusmain">
        <div class= "mx-auto" style= "height: 30px"></div>


        <h3 class="text-center">Request sent. You should receive a reply shortly.</h3>
                <div class= "mx-auto" style= "height: 30px"></div>

                <div class= "col-md-3 mx-auto" style= "padding: 0px"  >
            <a href= "../index.html"  ><button id="topbtn5" class="btn" >Back</button></a>
           </div>

                <div class= "mx-auto" style= "height: 30px"></div>


        </div>
        <div class= "mx-auto" style= "height: 30px"></div>
    </div>
    <div class="col-lg-2" id="mainboxright"></div>




  </div>




	
	
</body>

</html>