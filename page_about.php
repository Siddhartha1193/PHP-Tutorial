<?php
$page_id='25';
include "lib/class.front.php";
$front = new Front48();

include "lib/header.php";

// SELECT PAGE
$page=$front->get_page($page_id);
$rowpage=mysqli_fetch_array($page);
		?>


 

<!-- Iconbox -->
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
                            <div class="portfolio">
                                <article class="entry">
                                    <div class="entry-post">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="wrap-entry">
                                                    <div class="entry-categories">
                                                        <span><!--<a href="#"></a>--></span>
                                                    
                                                    <h3 class="entry-title"><a href="#"><?php echo $rowpage[page_title]; ?></a></h3>
                                                    </div>
                                                </div><!-- wrap-entry -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="dividers h58">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div><!-- entry-post -->
                                   <?php 
										if($rowpage[page_image]!='')
										{
									?>
                                    <div class="featured-post ">
                                        <div class="flex-viewport">
                                            <img src="files/<?php echo $rowpage[page_image]; ?>" alt="image">
                                        </div>
                                    </div>
									<?php
										} 
									?>
                                </article>
                               
                            </div>
                            <div class="course-text">
							  <?php echo $rowpage[page_content]; ?>
                            </div>
                           
                           
                            
                        </div>

						


                    </div><!-- col-md-9 -->
                </div>
			
            </div>
        </section>


		<?php
		include "lib/footer.php";
		?>
