<?php
$bereich = 'Administrationsbereich';
$pageTitle = 'Snippet hinzufügen';
require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");
?>

<form action="" method="post">
    <label for="kategorie"><h3 class="section-title">Kategorie</h3></label>
    <select name="kategorie_id" id="kategorie_id" class="wissensportal-kategorien" required>
    <?php
    $kategorien = $connection->query("SELECT id, name FROM wissensportal_kategorien ORDER BY id")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($kategorien as $kategorie) {
        echo "<option value='{$kategorie['id']}'>" . htmlspecialchars($kategorie['name']) . "</option>";
    }
    ?>
    </select>

    <label for="title"><h3 class="section-title">Titel</h3></label>
    <input type="text" name="title" id="title" required>

    <label for="url"><h3 class="section-title">URL</h3></label>
    <input type="text" name="url" id="url" required>

    <label for="description"><h3 class="section-title">Beschreibung</h3></label>
    <textarea name="description" id="description"></textarea>

    <label for="php_snippet"><h3 class="section-title">PHP-Snippet</h3></label>
    <textarea name="php_snippet" id="php_snippet"></textarea>

    <label for="php_snippet_mit_html"><h3 class="section-title">PHP-Snippet mit HTML</h3></label>
    <textarea name="php_snippet_mit_html" id="php_snippet_mit_html"></textarea>

    <label for="php_snippet_alternativ"><h3 class="section-title">PHP-Snippet (Alternative Syntax)</h3></label>
    <textarea name="php_snippet_alternativ" id="php_snippet_alternativ"></textarea>

    <label for="python_snippet"><h3 class="section-title">Python Snippet</h3></label>
    <textarea name="python_snippet" id="python_snippet"></textarea>

    <label for="java_snippet"><h3 class="section-title">Java Snippet</h3></label>
    <textarea name="java_snippet" id="java_snippet"></textarea>

    <label for="javascript_snippet"><h3 class="section-title">JavaScript Snippet</h3></label>
    <textarea name="javascript_snippet" id="javascript_snippet"></textarea>

    <label for="sql_snippet"><h3 class="section-title">(My)SQL Snippet</h3></label>
    <textarea name="sql_snippet" id="sql_snippet"></textarea>

    <label for="mitteilung_snippet"><h3 class="section-title">Mitteilung</h3></label>
    <textarea name="mitteilung_snippet" id="mitteilung_snippet"></textarea>

    <input type="submit" value="Speichern">
    <input type="reset" value="Zurücksetzen">
</form>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    $title = filter_input(INPUT_POST, 'title');
    $description = filter_input(INPUT_POST, 'description');
    $php_snippet = filter_input(INPUT_POST, 'php_snippet');
    $php_snippet_mit_html = filter_input(INPUT_POST, 'php_snippet_mit_html');
    $php_snippet_alternativ = filter_input(INPUT_POST, 'php_snippet_alternativ');
    $python_snippet = filter_input(INPUT_POST, 'python_snippet');
    $java = filter_input(INPUT_POST, 'java_snippet');
    $javascript_snippet = filter_input(INPUT_POST, 'javascript_snippet');
    $sql_snippet = filter_input(INPUT_POST, 'sql_snippet');
    $mitteilung_snippet = filter_input(INPUT_POST, 'mitteilung_snippet');
    $kategorie_id = filter_input(INPUT_POST, 'kategorie_id', FILTER_VALIDATE_INT);

    if ($url && $title && $kategorie_id) {
        $sql = "INSERT INTO wissensportal (url, title, description, php_snippet, php_snippet_mit_html, php_snippet_alternativ, python_snippet, java_snippet, javascript_snippet, sql_snippet, mitteilung_snippet, kategorie_id) 
                VALUES (:url, :title, :description, :php_snippet, :php_snippet_mit_html, :php_snippet_alternativ, :python_snippet, :java_snippet, :javascript_snippet, :sql_snippet, :mitteilung_snippet, :kategorie_id)";
        $stmt = $connection->prepare($sql);

        try {
            $stmt->execute([
                ':url' => $url,
                ':title' => $title,
                ':description' => $description,
                ':php_snippet' => $php_snippet,
                ':php_snippet_mit_html' => $php_snippet_mit_html,
                ':php_snippet_alternativ' => $php_snippet_alternativ,
                ':python_snippet' => $python_snippet,
                ':java_snippet' => $java_snippet,
                ':javascript_snippet' => $javascript_snippet,
                ':sql_snippet' => $sql_snippet,
                ':mitteilung_snippet' => $mitteilung_snippet,
                ':kategorie_id' => $kategorie_id
            ]);

            header("Location: https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/index.php");
            exit();
        } catch (PDOException $e) {
            echo "Fehler beim Einfügen der Daten: " . htmlspecialchars($e->getMessage());
        }
    } else {
        echo "Bitte füllen Sie alle Pflichtfelder aus.";
    }
}

require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>
