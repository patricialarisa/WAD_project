<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "db_login";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from search_table where name LIKE '%$search%'   LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Breed</td>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['id'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['name'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo "$".$results['website'];
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo 'Nothing found';
        }
?>