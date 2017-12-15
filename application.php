<?php

    ini_set('display_errors',1); ini_set('display_startup_errors',1); error_reporting(-1);

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
    <div class="wrap-course-details">
        <div class="portfolio">
            <article class="entry">
                <div class="entry-post">
                    <div class="row">
                        <div class="col-md-9">
                            

      <center>
          <b><h1>Sample PHP Application </h1>&nbsp;
                                    <h2 align="justify">Quadratic equation solver</h2>&nbsp;
                                    <p align="justify">This application will solve for the roots of a quadratic equation of the form ax<sup>2</sup>+ bx + c = 0 </p>&nbsp;
                                    <p align="justify">Enter the values of a, b and c in the fields below.</p>&nbsp;
         <form method = "POST" action = " ">
        <table >
            <tr>
               <td><label><b>Enter the value of a: </b></label></td>
                <td>&nbsp;</td>
               <td><input type = "number" name = "a"></td>
            </tr>

            <tr>
                <td><label><b>Enter the value of b</b> </label></td> 
                <td>&nbsp;</td>
               <td><input type = "number" name = "b"></td>
            </tr>

            <tr>
               <td><label>Enter the value of c </label></td> 
                <td>&nbsp;</td>
               <td><input type = "number" name = "c"></td>
            </tr>
            <tr>
               <td>
                  <input type = "submit" class="btn btn-blue" name = "solve" value = "Solve!"> 
               </td>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" class="btn btn-red"  name ="clear" value ="Clear">
                </td>
                
            </tr>
         </table>
             </form> </b></center>
    <?php
                    $coeff1 = $_POST['a'];
                    $coeff2 = $_POST['b'];
                    $const = $_POST['c'];
                    $precision =3;
                    $d = $coeff2*$coeff2 - 4*$coeff1*$const;
                    
                    if ($_POST['clear'])
                    {
                        $coeff1 = "";
                        $coeff2 = "";
                        $const = "";
                    }
                    
                    if ($_POST['solve'])
                    {
                       if($coeff1 != 0)
                       {
                       if($d < 0)
                       {
                           $message = "The equation ".$coeff1."x<sup>2</sup> + ".$coeff2."x + ".$const." = 0 has no real roots."."<br>";
                           $plusminusone = " + "; $plusminustwo = " - ";
                           $d *=-1;
                           $complex=(sqrt($d)/(2*$coeff1));
                           if ($coeff < 0)
                           {
                               //if negative imaginary term, tidies appearance.
                           $plusminustwo = " + ";
                           $plusminusone = " - ";
                           $complex *= -1;   
                           }
                          
                            $root1 = round(-$coeff2/(2*$coeff1), $precision).$plusminusone.round($complex, $precision).'i';
                            $root2 = round(-$coeff2/(2*$coeff1), $precision).$plusminustwo.round($complex, $precision).'i';
                           
                        }
                           
                        elseif($d == 0)
                        {
                            $message = "The equation ".$coeff1."x<sup>2</sup> + ".$coeff2."x + ".$const." = 0 has equal roots"."<br>";
                           
                                $root1 = -$coeff2/(2*$coeff1);
                                $root2 = $root1;
                            
                        }
                        else
                        {
                            $message = "The equation ".$coeff1."x<sup>2</sup> + ".$coeff2."x + ".$const." = 0 has distinct, real roots"."<br>";
                                $root1 = ((-$coeff2 + sqrt($d)) / (2*$coeff1));
                                $root2 = ((-$coeff2 - sqrt($d)) / (2*$coeff1));
                           
                        }
                         echo "<br>"; 
                        echo '<b align="justify">'.$message."</b>";
                        echo "<b>The roots for the equation are:</b><br>"; 
                        echo "<b>root 1 = ".$root1."</b><br>";
                        echo "<b>root 2 = ".$root2."</b><br>";
                    }
                    else
                    {
                        
                        echo "<br><b><h4>"."Value of a cannot be zero. Enter another value"."</h4></b>\n";
                    }
                    }
               
?>
                    
                                    
     
</div>
                            </div>
                        </div>
                   
            </article>
        </div>
     </div>
                    </div>
                </div>
     </div>          
     
                
</section>
<?php
  include "lib/footer.php";
?>
