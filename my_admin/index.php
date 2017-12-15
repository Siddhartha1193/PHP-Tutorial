<?php
include 'lib/class.user.php';
$user = new User1248();

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Login Quiz</title>

  <!-- CORE CSS-->

  <link href="login/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="login/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="login/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="login/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="login/js/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="login/js/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<?php
if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($username, $password);
	    if ($login) {
	        // Registration Success
	       echo'<script type="text/javascript">;'
											 ?>
              window.location="pages.php";
          <?php
      echo '</script>';
	    } else {
	        // Registration Failed
	       echo '<script>alert("Invalid user Id or Password")</script>';
	    }
	}
?>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div style="background-color:rgba(0, 0, 0, 0.6);" class="col s12 z-depth-4 card-panel">
      <form class="login-form" method="post" action="">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/logo.png" alt="" class="responsive-img valign profile-image-login" style="
    margin-top: 25px;
    margin-left: -20px;
">
            <p style="color:#fff;" class="center login-form-text">Administrator Login</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input style="color:#fff;" id="username" type="text" name="username" required>
            <label style="color:#9D9D9D;" for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input style="color:#fff;" id="password" type="password" name="password">
            <label style="color:#9D9D9D;" for="password">Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input style="background:#3F99D6;" type="submit" name="submit" value="Login" class="btn col s12">
          </div>
        </div>
       </form>
	   <?php
									  if(isset($_GET['logout']))
									  {
										  ?>
									  <div style="color:green; font-size:14px; text-align:center;">Logout Successfully</div>
									  <?php
									  }
									  ?>
 <br/>
	   <form method="post" action="">
	   <div class="row" id="pass" style="display: none;">

          <div class="input-field col s12 ">
              <p class="btn col s12"><input type="submit" name="update_password" value="Forgot password?"></p>
          </div>
        </div>
	   </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="login/js/jquery-1.11.2.min.js"></script>
  <!-- forget password hideshow -->
  <script>
function showDiv(elem){
   if(elem.value == 1)
	{
      document.getElementById('pass').style.display = "block";
	}
	else if(elem.value == 0)
	{
      document.getElementById('pass').style.display = "none";
	}
}

  </script>
  <!--materialize js-->
  <script type="text/javascript" src="login/js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="login/js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="login/js/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="login/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="login/js/custom-script.js"></script>

</body>

</html>
