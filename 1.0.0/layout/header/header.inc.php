<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://codevoyage.samwilliam.de/1.0.0/python/static/css/style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title><?php echo $pageTitle; ?></title>
</head>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/includes/database.inc.php");
    $mariadbVersion = getMariaDBVersion($connection);
    $section_beginn = "<div class='section'>";
    $section_ende = "</div>";
?>

<body>

    <div class="header">
        <?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/includes/navigation.inc.php"); ?>
    </div>
        <div class="main">
        <div class="content">
            <h2 class="pageTitle"><?php echo $pageTitle; ?></h2>
