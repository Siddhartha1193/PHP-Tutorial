<?php 
	include "db_config.php";

	class User1248{
		
		public $db;
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
 
			}
		}

      ////*User Section*////

		/*** for login process ***/
		public function check_login($username, $password){
        	
        	$password = base64_encode($password);
			$sql2="SELECT * FROM `user` WHERE `user_name`='$username' AND `user_pass`='$password'";
			
			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
		
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true; 
	            $_SESSION['uid'] = $user_data['user_id'];
				$_SESSION['username']=$user_data['user_name'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	
    	/*** starting the session ***/
	    public function get_session(){    
	        return $_SESSION['login'];
	    }

        /* For Logout*/
	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

        /* For User Settings*/
	    public function user_details($uid) {
	        $sqld="SELECT * FROM `user` WHERE `user_id`='$uid'";
        	$resultd = mysqli_query($this->db,$sqld);
                return $resultd;
	    }


        /* For User Update*/
	    public function user_update($uid,$name) {
	        $sqld="UPDATE `user` SET `user_name`='$name' WHERE `user_id`='$uid'";
        	$resultd = mysqli_query($this->db,$sqld);
                return $resultd;
	    }


        /* For Password Update*/
	    public function user_pass_update($uid,$name,$password) {
	        $sqld="UPDATE `user` SET `user_name`='$name',`user_pass`='$password' WHERE `user_id`='$uid'";
        	$resultd = mysqli_query($this->db,$sqld);
                return $resultd;
	    }

       ///////*End User Section*////



       ////* Dashboard Section*////

	    /* Add Page */
		public function add_page($page_title, $page_parent_id, $Editor1){
			       $page_title=addslashes($page_title);
	
				$sql1="INSERT INTO `pages` (page_id,page_parent_id,page_title,page_content) VALUES ('','$page_parent_id','$page_title','$Editor1')";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Connection Error");
        		return $result;
		}


 /* Delete Page */


		/* Select Parent Pages */
		public function select_parent_page(){

				$selectissue="SELECT * FROM `pages` WHERE `page_parent_id`='0' ORDER BY `page_id` ASC";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

		/* Select Pages */
		public function get_pages(){

				$selectissue="SELECT * FROM `pages` WHERE 1 ORDER BY `page_id` ASC";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

        /* Select Pages */
		public function get_page($page_id){

				$selectissue="SELECT * FROM `pages` WHERE `page_id`='$page_id' ORDER BY `page_id` ASC";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

        /* Update Page */
		public function update_page($page_id, $page_title, $page_parent_id, $Editor1, $first_file){
			    $page_title=addslashes($page_title);
	
				$sql1="UPDATE `pages` SET `page_parent_id`='$page_parent_id',`page_title`='$page_title',`page_content`='$Editor1',page_image='$first_file' WHERE `page_id`='$page_id'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Connection Error");
        		return $result;
		}
		

	    /* Select Questions */
		public function get_questions($quiz_id){

				$selectissue="SELECT * FROM `questions` WHERE `quiz_id`='$quiz_id' ORDER BY ques_id DESC";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}

		/* Select a single Question */
		public function get_question($ques_id){

				$selectissue="SELECT * FROM `questions` WHERE `ques_id`='$ques_id'";
				$issueresult = mysqli_query($this->db,$selectissue) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $issueresult;
		}


         /* Add Question */
		public function add_question($quiz_id, $ques_title, $ans_1, $ans_2, $ans_3, $ans_4, $ans_correct){
			     $ques_title=addslashes($ques_title);
				 $ans_1=addslashes($ans_1);
				 $ans_2=addslashes($ans_2);
				 $ans_3=addslashes($ans_3);
				 $ans_4=addslashes($ans_4);
	
				$sql1="INSERT INTO `questions` (ques_id,quiz_id,ques_title,ans_1,ans_2,ans_3,ans_4,ans_correct) VALUES ('','$quiz_id','$ques_title','$ans_1','$ans_2','$ans_3','$ans_4','$ans_correct')";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Connection Error");
        		return $result;
			
		}

         /* Update Question */
		public function update_question($ques_id, $ques_title, $ans_1, $ans_2, $ans_3, $ans_4, $ans_correct){
                 $ques_title=addslashes($ques_title);
				 $ans_1=addslashes($ans_1);
				 $ans_2=addslashes($ans_2);
				 $ans_3=addslashes($ans_3);
				 $ans_4=addslashes($ans_4);

				$sql1_update="UPDATE `questions` SET `ques_title`='$ques_title',`ans_1`='$ans_1',`ans_2`='$ans_2',`ans_3`='$ans_3',`ans_4`='$ans_4',`ans_correct`='$ans_correct' WHERE ques_id='$ques_id'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}

       /* Update Quiz3 Answer */
       public function update_quiz3ans($quiz_id, $first_file){

				$sql1_update="UPDATE `quiz3ans` SET `answer`='$first_file' WHERE quiz_id='$quiz_id'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}
        
		/* Select Quiz3 Answer */
		public function get_quiz3ans($quiz_id){

				$sql1_update="SELECT * FROM  `quiz3ans` WHERE `quiz_id`='$quiz_id'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}

        /* Select Results */
		public function get_results(){

				$sql1_update="SELECT * FROM  `result` WHERE 1 ORDER BY result_id DESC";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}
             

	   /* Delete */
	   public function del_records($table, $field, $del_id){

				$sql1_update="DELETE FROM `$table` WHERE `$field`='$del_id'";
				$result_update = mysqli_query($this->db,$sql1_update) or die(mysqli_connect_errno()."Connection Error");
        		return $result_update;
		}
  

	  ////* End Dashboard Section*////

	}
?>
