<?php
include 'lib/class.user.php';
$user = new User1248();
if (!$user->get_session()){
       header("location:index.php");
    }

include "lib/header.php";
include "editor/header.php";
if(isset($_REQUEST["submit"]))
{
		extract($_REQUEST);

		if($_REQUEST["remove_file1"]=='remove')
		{
			unlink($path.$_REQUEST['record_file1']);

		}

		else if($_FILES["first_file"]["name"]!='')
		{

		$first_file=rand().$_FILES["first_file"]["name"];
		$path="../files/";
		$tot_dir=$path.$first_file;
		
		move_uploaded_file($_FILES["first_file"]["tmp_name"],$tot_dir);
	
		unlink($path.$_REQUEST['record_file1']);
		}
		

				else
				{

				$first_file=$_REQUEST['record_file1'];
				}
		$result=$user->update_page($page_id, $page_title, $page_parent_id, $Editor1, $first_file);
					if($result)
                      {	
											unset($_REQUEST);	
										    echo '<script>alert("Chapter Updated successfully")</script>';
                                            echo'<script type="text/javascript">';
?>
               window.location="pages.php";
<?php
          
      echo'</script>';												
											 }
											 else
											 {
								 echo '<script>alert("Sorry something wrong")</script>';
											 }
}
$page_id=$_GET['page_id'];
$page_details=$user->get_page($page_id);
$row_details=mysqli_fetch_array($page_details);
?>

		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>EDIT CHAPTER</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<div class="box double-border" style="width: 90%;">

						<form action="" class="form-horizontal" method="post" enctype="multipart/form-data" >
							<div class="form-content">
								

								<div class="form-group">
									<label class="control-label col-md-2">Title<span class="valid">*</span> : </label>
									<div class="col-md-9">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="text" name="page_title" class="form-control" required value="<?php echo htmlspecialchars($row_details['page_title']); ?>">
											</div>											
										</div>
									</div>
								</div><!--.form-group-->

								<div class="form-group">
									<label class="control-label col-md-2">Parent Chapter : </label>
									<div class="col-md-9">
									
												<select class="form-control" name="page_parent_id">
												    <option value="0" selected>None</option>
													<?php
													$page_parent=$user->select_parent_page();
													while($row_parent=mysqli_fetch_array($page_parent))
													{
													?>
													<option value="<?php echo $row_parent['page_id']; ?>" <?php if($row_parent['page_id']==$row_details['page_parent_id']) { echo "Selected"; } ?>><?php echo $row_parent['page_title']; ?></option>
													<?php
													}
													?>
												</select>
											
									</div>
								</div><!--.form-group-->

								

								<div class="form-group">
									<label class="control-label col-md-2">Content : </label>
									<div class="col-md-9">
												<textarea class="Editor1" name="Editor1"><?php echo $row_details['page_content']; ?></textarea>
										</div>

								</div><!--.form-group-->


								<div class="form-group">
						 <label class="control-label col-md-2">
                         Featured Image
                         </label>
						 <div class="col-md-9">
							<div><img  src="../files/<?php echo $row_details['page_image'];?>" style="border: 1px solid; padding:2px; margin-bottom:5px; max-width:220px; width:100%; <?php if($row_details['page_image']==''){echo 'display:none';} ?>" id="output1"/>
							
						    </div>
							
							 <div>
							<input type="file" name="first_file"  onchange="loadFile1(event)">
							<div id="remove1" <?php if($row_details['page_image']==''){echo 'style=display:none;';} ?>>
							<a href="javascript:void(0)" onclick="removeFile1(event)">Remove Image</a>
							</div>
							<input type="hidden" name="record_file1" value="<?php echo $row_details['page_image']; ?>">
							<input type="hidden" name="remove_file1"  id="removevalue" value="<?php echo $row_details['page_image']; ?>">

							</div>
							</div>
						 
						 </div>


							<div class="form-buttons">
								<div class="row">
									<div class="col-md-offset-2 col-md-10">
										<input type="submit" class="btn btn-blue" value="Update" name="submit">		
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


<script>
  var loadFile1 = function(event) {
    var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.files[0]);
document.getElementById('output1').style.display = 'block';
document.getElementById('remove1').style.display = 'block';
document.getElementById('removevalue').value = '';
  };
</script>

<script>
  var removeFile1 = function(event) {
    var output = document.getElementById('output1');
    output.src = '';
    document.getElementById('output1').style.display = 'none';
	document.getElementById('remove1').style.display = 'none';
	document.getElementById('removevalue').value = 'remove';
  };
</script>
