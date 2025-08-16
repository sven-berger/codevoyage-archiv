<?php
$bereich = 'Administrationsbereich';
$pageTitle = 'Snippet bearbeiten';
require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");

?>


<?php
try {
    // ID des zu bearbeitenden Snippets abrufen
    $id = $_GET['id'];
    $sql = "SELECT * FROM wissensportal WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':id' => $id]);
    $snippet = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$snippet) {
        echo "Snippet nicht gefunden!";
        exit;
    }

    // Kategorien laden
    $sql = "SELECT id, name FROM wissensportal_kategorien ORDER BY name";
    $stmt = $connection->query($sql);
    $kategorien = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // POST-Anfrage zur Aktualisierung
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $kategorie_id = $_POST['kategorie_id'];
        $url = $_POST['url'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $php_snippet = $_POST['php_snippet'];
        $php_snippet_mit_html = $_POST['php_snippet_mit_html'];
        $php_snippet_alternativ = $_POST['php_snippet_alternativ'];
        $python_snippet = $_POST['python_snippet'];
        $java_snippet = $_POST['java_snippet'];
        $javascript_snippet = $_POST['javascript_snippet'];
        $sql_snippet = $_POST['sql_snippet'];
        $mitteilung_snippet = $_POST['mitteilung_snippet'];

        $sql = "UPDATE wissensportal 
                SET kategorie_id = :kategorie_id, url = :url, title = :title, description = :description, 
                    php_snippet = :php_snippet, php_snippet_mit_html = :php_snippet_mit_html, 
                    php_snippet_alternativ = :php_snippet_alternativ, python_snippet = :python_snippet, 
                    java_snippet = :java_snippet, javascript_snippet = :javascript_snippet, sql_snippet = :sql_snippet,
                    mitteilung_snippet = :mitteilung_snippet 
                WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':kategorie_id' => $kategorie_id,
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
            ':id' => $id
        ]);

        header("Location: https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=" . urlencode($url));
        exit;
    }
} catch (PDOException $e) {
    echo "Fehler: " . htmlspecialchars($e->getMessage());
    exit;
}
?>

<!-- HTML-Formular -->
<form method="post">
    <label for="kategorie_id">Kategorie:</label>
    <select name="kategorie_id" id="kategorie_id">
        <?php foreach ($kategorien as $kategorie): ?>
            <option value="<?= htmlspecialchars($kategorie['id']) ?>" 
                <?= $kategorie['id'] == $snippet['kategorie_id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($kategorie['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="url">URL:</label>
    <input type="text" name="url" id="url" value="<?= htmlspecialchars($snippet['url']) ?>" required>

    <label for="title">Titel:</label>
    <input type="text" name="title" id="title" value="<?= htmlspecialchars($snippet['title']) ?>" required>

    <label for="description">Beschreibung:</label>
    <textarea name="description" id="description"><?= htmlspecialchars($snippet['description']) ?></textarea>

    <label for="php_snippet">PHP-Snippet:</label>
    <textarea name="php_snippet" id="php_snippet"><?= htmlspecialchars($snippet['php_snippet']) ?></textarea>

    <label for="php_snippet_mit_html">PHP-Snippet mit HTML:</label>
    <textarea name="php_snippet_mit_html" id="php_snippet_mit_html"><?= htmlspecialchars($snippet['php_snippet_mit_html']) ?></textarea>

    <label for="php_snippet_alternativ">PHP-Snippet Alternativ:</label>
    <textarea name="php_snippet_alternativ" id="php_snippet_alternativ"><?= htmlspecialchars($snippet['php_snippet_alternativ']) ?></textarea>

    <label for="python_snippet">Python-Snippet:</label>
    <textarea name="python_snippet" id="python_snippet"><?= htmlspecialchars($snippet['python_snippet']) ?></textarea>

    <label for="java_snippet">Java-Snippet:</label>
    <textarea name="java_snippet" id="java_snippet"><?= htmlspecialchars($snippet['java_snippet']) ?></textarea>

    <label for="javascript_snippet">JavaScript-Snippet:</label>
    <textarea name="javascript_snippet" id="javascript_snippet"><?= htmlspecialchars($snippet['javascript_snippet']) ?></textarea>

    <label for="sql_snippet">(My)SQL-Snippet:</label>
    <textarea name="sql_snippet" id="sql_snippet"><?= htmlspecialchars($snippet['sql_snippet']) ?></textarea>

    <label for="mitteilung_snippet">Mitteilung:</label>
    <textarea name="mitteilung_snippet" id="mitteilung_snippet"><?= htmlspecialchars($snippet['mitteilung_snippet']) ?></textarea>

    <button type="submit">Speichern</button>
</form>


<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>