<?php
include 'lib/class.user.php';
$user = new User1248();
if (!$user->get_session()){
       header("location:index.php");
    }

include "lib/header.php";
$username=$_SESSION['username'];
$uid=$_SESSION['uid'];
$res=$user->user_details($uid);
$row=mysqli_fetch_array($res);


if(isset($_REQUEST["submit"]))
{	
        $name=$_REQUEST['name1'];
      if($_REQUEST['new_pass']==null)
		{
		$result=$user->user_update($uid,$name);
		if($result)
										 {	
											echo '<script type="text/javascript">'; 
											echo 'alert("User Updated  successfully");'; 
											echo 'window.location.href = "setting.php";';
											echo '</script>';											
											}
		}

	$old_password1=$_REQUEST['old_pass'];
	$old_password = base64_encode ($old_password1);
	if($row['user_pass']==$old_password)
    {
		
		$password1=$_REQUEST['new_pass'];
		$password = base64_encode ($password1);

		
		$result=$user->user_pass_update($uid, $name, $password);
											if($result)
										    {	
											echo '<script type="text/javascript">'; 
											echo 'alert("User Updated  successfully");'; 
											echo 'window.location.href = "setting.php";';
											echo '</script>';												
											 }
											 else
											 {
												echo '<script>alert("Sorry something wrong")</script>';
											 }
	}
	else if($old_password != null)
	{
          echo '<script>alert("Old Password Not Match")</script>';
	}	
}


?>
<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>PROFILE SETTINGS</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<div class="box double-border">

						<form action="" method="post" class="form-horizontal" onsubmit="return checkForm(this);">
							<div class="form-content">
							


							  <div class="form-group">
									<label class="control-label col-md-4">Username : </label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="text" name="name1" class="form-control" value="<?php echo $row['user_name']?>" readonly>
											</div>
										</div>
									</div>
								</div><!--.form-group-->

								
                                <div class="form-group">
								<div class="control-label col-md-6"><center><strong><u>Change Password</u></strong><center></div>
								<div class="col-md-6">&nbsp;</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Old Password : </label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="password" name="old_pass" class="form-control" value="">
											</div>
										</div>
									</div>
								</div><!--.form-group-->

								<div class="form-group">
									<label class="control-label col-md-4">New Password : </label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="password" name="new_pass" class="form-control" value="">
												
											</div>
										</div>
									</div>
								</div><!--.form-group-->

								<div class="form-group">
									<label class="control-label col-md-4">Confirm Password : </label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="password" name="con_pass" class="form-control" >
											</div>
										</div>
									</div>
								</div><!--.form-group-->

								
								
							<div class="form-buttons">
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<input  type="submit" class="btn btn-blue" name="submit" value="Submit">
										
									</div>
								</div>
							</div>
							</div>
						</form>

						

						</div><!-- .box -->

					</div><!--.panel-body-->
				</div><!--.panel-->
			</div><!--.col-md-12-->
		</div><!--.row-->
<?php
include "lib/footer.php";
include "lib/menu.php";
include "lib/page-js.php";
?>
<script type="text/javascript">

  function checkForm(form)
  {
	  if(form.old_pass.value == "" && form.new_pass.value != "") {
      alert("Old Password cannot be blank!");
      form.username.focus();
      return false;
    }
    if(form.new_pass.value != "" && form.new_pass.value == form.con_pass.value) {
      if(form.new_pass.value.length < 6) {
        alert("New Password must contain at least six characters!");
        form.new_pass.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.new_pass.value)) {
        alert("New Password must contain at least one number (0-9)!");
        form.new_pass.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.new_pass.value)) {
        alert("New Password must contain at least one lowercase letter (a-z)!");
        form.new_pass.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.new_pass.value)) {
        alert("New Password must contain at least one uppercase letter (A-Z)!");
        form.new_pass.focus();
        return false;
      }
    } else if(form.new_pass.value != "" && form.new_pass.value != form.con_pass.value){
      alert("New Password and Confirm Password do not match");
      form.con_pass.focus();
      return false;
    }

    return true;
  }

</script>