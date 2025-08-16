<?php 
  $pageTitle = "Blog-Artikel bearbeiten";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/header.php");
?>

<?php
// ID aus GET holen
$id = (int) ($_GET['id'] ?? 0);
if (!$id) die("Keine ID übergeben.");

// JSON laden
$pfad = '../json/blog.json';
$artikel = json_decode(file_get_contents($pfad), true);

// Artikel finden
foreach ($artikel as $eintrag) {
    if ((int)$eintrag['id'] === $id) {
        $aktuellerArtikel = $eintrag;
        break;
    }
}

if (!isset($aktuellerArtikel)) die("Artikel nicht gefunden.");
?>

<!-- Bearbeitungsformular -->
<form class="d-grid" method="post">
  <div class="mb-2">
    <input type="hidden" name="id" value="<?= $aktuellerArtikel['id'] ?>" class="form-control">
  </div>

  <div class="mb-2">
    <label for="titel" class="fw-light form-label">Titel</label>
      <input type="text" name="titel" class="form-control" value="<?= htmlspecialchars($aktuellerArtikel['titel']) ?>">
  </div>

  <div class="mb-2">
    <label for="beschreibung" class="fw-light form-label">Kurzbeschreibung</label>
    <input type="text" name="beschreibung" class="form-control" value="<?= htmlspecialchars($aktuellerArtikel['beschreibung']) ?>">
  </div>

  <div class="mb-2">
    <label for="inhalt" class="fw-light form-label">Inhalt</label>
    <textarea name="inhalt" class="form-control"><?= htmlspecialchars($aktuellerArtikel['inhalt']) ?></textarea>
  </div>

  <div class="mb-2">
  <label for="kategorie" class="fw-light form-label">Kategorie</label>
  <select name="kategorie" class="fw-light form-control">
    <option <?= $aktuellerArtikel['kategorie'] == 'News' ? 'selected' : '' ?>>News</option>
    <option <?= $aktuellerArtikel['kategorie'] == 'Tutorials' ? 'selected' : '' ?>>Tutorials</option>
    <option <?= $aktuellerArtikel['kategorie'] == 'Allgemein' ? 'selected' : '' ?>>Allgemein</option>
  </select>
  <div class="row mt-4">
    <div class="col-md-auto">
      <button class="btn btn-success" type="submit">Speichern</button>
    </div>
  </div>
</form>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/footer.php"); ?>