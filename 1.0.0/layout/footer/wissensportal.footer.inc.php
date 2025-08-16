</div>

<?php
    require_once ("../1.0.0/layout/sidebar/wissensportal.sidebarLeft.php");
    require_once ("../1.0.0/layout/sidebar/wissensportal.sidebarRight.php");
?>
</div>

<?php
    $footer = file_get_contents("https://codevoyage.samwilliam.de/1.0.0/python/templates/footer.html");
    echo $footer;
?>

</body>
</html>