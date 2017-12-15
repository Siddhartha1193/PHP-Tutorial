<?php
include "lib/class.front.php";
$front = new Front48();
include "lib/header.php";
unset($_SESSION["quiz_id"]);
unset($_SESSION["attempt"]);
unset($_SESSION["correct"]);
unset($_SESSION["std_id"]);
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

						<h2 class="quiz_title">All Quizs</h2>

									
                            
                           <div class="row">
                            <div class="dividers">   
                            </div><!-- dividers -->
                            <!-- <div class="row"> -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="iconbox bg-style bg-red quiz_p" href="quiz_details1.php">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <img src="images/iconbox/21.png" alt="image">
                                        </div>
                                        <div class="box-title">
                                           <div>QUIZ 1</div>
                                        </div>
                                    </div>
                                </a>
								<div class="quiz_grade" ><a href="quiz_details1.php" style="color: #f1594f;">GRADED QUIZ</a></div>
                            </div><!-- col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="iconbox bg-style bg-green quiz_p" href="quiz_details2.php">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <img src="images/iconbox/21.png" alt="image">
                                        </div>
                                        <div class="box-title">
                                           <div>QUIZ 2</div>
                                        </div>
                                    </div>
                                </a>
								<div class="quiz_grade" ><a href="quiz_details2.php" style="color: #96ca4a;">GRADED QUIZ</a></div>
                            </div><!-- col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="iconbox bg-style quiz_p" href="ungraded_quiz.php">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <img src="images/iconbox/21.png" alt="image">
                                        </div>
                                        <div class="box-title">
                                           <div>QUIZ 3</div>
                                        </div>
                                        
                                    </div>
                                </a>
								<div class="quiz_grade" ><a href="ungraded_quiz.php" style="color: #ffbf43;">UNGRADED QUIZ</a></div>
                            </div><!-- col-md-4 -->
                        </div>
                        </div>
                        
						
                    </div><!-- col-md-9 -->
                </div>
			
            </div>
        </section>

<?php
include "lib/footer.php";
?>