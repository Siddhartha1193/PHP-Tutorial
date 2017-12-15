<?php
include 'lib/class.user.php';
$user = new User1248();
if (!$user->get_session()){
       header("location:index.php");
    }

include "lib/header.php";

if(isset($_REQUEST["submit"]))
{
    
    move_uploaded_file ($_FILES['uploadFile'] ['tmp_name'], 
       "../files/{$_FILES['uploadFile'] ['name']}");
//	if($_FILES["first_file"]["name"]!='')
//		{
//
//		$first_file=$_FILES["first_file"]["name"];
//		$path="../files/";
//		$tot_dir=$path.$first_file;
//		
//		move_uploaded_file($_FILES["first_file"]["tmp_name"],$tot_dir);
//	
//		unlink($path.$_REQUEST['record_file1']);
//		}
//				else
//				{
//
//				$first_file=$_REQUEST['record_file1'];
//				}
	$quiz_id=3;

		$result=$user->update_quiz3ans($quiz_id, $first_file);
	
			if($result)
										 {	
											unset($_REQUEST);
												
										    echo '<script>alert("Answer Updated successfully")</script>';
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
$quiz_id=3;
$answerf=$user->get_quiz3ans($quiz_id);
$row_anwer=mysqli_fetch_array($answerf);
?>

		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>UPDATE ANSWER FOR QUIZ 3</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<div class="box double-border">

						<form action="" class="form-horizontal" method="post" enctype="multipart/form-data" >
							<div class="form-content">
								<div class="form-group">
									<label class="control-label col-md-3">Upload Answer<span class="valid">*</span> : </label>
									<div class="col-md-5">
										<div>
										<input type="file"  name="first_file" value="<?php echo $row_anwer['answer']; ?>" onchange="loadFile1(event)">
										
										<input type="hidden" name="record_file1" value="<?php echo $row_anwer['answer']?>">
										</div>
									</div>
								</div><!--.form-group-->
								<div class="form-buttons">
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<input type="submit" class="btn btn-blue" value="Update Answer" name="submit" >
									
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
