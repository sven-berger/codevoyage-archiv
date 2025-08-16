<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $pageTitle = "Blog-Artikel erstellen";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/header.php");
?>

<!-- blog-erstellen.php -->
<form class="d-grid" method="POST">
    <div class="mb-2">
        <label class="form-label fw-light">Überschrift</label>
        <input type="text" name="titel" class="form-control" required>
    </div>

    <div class="mb-2">
        <label class="fw-light form-label">Kategorie</label>
        <select name="kategorie" class="fw-light form-control" required>
            <option value="News" class="fw-light">News</option>
            <option value="Tutorials" class="fw-light">Tutorials</option>
            <option value="Allgemein" class="fw-light">Allgemein</option>
        </select>
    </div>

    <div class="mb-2">
        <label class="fw-light form-label">Kurzbeschreibung</label>
        <input type="text" name="beschreibung" class="form-control" required>
    </div>
    
    <div class="mb-2">
        <label class="fw-light form-label">Inhalt</label>
        <textarea name="inhalt" rows="8" cols="60" class="form-control"></textarea>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-auto">
            <button class="btn btn-success" type="submit">Artikel speichern</button>
        </div>
    </div>
</form>

<?php
    if (isset($_POST['titel']) && isset($_POST['kategorie']) && isset($_POST['beschreibung']) && isset($_POST['inhalt'])) {
        $dateipfad = '../json/blog.json';

        $artikel = [];
        if (file_exists($dateipfad)) {
            $inhalt = file_get_contents($dateipfad);
            $artikel = json_decode($inhalt, true);  
        }

        // Höchste ID ermitteln (Zahl) – nur wenn mind. 1 Artikel vorhanden
        $maxID = 0;
        foreach ($artikel as $a) {
            if (is_numeric($a['id']) && (int)$a['id'] > $maxID) {
                $maxID = (int)$a['id'];
            }
        }
        
        $neueID = $maxID + 1;

        // Artikel erstellen
        $neuerEintrag = [
            'id' => $neueID,
            'titel' => $_POST['titel'],
            'beschreibung' => $_POST['beschreibung'],
            'inhalt' => $_POST['inhalt'],
            'kategorie' => $_POST['kategorie'],
            'erstellt_am' => date('Y-m-d H:i:s'),
            'geaendert_am' => null
        ];

        $artikel[] = $neuerEintrag;
        file_put_contents($dateipfad, json_encode($artikel, JSON_PRETTY_PRINT));

        // 4. Zurück in JSON-Datei speichern mit Erfolgskontrolle
        if (file_put_contents($dateipfad, json_encode($artikel, JSON_PRETTY_PRINT))) {
            echo "<div class='alert alert-success mt-3'>Artikel erfolgreich gespeichert! <a href='../blog/'>Zurück</a></div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Fehler beim Speichern der Datei!</div>";
        }
    }
?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/footer.php"); ?>