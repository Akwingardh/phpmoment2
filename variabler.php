<?php 
    $page_title = "Variabler";
    $body_title = "Variabler";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");
?>
                        </section>
            <section class="body-answer">
                <p><?php echo "Hej! Jag heter " . $name . ", är " . $age . " år gammal och nås på följande e-post: " . $mail;?></p>
            </section>

    <?php 
    include("includes/footer.php");
?>