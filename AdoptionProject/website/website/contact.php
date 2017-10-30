
<?php @session_start(); ?>

<html>

<title> Contact </title>



<head>
<title>AJAX PHP Login Script using Bootstrap</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>

input[type=text1] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
   
    transition: width 0.4s ease-in-out;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
	text-align:center;
}

.active {
    background-color: #4CAF50;
}


header{
	bottom:0;
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
	
}
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    
    background-image: url("1.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
footer{
	top:0;
	background-color: black;
    clear: left;
    text-align: center;
	color:white;
	padding: 1em;
	height:10%;

}

div.container {
    width: 1200px;
	text-align:left;

	  }
	  

.img1{
	float:left;
	margin-left:30px;
	
}

.img2{
	float:right;
	margin-top:40px;

}

h1{
	text-indent:30px;
	color:#368BC1;
}
h3{
	text-indent:30px;
	padding-bottom:40px;
}

.button {
    background-color: #6f99f2;
    border: none;
    border-radius:8px;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

div.page{
	background-color:white;
	width:50%;
	border-color:#ff0000;
	text-align:center;
	border-width:5px;
}

p{
	margin-left:40px;
	margin-right:20px;
}



div.content{
border-width:5px;
width:50%;
background-color:white;
padding-top:10px;
padding-bottom:50px;
}

div.box2{
text-align:center;
}


div.photo{
	text-align:right;
	right:0;
	bottom:0;
	position:absolute;
}
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  
div.absolute {
    position: absolute;
    bottom: -200px;
    right: 150px;
    width: 300px;
	padding:auto;
	

}
</style>

<head>

	
	<header> 
	<div class="container">
	<img src="images\p.png" class="img1" width="300px" height="150px"></img></div>
		</header></head>
		
		<body background-color="white" background-position="center" background-repeat="no-repeat"
	height="100%" width="100%"><!-- <div class="bg"> -->
	
	
	
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"></a>
			
			<ul class>
	
		<li><a  href="home1.html">Home</a></li>
		<li><a href="about_us.html">About us</a></li>
		<li><a href="about.html">Adoption</a></li>
		<li><a href="app.html"> Appointment </a></li>
		<li><a href="adoption.html">Happy pupps</a></li>
		<li><a class="active" href="contact.html">Contact</a></li>
		<li style="float:center;"><p>  </p></li>
		<li style="float:center"><form>
			<input  type="text1" name="search" placeholder="Search..">
		</form></li>
		
		
		</li>
		
	 
	</ul>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav pull-right">
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <li><p class="navbar-text"> <?php echo $_SESSION['user_name']; ?></p></li>
                <?php } else { ?>
                    <li class="active"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>


<!-- modal login form -->
<div id="login-modal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="login-modal-container">
            <form id="login-form" role="form">
                <div class="modal-body">
                    <h2>Login To Your Account </h2>
                    <div id="err-msg"></div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" placeholder="Your email address" class="form-control input-lg" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control input-lg" />
                    </div>
                    <div class="form-group">
                        <div id="captcha"></div>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="login" name="login" value="Log In" class="btn btn-primary btn-block btn-lg" />
                    </div>
                </div>
                <div class="modal-footer">
                    Don't have an account? <a href="#">Sign Up here</a>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
	
	<div class="container" style="display:block" >
	 
	<h1> Contact Us Online </h1>
	
	<h3>Please use this form for general questions about our website. For inquiries related to a specific animal, kindly 
	reach out directly to the shelter where the animal is located.
	Shelter information is listed on each animal's profile page. Thank you!</h3>
	
	
		<div class="title" style="float:right; padding-right:40px">
					<h2>For more information:</h2>
					<p><b><i>Phone number: 0789 123 456</b></i><br />
					<b><i>Email: petango@test.ro</b></i>
					</br><b><i>Address: St. Paris , number 7 </b></i></br>
					<b><i> City: Timisoara</b></i></br>
					<b><i>Country: Romania </b></i></p>
				<img src="images\index.jpg" height="200px" width="200px"></img>
				</div>
		
			
			
    <form method="post" action="send.php" >
			  <p align="left"><b>First Name:</b><input name="Name" style="width:200px " id="Name" type="text" /></p>
			  <p align="left"><b>Last Name:</b><input name="Surname"  style="width:200px" id="Surname" type="text" /> </p>
			  <p align="left" ><b>E-mail:</b><input name="Mail" style="width:200px"  id="Mail" type="text" /></p>
			  <p align="left"><b>Message:</b><input name="Message" style="width:200px; height:200px" id="Message" type="text" /></p>
   <br></br>
   <button class="button" type="submit">Send Message</button>
   
	</form>
	
	
	 
	 <br></br>
	 
	 <div class="content">
	 <p> <i> *I consent to receive email communication from Petango.com on behalf of Pethealth Services Inc. and 
	 Pethealth Services Inc. including
	 notifications regarding lost pets and news updates. I may withdraw my consent at any time by emailing 
	 unsubscribe@petango.com or by resubmitting a request on the unsubscribe page. </i> </p> </div>
	 
	 
	
	
	
	</div>
	
	
	
	<footer> Copyrights 2017 . All rights reserved. 
				<img src="images\f.jpg" align="right" width="50px" height="50px"></img> 
				<img src="images\tw.jpg" align="right" width="70px" height="50px"></img>
				
				</footer>

		<!-- modal login form -->
<div id="login-modal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="login-modal-container">
            <form id="login-form" role="form">
                <div class="modal-body">
                    <h2>Login To Your Account </h2>
                    <div id="err-msg"></div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" placeholder="Your email address" class="form-control input-lg" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control input-lg" />
                    </div>
                    <div class="form-group">
                        <div id="captcha"></div>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="login" name="login" value="Sign In" class="btn btn-primary btn-block btn-lg" />
                    </div>
                </div>
                <div class="modal-footer">
                    Don't have an account? <a href="#">Sign Up here</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
     
  
  <script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

<div class="modal fade" id="mymodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Sign up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="usrname" placeholder="">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Re-enter password</label>
              <input type="text" class="form-control" id="psw" placeholder="">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myButton").click(function(){
        $("#mymodal").modal();
    });
});
</script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>


</html>

