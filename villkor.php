<?php 
    $page_title = "Villkor";
    $body_title = "Villkor";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");

?>
            </section>
            <section class="body-answer">
                <p><?php 

                    echo "Datum/klockslag: " . date("y-m-d:G.i")."<br><br>";

                    if(date("l") == "sunday") {
                        echo "Idag är det söndag.<br><br>";
                    } else {
                        echo "Idag är det inte söndag.<br><br>";
                    }

                    $hour = intval(date("G"));

                    if($hour >= 6 && $hour < 9) {
                        echo "Det är morgon.<br><br>";
                    } elseif($hour >= 9 && $hour < 2) {
                        echo "Det är förmiddag.<br><br>";
                    } elseif($hour >= 12 && $hour < 18) {
                        echo "Det är eftermiddag.<br><br>";
                    } elseif($hour >= 18 | $hour < 6) {
                        echo "Det är natt.<br><br>";
                    }

                    $weekday = date("l");

                    switch($weekday) {
                        case "Monday":
                            echo "Idag är det måndag.";
                            break;
                        case "Tuesday":
                            echo "Idag är det tisdag.";
                            break;
                        case "Wednesday":
                            echo "Idag är det onsdag.";
                            break;
                        case "Thursday":
                            echo "Idag är det torsdag.";
                            break;
                        case "Friday":
                            echo "Idag är det fredag.";
                            break;
                        case "Saturday":
                            echo "Idag är det lördag.";
                            break;
                        case "Sunday":
                            echo "Idag är det sunday.";
                            break;
                    }
                    

                ?></p>
            </section>
            

    <?php 
    include("includes/footer.php");
?>