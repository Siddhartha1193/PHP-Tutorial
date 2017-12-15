<div class="sidebar">
                            <div class="widget widget-categories">
                                <h3 class="widget-title">CHAPTERS</h3>
                                <div id='cssmenu'>
							<ul>
							<?php
                            $parent_page=$front->get_parent_pages();
                            while($row_parent_page=mysqli_fetch_array($parent_page))
							{
								$parent_id=$row_parent_page['page_id'];
							    $inner_page = $front->get_inner_pages($parent_id);
							    $count_inner_page=mysqli_num_rows($inner_page);
							?>
							   
							   <li class='<?php if($count_inner_page>0){ echo "has-sub";} ?> <?php if(($_GET[page_id]==$row_parent_page['page_id']) || ($rowpage[page_parent_id]==$row_parent_page['page_id'])) {echo "active"; } ?>'><a href='page.php?page_id=<?php echo $row_parent_page['page_id']; ?>'><span><?php echo htmlspecialchars($row_parent_page['page_title']); ?></span></a>
							     <?php 
								 if($count_inner_page>0)
								 {
								 ?>
								  <ul <?php if(($_GET[page_id]==$row_parent_page['page_id']) || ($rowpage[page_parent_id]==$row_parent_page['page_id'])) {echo "style=display:block;"; } ?>>
								  <?php
								   while($row_inner_page=mysqli_fetch_array($inner_page))
							       {
									 ?>
									 <li><a href='page.php?page_id=<?php echo $row_inner_page['page_id']; ?>' <?php if($_GET[page_id]==$row_inner_page['page_id']) {echo "class='tab_active'"; } ?>><span><?php echo htmlspecialchars($row_inner_page['page_title']); ?></span></a></li>
								   <?php
							       }
								   ?>
								  </ul>
								  <?php
							     }
								 ?>
							   </li>
							   <?php
							   }
								 ?>
							   
							</ul>
							</div>
                            </div>
							
                            <div class="quiz_tab">
                                <h3 class="widget-title">QUIZ</h3>
                                <ul>
                                    <li>
                                        <a class="flat-btn bg-color" href="quiz_details1.php">QUIZ 1</a>
                                    </li>
                                    <li>
                                       <a class="flat-btn bg-color" href="quiz_details2.php">QUIZ 2</a>  
                                    </li>
                                    
                                    <li>
                                       <a class="flat-btn bg-color" href="ungraded_quiz.php">QUIZ 3</a>  
                                    </li>
									<li>
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
