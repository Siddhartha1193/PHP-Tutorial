<?php
include "lib/class.front.php";
$front = new Front48();

include "lib/header.php";

if(!isset($_SESSION['quiz_id']))
{
	echo '<script>alert("Session Expired! Please start a new quiz.")</script>';
	echo'<script type="text/javascript">';
											 
											 ?>

												 window.location="quiz.php";
											 <?php
											 echo '</script>';
}
else
{
if(isset($_REQUEST["submit"]))
{
    extract($_REQUEST);


   
        $result_date=date('d/m/Y');
		$check_correct = $front->add_result($std_id, $quiz_id, $score, $percentage, $result_date);
        if($check_correct)
											{
											 echo'<script type="text/javascript">';
											 unset($_SESSION["quiz_id"]);
											 unset($_SESSION["attempt"]);
											 unset($_SESSION["correct"]);

											 $_SESSION['std_id']=$std_id;
											 ?>

												 window.location="save_success.php";
											 <?php
											 echo '</script>';
											 }
											 else
											 {
								             echo '<script>alert("Sorry something wrong! Try Again!")</script>';
											 }
	
}
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
                        <div class="wrap-course-details result_save">
                           <div class="row">
                            <div class="col-md-12">
							<div class="subscribe-contact">
                            <div class="title-section">
                                <h1 class="title">SAVE RESULT</h1>
                                <div class="sub-title">
                                    Enter Student Id To Save Result
                                </div>
                            </div>
                            <form action="" method="post" id="formsubscribe" class="formsearch search-course">
							<div class="col-md-8">
                                <p class="subscribe-email">
                                    <input  name="std_id" value="" required="required" placeholder="Enter Student Id" type="text" pattern="[0-9]{9}" title="Nine digit number only">
									<input type="hidden" name="quiz_id" value="<?php echo $_SESSION['quiz_id']; ?>">
									<input type="hidden" name="score" value="<?php echo $_SESSION['correct']; ?>">
									<input type="hidden" name="percentage" value="<?php echo $percent=100*($_SESSION['correct']/10); ?>%">
                                </p>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="subscribe-btn">
                                    <div class="wrap-btn">
                                        <input type="submit" class="flat-btn bg-color" name="submit" value="SAVE RESULT">
                                    </div>
                                </div>
								</div>
                            </form>
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