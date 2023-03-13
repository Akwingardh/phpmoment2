<?php 
    $page_title = "Variabler";
    $body_title = "Variabler";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");
?>
                        </section>
            <section class="body-answer">
                <p><?php echo "Hej! Jag heter " . $name . ", är " . $age . " år gammal och nås på följande e-post: <a href='mailto:" . $mail . "'>$mail</a>";?></p>
            </section>

    <?php 
    include("includes/footer.php");
?>

"<a href='mailto:" . $to . "?body=" . $body . "'>"