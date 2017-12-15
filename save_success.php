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
                       <div class="wrap-course-details result_save">
                           <div class="row">
                            <div class="col-md-12">
							<div class="subscribe-contact">
                            <div class="title-section">
                                <h1 class="title">SAVE RESULT</h1>
                                <div class="sub-title1">
                                    Success ! Your Result Has Been Saved
                                </div>
								<div class="sub-title">
                                    View All Result For '<?php echo $_SESSION['std_id'];?>'
                                </div>
								<div class="col-md-12 btnall">
								<div class="col-md-4 col-sm-12 col-xs-12 btnf">
								<div class="wrap-btn">
                                <a class="flat-btn bg-color" href="view_quiz_result.php">YES</a> 
                                </div>
								</div>
								<div class="col-md-4 col-sm-8 col-xs-12 btns"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> OR <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								</div>
								<div class="col-md-4 col-sm-8 col-xs-12 btnt">
								<div class="wrap-btn">
                                        <a class="flat-btn bg-color" href="index.php">NO</a> 
                                    </div>
								</div>
								<div style="clear:both;"></div>
								</div>
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