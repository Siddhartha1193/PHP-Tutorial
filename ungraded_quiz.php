<?php
$quiz_id=3;
include "lib/class.front.php";
$front = new Front48();

include "lib/header.php";
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
                        <div class="wrap-course-details wrap-course-syliabus">

						<h2 class="quiz_title">QUIZ 3</h2>

									
                            
                           <div class="row">
                            
                            <h3 class="course-title-text title-sylia">
                                This is an ungraded quiz. Answers to these questions can be downloaded below
                            </h3>
                             <div class="quiz_one">
							  <div class="quiz_ques_un">
							  <ol>
							   <?php
						     // SELECT Questions
						    $count=1;
							$question=$front->get_questions($quiz_id);
							while($rowquestion=mysqli_fetch_array($question))
							{
						    ?>
							  <li><?php $string= substr($rowquestion[ques_title],3);
							   echo $count; ?>. <?php echo $string; ?></li>
							<?php
							$count++;
							}
							?>
                                  </ol>
							  
							  </div>
							  </div>
							
                                
                               <?php
							   $ans=$front->get_quiz3ans($quiz_id);
							   $rowans=mysqli_fetch_array($ans);
							   ?>
								<div class="save_res">
								<a class="flat-btn bg-color" href="files/solutions.pdf" download>DOWNLOAD ANSWERS</a>
								</div>
                            </div>
                            
                            
                        </div>
                        </div>
                        </div>
                        
						
                    </div><!-- col-md-9 -->
                
        </section>
<?php
include "lib/footer.php";
?>