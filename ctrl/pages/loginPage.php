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
    <p class="error"><?php if(array_key_exists('err', $GLOBALS)) echo $err;  ?></p>
    <form class="login-form" method="post" action="?subm">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button name="submit" type="submit">login</button>
    </form>
  </div>
</div>
</body>
</html>
