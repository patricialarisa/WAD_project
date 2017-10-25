
<?php



    $link = mysqli_connect("localhost", "root", "", "sonia");


    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }


    $first_name = mysqli_real_escape_string($link, $_REQUEST['Name']);
    $last_name = mysqli_real_escape_string($link, $_REQUEST['Surname']);
    $email = mysqli_real_escape_string($link, $_REQUEST['Mail']);
	$message = mysqli_real_escape_string($link, $_REQUEST['Message']);


    $sql = "INSERT INTO appoints (Name, Surname, Mail,Message) VALUES ('$first_name', '$last_name', '$email','$message')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    mysqli_close($link);





?>


<p>The information sheet has been successfully redirected ! Thank you for your time!</p>
<br/><a href="home1.html">Back to home page</a>



