<?php 
    $page_title = "Läsa in extern textfil";
    $body_title = "Läsa in extern textfil";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");
?>
            </section>
            <section class="body-answer">
                <p>
                <?php
                   $coursesArr = file("courses.txt");

                    echo "<ul>";

                   foreach ($coursesArr as $course) {
                        echo "<li>".$course."</li>";
                   }

                   echo "</ul>"
                ?>
                </p>
            </section>

    <?php 
    include("includes/footer.php");
?>