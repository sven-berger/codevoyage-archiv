</div>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/sidebar/acp.sidebarLeft.php");
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/sidebar/acp.sidebarRight.php");
?>

</div>

<?php
    $footer = file_get_contents("https://codevoyage.samwilliam.de/1.0.0/python/templates/footer.html");
    echo $footer;
?>

</body>
</html>