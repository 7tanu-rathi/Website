<?php include 'header.php';
?>

<form action="upload_img2.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $_REQUEST["id"];?>">

    <p align="left" style="color:purple"><b>Select image to upload:</b></p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
