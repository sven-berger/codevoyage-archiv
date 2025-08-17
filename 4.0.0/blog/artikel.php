<?php 
  $pageTitle = "Blog-Artikel";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<?php
// Datei mit Blogartikeln laden
$jsonPath = $_SERVER['DOCUMENT_ROOT'] . "/json/blog.json";
$eintraege = json_decode(file_get_contents($jsonPath), true);

// Artikel-ID aus URL holen
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Prüfen ob Artikel vorhanden ist
$artikel = null;
foreach ($eintraege as $eintrag) {
    if ((int)$eintrag['id'] === $id) {
        $artikel = $eintrag;
        break;
    }
}
?>

<?php if ($artikel): ?>
    <h4><?= htmlspecialchars($artikel['titel']) ?></h4>
    <p class="text-muted mb-1"><strong>Kategorie:</strong> <?= htmlspecialchars($artikel['kategorie']) ?></p>
    <p class="mb-3"><em><?= htmlspecialchars($artikel['beschreibung']) ?></em></p>
    <div class="mb-3"><?= nl2br($artikel['inhalt']) ?></div>
    <p><small class="text-muted">Erstellt am: <?= htmlspecialchars($artikel['erstellt_am']) ?></small></p>
    <div class="row">
        <div class="col-md-auto">
            <a href="index.php" class="btn btn-outline-secondary">Zurück zur Übersicht</a>
        </div>
        <div class="col-md-auto">
            <a href="../blog/edit.php?id=<?= $id ?>" class="btn btn-outline-primary">Artikel bearbeiten</a>
        </div>
        <div class="col-md-auto">
            <a href="../blog/delete.php?id=<?= $id ?>" class="btn btn-outline-danger">Artikel löschen</a>
        </div>
    </div>
<?php else: ?>
    <div class="alert alert-danger">Der Artikel konnte nicht gefunden werden.</div>
<?php endif; ?>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>