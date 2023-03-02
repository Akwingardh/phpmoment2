<?php 
    $page_title = "Upprepningar";
    $body_title = "Upprepningar";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");
?>
            
            <section class="body-answer">
                <p><br><?php

                    for($i=10; $i > 0; $i--) {
                        echo $i . " ";
                    }

                    $courses = array("Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III");

                   
                        echo "<ul>";
                            foreach($courses as $course) {
                                echo "<li>". $course . "</li>";
                            }
                        echo "</ul>";

                    $coursesAlpha = $courses;
                    sort($coursesAlpha);

                        echo "<ul>";
                            foreach($coursesAlpha as $course) {
                                echo "<li>". $course . "</li>";
                            }
                        echo "</ul>";


                            
                        
                    

                ?></p>
            </section>

    <?php 
    include("includes/footer.php");
?>