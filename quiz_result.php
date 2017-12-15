<?php
include "lib/class.front.php";
$front = new Front48();

include "lib/header.php";
if(!isset($_SESSION['quiz_id']))
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
                            
							<div class="wrap-course-syliabus quiz_res">
                            <h3 class="course-title-text title-sylia">
                                <a href="#">Result For Quiz <?php echo $_SESSION['quiz_id']; ?></a>
                            </h3>
                            <div class="flat-table-topic">
                                
                                <div class="table-body quiz_result_tbl">
                                    <table class="table">
                                        
                                        <tbody>
                                            <tr>
                                                <td class="icon-play">Total Of Questions</td>
                                                <td>10</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="icon-play">Total Attemp Question</td>
                                                <td><?php echo $_SESSION['attempt']; ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="icon-play">Total Correct Answer</td>
                                                <td><?php echo $_SESSION['correct']; ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="icon-play">Score</td>
                                                <td><?php echo $_SESSION['correct']; ?></td>
                                                
                                            </tr>
                                            <tr>
											
                                                <td class="icon-percent"><i class="fa fa-percent" aria-hidden="true"></i>
												Percentage</td>
                                                <td><?php echo $percent=100*($_SESSION['correct']/10); ?>%</td>
											
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

								<div class="save_res">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;Save Result ? <a class="flat-btn bg-color btn_res" href="quiz_result_save.php">YES</a>&nbsp;&nbsp;<a class="flat-btn bg-color btn_res" href="quiz.php">NO</a>
								</div>
                            </div>
                            
                            
                        </div>
                        </div>


						    
                           <div class="row">
                            
							<div class="wrap-course-syliabus quiz_res">
                            <h3 class="course-title-text title-sylia">
                                <a href="#">Solutions For Quiz <?php echo $_SESSION['quiz_id']; ?></a>
                            </h3>
                            <div class="flat-table-topic">
                                
                                <div class="table-body quiz_result_tbl">
                                    <table class="table">
                                        
                                        <thead>
                                            <tr>
                                                <td style="width:120px;">Question #</td>
                                                
                                         
                                                <td>Answer</td>
                                               
                                                
                                            </tr>
										</thead>
                                        <tbody>
										<?php
										$ccount=1;
										foreach($_SESSION['solutions'] as $sol_ans)
	{
										?>
											 <tr>
                                                <td><?php echo $ccount ?></td>
                                                
                                         
                                                <td><?php echo $sol_ans; ?></td>
                                               
                                                
                                            </tr>
											<?php
											$ccount++;
}
											?>
                                           
                                        </tbody>
                                    </table>
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