</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/sidebar/php.sidebarLeft.php");
?>

</div>

<?php
$footer = file_get_contents("https://codevoyage.riftcore.de/1.0.0/python/templates/footer.html");
echo $footer;
?>

<!-- Highlight.js -->
<link rel="stylesheet" href="/4.0.0/assets/highlightjs/styles/github.min.css">
<script src="/4.0.0/assets/highlightjs/highlight.min.js"></script>
<script>
    hljs.highlightAll();
</script>
</body>

</html>