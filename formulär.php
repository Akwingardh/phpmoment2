<?php 
    $page_title = "Formulär";
    $body_title = "Formulär";
    include("includes/header.php");
    include("includes/nav.php");
    include("includes/title.php");
?>

    <section class="body-answer">
        <section class="php-form-sec">
            <form action="formulär.php" method="get" id="form">
                <label for="name">Förnamn:</label>
                <input type="text" name="fname" required="required" placeholder="Förnamn" /><br><br>
                <label for="name">Efternamn:</label>
                <input type="text" name="email" required="required" placeholder="Efternamn" /><br><br>
                <?php 

        if (isset($_GET['fname'], $_GET['email'])) {
            $fname = $_GET['fname'];
            $lname = $_GET['email'];

            echo "Hej $fname $lname!<br>";
        } else {
            echo 'Skriv in ditt för och efternamn.';
        }
    ?><br><br>
                <button type="submit">Skicka in</button><br><br>
            </form>
        </section>
    </section>

    

<section class="body-answer">
        <section class="php-form-sec">
            <form action="calculate.php" method="post" id="form2">
                <label for="length">Längd i meter:</label>
                <input type="text" name="length" required="required" placeholder="Längd" /><br><br>
                <label for="width">Bredd i meter:</label>
                <input type="text" name="width" required="required" placeholder="Bredd" /><br><br>
                <button type="submit">Räkna ut arean</button><br><br>
            </form>
        </section>
    </section>

    <?php 
    include("includes/footer.php");
?>