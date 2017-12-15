<?php
include 'lib/class.user.php';
$user = new User1248();
if (!$user->get_session()){
       header("location:index.php");
    }
include "lib/header.php";
include "editor/header.php";

$ques_id=$_GET['ques_id'];
if(isset($_REQUEST["submit"]))
{
	extract($_REQUEST);  

		$result=$user->update_question($ques_id, $ques_title, $ans_1, $ans_2, $ans_3, $ans_4, $ans_correct);
	
			if($result)
										 {	
											unset($_REQUEST);
												
										    echo '<script>alert("Question Updated successfully")</script>';
                                            echo'<script type="text/javascript">';
?>
               window.location="quiz3.php";
<?php
          
      echo'</script>';
												
											 }
											 else
											 {
								 echo '<script>alert("Sorry something wrong")</script>';
											 }										 	
}

$single_ques=$user->get_question($ques_id);
$row_details=mysqli_fetch_array($single_ques);
?>

		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>ADD QUESTION FOR QUIZ 2</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<div class="box double-border">

						<form action="" class="form-horizontal" method="post" enctype="multipart/form-data" >
							<div class="form-content">
								

								<div class="form-group">
									<label class="control-label col-md-3">Question<span class="valid">*</span> : </label>
									<div class="col-md-7">
										<div class="inputer">
											<div class="input-wrapper">
											    <textarea class="Editorques" name="ques_title" required><?php echo htmlspecialchars($row_details['ques_title']); ?></textarea>
												
											</div>
										</div>
									</div>
								</div><!--.form-group-->

														

							<div class="form-buttons">
								<div class="row">
									<div class="col-md-offset-2 col-md-10">
										<input type="submit" class="btn btn-blue" value="Update" name="submit" >
										
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
include "editor/footer.php";
include "lib/footer.php";
include "lib/menu.php";
include "lib/page-js.php";
?>
