<?php

/*if(isset( $_GET['id'] ) && !empty( $_GET['id'] )){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'photos';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
	$result = $db->query("SELECT image FROM images WHERE id = {$_GET['id']}");
	//{$_GET['id']}");
	
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
}
else{
	echo "Cannot get the id of the image";
}*/


$conn = mysqli_connect("localhost", "root", "","photos");
if(!($conn)){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_GET['id'])) {
$sql = "SELECT id,image,text FROM images WHERE id=" . $_GET['id'];

$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));

while($row = mysqli_fetch_array($result)){

header("Content-type: image/jpg" );
	
	echo $row['image'];
}

}
mysqli_close($conn);




?>
