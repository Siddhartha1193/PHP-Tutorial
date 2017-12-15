<?php
include 'lib/class.user.php';
$user = new User1248();
if (!$user->get_session()){
       header("location:index.php");
    }
include "lib/header.php";


$pages=$user->get_pages();
$row_count=mysqli_num_rows($pages);
if(isset($_GET['delid']))
	{
		$table='pages';
		$field='page_id';
		$del_id=$_GET['delid'];
		$resultdel=$user->del_records($table, $field, $del_id);

								if($resultdel)
										 {
											echo '<script>alert("Chapter Deleted successfully");
											 </script>';
											  echo'<script type="text/javascript">';
											 ?>
												 window.location="pages.php";
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
						<div class="panel-title"><h3>Chapters</h3></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
                        
					<div class="box-add double-border" style="width: 90%;">
					<a href="add_page.php" class="btn btn-success btn-ripple">ADD CHAPTER</a>
						
						<div class="table-responsive" style="padding-top: 10px;
border-top: 2px solid #EAE9EF;">
					<table class="display datatables-basic table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th style="width: 80px;">Sr. No.</th>
									<th>Chapter Title</th>
									<th style="width: 180px;">Action</th>

								</tr>
							</thead>
							<tbody>
                                <?php
								$count=1;

								while($row_ques=mysqli_fetch_array($pages))
								{
								?>
								<tr>
									<td><?php echo $count;?></td>
									<td><?php echo $row_ques['page_title'];?></td>
												
									<td><a href="edit_page.php?page_id=<?php echo $row_ques['page_id'];?>" class="btn btn-success btn-ripple">EDIT</a>&nbsp;&nbsp;<a href="pages.php?delid=<?php echo $row_ques['page_id'];?>" class="btn btn-success btn-ripple" style="background:red;border-color: red;" onclick="return confirm('Are you sure you want to Delete?')">DELETE</a></td>

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
