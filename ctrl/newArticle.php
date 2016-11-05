<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
<div class="login-page">
  <div class="form">
    <form class="articleForm" method="post" action="" enctype="multipart/form-data">
      <input type="text" placeholder="Article title" name="title"/>
      <textarea name="textBody" placeholder="Article" form="articleForm" class="articleField"></textarea>
      <input type="file" class="fileField" name="img" multiple>
      <button name="submit" type="submit">Add Article</button>
    </form>
    <br>
    <form class="logOut" method="post" action="?logout">
      <button name="log_out" type="submit">Log out</button>
    </form>
  </div>
</div>
</body>
</html>
