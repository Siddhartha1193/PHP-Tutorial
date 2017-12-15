<?php 
	include "my_admin/lib/db_config.php";

	class Front48{
		
		public $db;
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
 
			}
		}




       ////* Dashboard Section*////

	  
        /* Select Page */
		public function get_page($page_id){

				$selectissue="SELECT * FROM `pages` WHERE `page_id`='$page_id'";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

		 /* Select parent Pages */
		public function get_parent_pages(){

				$selectissue="SELECT * FROM `pages` WHERE `page_parent_id`='0' AND `page_id`!='25' AND `page_id`!='26'";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

		 /* Select Inner Pages */
		public function get_inner_pages($parent_id){

				$selectissue="SELECT * FROM `pages` WHERE `page_parent_id`='$parent_id'";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}


       

	    /* Select Questions */
		public function get_questions($quiz_id){

				$selectissue="SELECT * FROM `questions` WHERE `quiz_id`='$quiz_id' ORDER BY RAND() LIMIT 10";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

		

         /* Add Result */
		public function add_result($std_id, $quiz_id, $score, $percentage, $result_date){
	
				$sql1="INSERT INTO `result` (result_id,student_id,quiz_id,score,percentage,result_date) VALUES ('','$std_id','$quiz_id','$score','$percentage','$result_date')";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Connection Error");
        		return $result;	
		}

       
        
		/* Select Quiz3 Answer */
		public function get_quiz3ans($quiz_id){

				$sql1_update="SELECT * FROM  `quiz3ans` WHERE `quiz_id`='$quiz_id'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}


        /* Select Results */
		public function get_results($ques_id, $selector1){

				$sql1_update="SELECT * FROM  `questions` WHERE `ques_id`='$ques_id' AND `ans_correct`='$selector1'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}

		public function get_solutions($ques_id){

				$sql1_update="SELECT * FROM  `questions` WHERE `ques_id`='$ques_id'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}
 
		
		 /* Select Student Result */
		public function get_result($stu_id){

				$sql1_update="SELECT * FROM  `result` WHERE `student_id`='$stu_id'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}
             
        public function get_correct(){    
	        return $_SESSION['correct'];
	    }

		public function get_attempt(){    
	        return $_SESSION['attempt'];
	    }



        /* Below Page NAV  */
		public function page_nav_pre($page_id, $page_parent_id){
                
				$page_pre_id=$page_id-1;
				$selectissue="SELECT * FROM `pages` WHERE `page_id`='$page_pre_id' AND `page_parent_id`='$page_parent_id'";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

		public function page_nav_next($page_id, $page_parent_id){
                
				$page_next_id=$page_id+1;
				$selectissue="SELECT * FROM `pages` WHERE `page_id`='$page_next_id' AND `page_parent_id`='$page_parent_id'";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}
	  ////* End Dashboard Section*////

	}
?>