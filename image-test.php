<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<div>
  <form action="image-upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="uname">
    </div>

    <div class="form-group">
      <label for="">Image</label>
      <input type="file" name="myimage">
    </div>

    <input type="submit" name="Submit" value="Upload">
  </form>
	
</body>
</html>