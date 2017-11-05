

<?php

if(isset($_POST['search']))
{
 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$search_val=$_POST['search_term'];
$get_result = mysql_query("select * from search where MATCH(title,description) AGAINST('$search_val')");

	while($row=mysql_fetch_array($get_result))
     {
        echo "<li><a href='http://talkerscode.com/webtricks/".$row['link']."'><span class='name'>".$row['name']."</span><br><span class='website'>".$row['website']."</span></a></li>";
		//echo "<a href='contact.php?id=".$row['id']."'>View</a>";
    } 
 
    exit();

$conn->close();
?>
