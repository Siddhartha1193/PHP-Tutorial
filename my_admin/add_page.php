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
		$result=$user->add_page($page_title, $page_parent_id, $Editor1);
					if($result)
                      {	
											unset($_REQUEST);	
										    echo '<script>alert("Chapter Added successfully")</script>';
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
?>

		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>ADD CHAPTER</h4></div>
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
												<input type="text" name="page_title" class="form-control" required>
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
													<option value="<?php echo $row_parent['page_id']; ?>"><?php echo $row_parent['page_title']; ?></option>
													<?php
													}
													?>
												</select>
											
									</div>
								</div><!--.form-group-->

								

								<div class="form-group">
									<label class="control-label col-md-2">Content : </label>
									<div class="col-md-9">
												<textarea id="Editor1" name="Editor1">
										</textarea>
										</div>

								</div><!--.form-group-->


							<div class="form-buttons">
								<div class="row">
									<div class="col-md-offset-2 col-md-10">
										<input type="submit" class="btn btn-blue" value="Save" name="submit" >
										<input type="reset" class="btn btn-flat btn-default" value="Reset" name="reset">
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
