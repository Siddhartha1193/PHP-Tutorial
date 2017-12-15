<?php
include 'lib/class.user.php';
$user = new User1248();
if (!$user->get_session()){
       header("location:index.php");
    }
include "lib/header.php";

if(isset($_GET['delid']))
	{
		$table='result';
		$field='result_id';
		$del_id=$_GET['delid'];
		$resultdel=$user->del_records($table, $field, $del_id);
								if($resultdel)
										 {

											echo '<script>alert("Result Deleted successfully");
											 </script>';
											  echo'<script type="text/javascript">';
											 ?>
												 window.location="results.php";
											 <?php
											 echo '</script>';
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
						<div class="panel-title"><h4>Delete Results</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<div class="box-add double-border" style="width: 90%;">
						
						<div class="table-responsive" style="padding-top: 10px;
border-top: 2px solid #EAE9EF;">
					<table class="display datatables-basic table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Student ID</th>
									<th>Date</th>
									<th>Quiz #</th>
<th>Score</th>
									<th style="width: 210px;">Action</th>

								</tr>
							</thead>
							<tbody>
							<?php
								$question=$user->get_results();
								$count=1;
								while($row_ques=mysqli_fetch_array($question))
								{
							?>
								<tr>
									<td><?php echo $count;?></td>
									<td><?php echo $row_ques['student_id'];?></td>
									<td><?php echo $row_ques["result_date"];?></td>
									<td><?php echo $row_ques["quiz_id"];?></td>
<td><?php echo $row_ques["percentage"];?></td>												
									<td><a href="results.php?delid=<?php echo $row_ques['result_id'];?>" class="btn btn-success btn-ripple" style="background:red;border-color: red;" onclick="return confirm('Are you sure you want to Delete?')">DELETE</a></td>

								</tr>
								<?php
								$count++;
								}
								?>


							</tbody>
						</table>
						</div><!-- table -->


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
