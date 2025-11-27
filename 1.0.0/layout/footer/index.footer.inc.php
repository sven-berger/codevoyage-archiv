</div>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/sidebar/index.sidebarLeft.php");
?>

</div>


<?php
    $footer = file_get_contents("https://codevoyage.riftcore.de/1.0.0/python/templates/footer.html");
    echo $footer;
?>

</body>

</html>