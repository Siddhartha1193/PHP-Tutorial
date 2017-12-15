<?php
include 'lib/class.user.php';
$user = new User1248();
if (!$user->get_session()){
       header("location:index.php");
    }
include "lib/header.php";

$quiz_id=2;
$question=$user->get_questions($quiz_id);
$row_count=mysqli_num_rows($question);
if(isset($_GET['delid']))
	{
        $table='questions';
		$field='ques_id';
		$del_id=$_GET['delid'];
		$resultdel=$user->del_records($table, $field, $del_id);
								if($resultdel)
										 {

											echo '<script>alert("Question Deleted successfully");
											 </script>';
											  echo'<script type="text/javascript">';
											 ?>
												window.location="quiz2.php";
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
						<div class="panel-title"><h3>Quiz 2</h3></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<div class="box-add double-border" style="width: 94%;">
					<?php
					if($row_count<=60)
					{
					?>
					<a href="add-question2.php" class="btn btn-success btn-ripple">ADD QUESTION</a>
					<?php
					}
					?>
						
						<div class="table-responsive" style="padding-top: 10px;
border-top: 2px solid #EAE9EF;">
					<table class="display datatables-basic table table-striped table-bordered table-hover quiz-2">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Question</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody>

								<?php
								$row_count=1;
								while($row_ques=mysqli_fetch_array($question))
								{
								?>
								<tr>
								
									<td><?php echo $row_count; ?></td>
									<td align="left"><?php echo $row_ques['ques_title']; ?></td>
												
									<td><a href="edit_quiz.php?ques_id=<?php echo $row_ques['ques_id'];?>" class="btn btn-success btn-ripple">EDIT</a>&nbsp;&nbsp;<a href="quiz2.php?delid=<?php echo $row_ques['ques_id'];?>" class="btn btn-success btn-ripple" style="background:red;border-color: red;" onclick="return confirm('Are you sure you want to Delete?')">DELETE</a></td>

								</tr>
								<?php
								 $row_count++;
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
