<!--A Code To Creaet Production
    Account creation and Login Process
 -->
<!--**************************************--> 

<?php 
/* Main page with two forms: sign up and log in */
require 'db.php'; //read from the database
session_start(); 
?>
<!DOCTYPE html> 
<html>
<head>
  <title>Signup - Login</title>
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>

 <a href="http://tonycletus.com"><img src="img/logo.png"></a> <!--Site Logo-->
  <div id="half-body" style="background-image: url(img/background.png)"> <!--Site background-->
  

     <div class="form">    
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
     
      <!--Start Login Form--> 
      <div id="login">   
      <h1>WELCOME!</h1>

        <!--Launching Login Form-->
        <form action="index.php" method="post" autocomplete="off">
          <div class="field-wrap">
            <label>
              <span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" placeholder="Email Address" />
          </div>
          
          <div class="field-wrap">
            <label>
             <span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" placeholder=" Password" />
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>

        </form>
        <!--Terminating Login Form-->

        </div>
        <!--End Login Form--> 
          
        
      <!--Note: Sign up form loads online as a result of online loading of the cloudfare Jquery.min.js file-->
        <!--Start SignUp Form--> 
        <div id="signup">   
          <h1>Create an account</h1>
        
        <!--Launching SignUp Form--> 
        <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
          </div>
        
          <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Create</button>
          
        </form>
        <!--Terminating SignUp Form--> 
        
        </div> 
        <!--End SignUp Form--> 

        
      </div><!-- tab-content -->
      
  </div> <!-- /form -->


    </div>
  
   <footer>
      Tony Cletus &copy; 2017, All Right Reserved.
      <br>A <a href="http://tonycletus.com">Code To Create</a> Production
    </footer>

  <!--Load Cloudflare jquery.min.js online-->   
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!--Load index.js from the resource folder--> 
  <script src="js/index.js"></script>


</body>
</html>
