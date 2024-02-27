<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploaded</title>
</head>
<body>
<form action="file-save.php" method="post" enctype="multipart/form-data">
  Upload File:
  <input type="file" name="file" id="fileToUpload">
  <input type="submit" value="Upload" name="submit">
</form>
</body>
</html>