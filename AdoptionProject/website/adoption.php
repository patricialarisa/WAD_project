<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>


<title> Adoption</title>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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

</style>
<head>
<header> 
		<div class="container">
	<img src="images\p.png" class="img1" width="300px" height="150px"></img></div>
		</header></head>
		
		<body background="images\1.jpg" background-position="center" background-repeat="no-repeat"
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
		<li><a href="app.php"> Appointment </a></li>
		<li><a class="active" href="adoption.html">Happy pupps</a></li>
		<li><a  href="contact.php">Contact</a></li>
		
		<li style="float:center;"><p>  </p></li>
		<li style="float:center"><form action="s.php" method="get" >
			<input  class="text1" type="text1" name="search" id="search" placeholder="Search...">
			 <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"></button>-->
		<!--<li class="button"><a href="login.php" data-toggle="modal" data-target="#login-modal">Search</a></li>-->
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
                    Don't have an account? <a href="signup.php">Sign Up here</a>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="Script.js"></script>
	</ul>
	
	<div class="container">
	<div style="display:block">
		<div margin-top="50px"><h3 style="float:right; background-color:#f9a356; margin-left:20px;"> 
		<img src="images\max.jpg" style="padding:50px; " class="img1" width="600px" height="400px" > </img>
		     Here we have Goldie. He is a Golden Retriever of only 9 months , very playful and caring.
			 He was adopted 3 months ago by a loving and nurturing family . Being enourmously loyal and cheerful,
			 he adapts easily in children environement and , also , protects the little ones.</h3>
	
		</div>
		</div></div>
		<br></br>
		<div class="container">
		<div><h3 style="float:left; background-color:#f9a356;  margin-right:50px; margin-left:40px; padding:50px; ">
		<img src="images\be.jpg" class="img2" style=" padding-left:50px;" width="600px" height="400px"></img>
			 Our simley-face here is Mark. He found happiness and love among a three-children family
			 who enjoys having him around and giving him good treatment every day.</h3>
			</div></div>
			<br></br>
			
			<div class="container">
			<div margin-top="50px"><h3 style="float:right; background-color:#f9a356; margin-right:40px; margin-left:40px;"> 
		<img src="images\image.jpg" style="padding:50px; " class="img1" width="400px" height="500px" > </img>
		     The blue-eyed princess here is Maya. She is a baby amstaff of only 4 months. She is quite sensitive
			 and loves to have her own stuffed animal. Also , she loves kids very much." You won't find a more loving and 
			 loyal dog than her" , said her actual owner recently.</h3>
	
		</div></div>
		
		
				
				
						-		
				<?php
					// se iau din db toate articolele : (poza + text)
					// pentru fiecare articol:
						// desenezi div class container
						$conn = mysqli_connect("localhost", "root", "","photos");
					if(!($conn)){
						die("ERROR: Could not connect. " . mysqli_connect_error());
					}

					
					$sql = "SELECT id,image,text FROM images ";
					//WHERE id=". $_GET['id'];

					$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
					$arts = array();
					while($row =mysqli_fetch_assoc($result)){
						$arts[] = $row;
						
					}
					
					foreach($arts as $art) {
						?>
							<div class="container">
								<div ><h3 style="float:left; background-color:#f9a356;  margin-right:50px; margin-left:40px; padding:50px; ">
								
								<img src="viewPhoto.php?id=<?php echo $art['id']?>" class="img2" style=" padding-left:50px;" width="600px" height="400px"/> 
									<?php echo $art['text']; ?>
								</h3>
			</div></div>
						<?php
						
					} 
				?>
			
			<br></br>
			<br></br>
			
		<footer> Copyrights 2017 . All rights reserved. 
				<img src="images\f.jpg" align="right" width="50px" height="50px"></img> 
				<img src="images\tw.jpg" align="right" width="70px" height="50px"></img>
				
				</footer>

  
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
 
<script>
$(document).ready(function(){
    $("#myButton").click(function(){
        $("#mymodal").modal();
    });
});
</script>
		
</body>


</html>

