
<?php



    $link = mysqli_connect("localhost", "root", "", "db_login");


    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }


    $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$app1 = $_POST['app1'];
	$app2 = $_POST['app2'];
	$obs = $_POST['obs'];

	$sql = "INSERT INTO appoints(first_name, last_name,email,phone,app1,app2,obs) VALUES ('$first_name', '$last_name','$email' , '$phone' ,'$app1','$app2', '$obs')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    mysqli_close($link);





?>


<p>The information sheet has been successfully redirected ! Thank you for your time!</p>
<br/><a href="home1.html">Back to home page</a>



