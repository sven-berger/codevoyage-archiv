<?php
    $page = "Administrationsbereich";
    $pageTitle = "Navigationspunkt löschen";
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");

    if (isset($_GET['id'])) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        try {
            $prepare = $connection->prepare('DELETE FROM `acp_sidebar_left_navigation_header` WHERE `ID` = :id');
            $prepare->bindParam(':id', $id, PDO::PARAM_INT);
            $prepare->execute();
            header("Location: https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/index.php");
            exit();
        } catch (PDOException $e) {
            echo 'Fehler beim Löschen: ' . $e->getMessage();
        }
    } else {
        echo 'Ungültige ID.';
    }

    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/footer.inc.php");