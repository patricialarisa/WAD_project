<?php
include('db.php');
if(isset($_POST['action']))
{          
     $conn = new mysqli('localhost', 'root', '', 'db_login');

    if($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
		//die("$email");
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
			$sql = "INSERT INTO users(name,email,password)VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')";
           // mysql_query("insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')");
		   if (mysqli_query($conn, $sql)) {
               die( "New record created successfully");
            $message = "Signup Sucessfully!!";
			
        }
    }
}
}
 
?>


<!DOCTYPE html>
<html>
<title > Sign Up </title>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
{
    border-radius: 2px !important;
    -moz-border-radius: 2px !important;
    -webkit-border-radius: 2px !important;
}

.login-modal-container  {
    max-width: 350px;
    width: 100% !important;
    background-color: #F7F7F7;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}

.login-modal-container .modal-body  {
    padding: 20px 10px;
}

.login-modal-container .modal-footer  {
    text-align: center;
    margin: 0 10px;
}

.login-modal-container h2  {
    text-align: center;
    font-size: 25px;
    margin-bottom: 25px;
}

.login-modal-container input {
    font-size: 16px;
}

.login-modal-container  input[type=submit]  {
    background-color: #4D90FE;
    border: 2px solid #4D90FE;
    text-shadow: 0 1px rgba(0,0,0,0.1); 
}

.login-modal-container  input[type=submit]:hover  {
    background-color: #357AE8;
    border: 2px solid #357AE8;
}

.error {
    background-color: #F2DEDE;
}

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
	width:100%;
	
}
body, html {
	width:100%;
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
	height:150px;
	width:100%;
}

div.container {
    width: 100%;
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

h3{
	text-indent:30px;
	padding-top:40px;
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
	width:100%;
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
border-style:solid;
border-color:black;
width:50%;
background-color:white;
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
 

</style>
</head>
<body background="images\s.jpg" background-position="center" background-repeat="no-repeat"
	height="100%" width="100%" >
	
	
<div class="container" margin="500px" width="100%">

	<header>
		<div class="container">
	<img src="images\p.png" class="img1" width="300px" height="150px"></img></div>
	</header>
	
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
		<li><a href="app.php"> Appointment </a></li>
		<li><a href="adoption.html">Happy pupps</a></li>
		<li><a class="active" href="contact.php">Contact</a></li>
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
<script src="Script.js"></script>
	
	<div id="page" class="content" background-color="white" width="100%"	>
		<div id="content" width="100%">
			<div class="title" position="center" width="100%">
				<h1 align="center"><font style="Courier" color="#B80000 " ><b>Register</b></font></h1></div>
                
			<div class="container">	
			<form action="signup.php" method="post">
   <br> <p align="center"><b>Name:  </b><input id="name" name="name" type="text" placeholder=""></p> 
    <br><p align="center"> <b> E-mail : </b><input id="email" name="email" type="text" placeholder=""></p>
    <br><p align="center"><b> Password: </b><input id="password" name="password" type="password" placeholder=""></br>
	<br></br>
    <input name="action" type="hidden" value="signup" /></p>
    <p><input type="submit" value="Signup" /></p>
  </form>
		</div>
		<br></br>
	<p ><i>* If you wish to make an appointment,our team will undertake your call as soon as possible.
		For your time is precious , we don't want you to waste it. Complete the on-line form above.
		Otherwise , you can return to the home page by clicking the button below. </i></p>
		<p align="center"><i>Thank you ! </i></p>
		<p align="center"><a href="home1.html"><img class="home" src="images\hh.png"  width="70" height="70" /></a></p>
		</div>
		
		
		
		<div id="sidebar">
		
			<div class="box2">
			
				<div class="title">
					<h2>For more information</h2>
					<p>Phone number: 0789 123 456<br />
					Email: contact@test.ro</p>
				
				</div>
				
				</div>
				
				
				
				
				</div>
				
				
				</div></div>
				<footer> Copyrights 2017 . All rights reserved. 
				<img src="images\f.jpg" align="right" width="50px" height="50px"></img> 
				<img src="images\tw.jpg" align="right" width="70px" height="50px"></img>
				
				</footer>


 
<script>
$(document).ready(function(){
    $("#myButton").click(function(){
        $("#mymodal").modal();
    });
});
</script>


</body>
</html>