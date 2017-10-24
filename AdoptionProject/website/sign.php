
<?php 


define('DB_NAME', 'sonia');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link) {
  die ('Nu m-am putut conecta: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);
if(!db_selected) {
  die ('Nu pot accesa baza de date: ' .DB_NAME . ': ' . mysql_error());
}

$user = $_POST['usrname'];
$password = $_POST['psw'];



$sql = "INSERT INTO sign_up(user,password1,password2) VALUES ($user,$password,$password)";


if(!mysql_query($sql)) { 
  die ('Nu am putut scrie in baza de date: ' . mysql_error());
}

mysql_close();


?>


<p>The information sheet has been successfully redirected ! Thank you for your time!</p>
<br/><a href="home.html">Back to home page</a>



