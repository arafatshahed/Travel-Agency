<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
</head>
<body>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    
    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image">
    </div>
        <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image2">
    </div>
        <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image3">
    </div>
    <div>
      <button type="submit" name="upload">POST</button>
    </div>
  </form>
</body>
</html>