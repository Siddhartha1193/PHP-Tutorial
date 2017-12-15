<?php
$quiz_id=1;
include "lib/class.front.php";
$front = new Front48();

include "lib/header.php";

unset($_SESSION["solutions"]);



if(isset($_REQUEST["submit"]))
{
	
    $ans_count=0;
    $attempt=count($_POST['selector1']);
	$_SESSION['attempt']=$attempt;
	$_SESSION['quiz_id']=$quiz_id;

	$number = count($_POST['ques_id'])+1;
	for ($i=1; $i<$number; $i++)
    {  
		$ans_correct=0;
		$selector1=$_POST['selector1'][$i];
		$ques_id=$_POST['ques_id'][$i];

		$solutions=$front->get_solutions($ques_id);
		$row_solutions=mysqli_fetch_array($solutions);
        $ans_correct=$row_solutions['ans_correct'];
			if($ans_correct==1)
			{
				$_SESSION['solutions'][]=$row_solutions['ans_1'];
			}
			if($ans_correct==2)
			{
				$_SESSION['solutions'][]=$row_solutions['ans_2'];
			}
			if($ans_correct==3)
			{
				$_SESSION['solutions'][]=$row_solutions['ans_3'];
			}
			if($ans_correct==4)
			{
				$_SESSION['solutions'][]=$row_solutions['ans_4'];
			}
        

		$check_correct = $front->get_results($ques_id, $selector1);
		$row_correct=mysqli_fetch_array($check_correct);
		if(($row_correct['ques_id']!=null) && ($row_correct['ques_id']!=''))
		{
			$ans_count=$ans_count+1;
			
		}
	}
	$_SESSION['correct']=$ans_count;
        if($check_correct)
											{
											 echo'<script type="text/javascript">';
											 ?>
												 window.location="quiz_result.php";
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
                        <div class="wrap-course-details">

						<h2 class="quiz_title">QUIZ 1</h2>

									
                            
                           <div class="row">
                            <!-- <div class="row"> -->
                            <div class="col-md-12 col-sm-12">
							<form method="post" action="">
                           <?php
						   // SELECT Questions
						    $count=1;
							$question=$front->get_questions($quiz_id);
							while($rowquestion=mysqli_fetch_array($question))
							{
						   ?>

							 <div class="quiz_one">
							  <div class="quiz_ques">
							  <?php 
							   $string= substr($rowquestion[ques_title],3);
							   echo $count; ?>. <?php echo $string; ?>
							  </div>
							  <div class="quiz_ans">
							  <ul>
								  <li>
									<input type="radio" id="f-option<?php echo $count; ?>" name="selector1[<?php echo $count; ?>]" value="1">
									<label for="f-option<?php echo $count; ?>"><?php echo $rowquestion[ans_1]; ?></label>
									
									<div class="check"></div>
								  </li>
								  
								  <li>
									<input type="radio" id="s-option<?php echo $count; ?>" name="selector1[<?php echo $count; ?>]" value="2">
									<label for="s-option<?php echo $count; ?>"><?php echo $rowquestion[ans_2]; ?></label>
									
									<div class="check"><div class="inside"></div></div>
								  </li>
								  
								  <li>
									<input type="radio" id="t-option<?php echo $count; ?>" name="selector1[<?php echo $count; ?>]" value="3">
									<label for="t-option<?php echo $count; ?>"><?php echo $rowquestion[ans_3]; ?></label>
									<div class="check"><div class="inside"></div></div>
								  </li>
								  <li>
									<input type="radio" id="e-option<?php echo $count; ?>" name="selector1[<?php echo $count; ?>]" value="4">
									<label for="e-option<?php echo $count; ?>"><?php echo $rowquestion[ans_4]; ?></label>
									<div class="check"><div class="inside"></div></div>
								  </li>
								</ul>
								<input type="hidden" name="ques_id[<?php echo $count; ?>]" value="<?php echo $rowquestion[ques_id]; ?>">
							  </div>
							 </div>
							 <?php
							 $count++;
							 }
							 ?>

							 
							<div class="row margin-top30 btn_submit">
							 <input type="submit" class="flat-btn bg-color" name="submit" value="FINISH QUIZ">
							 </div>

							 </form>
                                
                            </div><!-- col-md-12 -->
                           
                      
                        </div>
                        </div>
                        
						
                    </div><!-- col-md-9 -->
                </div>
			
            </div>
        </section>

<?php
include "lib/footer.php";
?>