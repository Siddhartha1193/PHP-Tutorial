<?php
include "lib/class.front.php";
$front = new Front48();
include "lib/header.php";
if(!isset($_SESSION['std_id']))
{
	echo '<script>alert("Please Play a Quiz First.")</script>';
	echo'<script type="text/javascript">';
											 
											 ?>

												 window.location="quiz.php";
											 <?php
											 echo '</script>';
}
else
{
?>

 <section class="flat-row bg-theme pd-top-100 ">
            
            <div class="dividers h30">   
            </div><!-- dividers h30 -->

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 flat-course-sidebar">
                        <?php
						include "lib/inner-menu.php";
						?>
                    </div>
                   <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="wrap-course-details">

						<h2 class="quiz_title">View Result</h2>

									
                            
                           <div class="row">
                            
							<div class="wrap-course-syliabus">
                            <h3 class="course-title-text title-sylia">
                                All Result For '<?php echo $_SESSION['std_id'];?>'
                            </h3>
                            <div class="flat-table-topic">
                                
                                <div class="table-body view_result_tbl">
                                    <table class="table">
										<thead>
                                            <tr>
                                                <th>QUIZ</th>
                                                <th>DATE</th>
                                                <th>SCORE</th>
                                                <th>PERCENTAGE</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
										<?php
										$stu_id=$_SESSION['std_id'];
										$stu_res=$front->get_result($stu_id);
										while($row_result=mysqli_fetch_array($stu_res))
										{
										?>
										 
										
                                            <tr>
                                                <td><?php echo $row_result['quiz_id'];?></td>
                                                <td><?php echo $row_result['result_date'];?></td>
												<td><?php echo $row_result['score'];?></td>
                                                <td><?php echo $row_result['percentage'];?></td>
                                                
                                            </tr>
										<?php
										}
										?>
                                           
                                            <tr>
											
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

								<div class="save_res">
								<a class="flat-btn bg-color" href="index.php">DONE</a>
								</div>
                            </div>
                            
                            
                        </div>
                        </div>
                        </div>
                        
						
                    </div><!-- col-md-9 -->
                </div>
			
            </div>
        </section>

<?php
}
include "lib/footer.php";
?>