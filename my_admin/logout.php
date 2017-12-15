<?php
include 'lib/class.user.php';
$user = new User1248();
?>
<?php
  if (isset($_GET['q'])){
        $user->user_logout();
        header("location:index.php?logout=successfull");
	  }
?>
