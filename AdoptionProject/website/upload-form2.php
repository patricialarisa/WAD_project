<!DOCTYPE html>
<html lang="en">
<head>

<body>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
		<br></br>
		Text to be inserted : 
		<input type="text" name="text" />
		<br></br>
		Text to be inserted into the modal : 
		<input type = "text" name ="modalText" />
		<br></br>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>