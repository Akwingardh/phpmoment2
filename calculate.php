<?php 
    $page_title = "Kalkylator";
    $body_title = "Areakalkylator";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");
?>
            </section>
            <section class="body-answer">
                <p>
                <?php 

                    if (isset($_POST['length'], $_POST['width'])) {
                        $length = $_POST['length'];
                        $width = $_POST['width'];

                        $area = (intval($length)*intval($width));

                        echo "Längden $length meter och bredden $width meter ger en area på $area kvadratmeter.";
                    }
?>

                </p>
            </section>

    <?php 
    include("includes/footer.php");
?>