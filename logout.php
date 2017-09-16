<?php
/*Yeah! Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout-CTC</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
<!--Yeah! Display Site Logo at The Top-->
<a href="http://www.tonycletus.com"><img src="img/logo.png"></a> 
    <div class="form">
          <h1>Thanks for visiting Our Site</h1>
          <h5 style="color: white" ><?= 'Drop a' . '<a href="http://www.tonycletus.com/contact.php">' . ' feedback' . '</a>' . ' so we can serve you much better' ?></h5>    
          <p><?= 'You have been logged out!'; ?></p>
          
          <!--Yeah! We navigate back to Home page of the site-->
          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
