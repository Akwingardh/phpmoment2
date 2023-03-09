<?php 
    $page_title = "Formulär";
    $body_title = "Formulär";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");
?>
            
            <section class="body-answer">
                <section id="php-form-sec">
                    <form id="php-form" action="formulär.php" method="get">
                        <label for="fname">Förnamn: </label><br>
                        <input type="text" id="fname" name="fname" placeholder="Anna"><br>
                        <label for="lname">Efternamn: </label><br>
                        <input type="text" id="lname" name="lname" placeholder="Larsson"><br>
                        <input type="submit">
                    </form>
                </section>
            </section>


    <?php 
    
        if(isset($_GET["fname"], $_GET["lname"])) {
            $fname = htmlspecialchars($_GET["fname"]);
            $lname = htmlspecialchars($_GET["lname"]);

            echo "Hej $fname $lname!<br>";
        } else {
            echo "Du måste skriva in både förnamn och efternamn.";
        }

    ?>

    <?php 
    include("includes/footer.php");
?>