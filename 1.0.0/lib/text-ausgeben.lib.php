<?php
    require_once("../1.0.0/lib/forms/text-ausgeben.form.php");    
?>

    <?php if (isset($_POST['string']) && isset($_POST['ausgaben'])): ?>
        <?php
            $string = htmlspecialchars($_POST['string']);
            $ausgaben = (int)$_POST['ausgaben'];

            for ($i = 0; $i < $ausgaben; $i++) {
                echo $string . "<br>";
            }
        ?>
    <?php endif; ?>