<?php
$bereich = 'Administrationsbereich';
$pageTitle = "Menüpunkt ändern (Eigene Werke)";
require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");

try {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $sql = "SELECT * FROM acp_sidebar_left_eigene_werke WHERE ID = :id";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            echo "Eintrag nicht gefunden!";
            exit;
        }
    } else {
        echo "ID fehlt!";
        exit;
    }
} catch (PDOException $e) {
    echo 'Fehler beim Laden des Eintrags: ' . htmlspecialchars($e->getMessage());
    exit;
}
?>

<?php echo $section_beginn; ?>
<form action="edit.php?id=<?php echo $id; ?>" method="post">
    <label for="url">URL:</label>
    <input id="url" name="url" value="<?php echo htmlspecialchars($row['url']); ?>" required><br>

    <label for="ziel">Ziel:</label>
    <input type="text" name="ziel" value="<?php echo htmlspecialchars($row['ziel']); ?>" required><br>

    <input type="submit" value="Speichern">
</form>
<?php echo $section_ende; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (!empty($_POST['url']) && !empty($_POST['ziel'])) {
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_SPECIAL_CHARS);
            $ziel = filter_input(INPUT_POST, 'ziel', FILTER_SANITIZE_SPECIAL_CHARS);

            $prepare = $connection->prepare('UPDATE acp_sidebar_left_eigene_werke SET url = :url, ziel = :ziel WHERE ID = :id');
            $prepare->bindParam(':url', $url, PDO::PARAM_STR);
            $prepare->bindParam(':ziel', $ziel, PDO::PARAM_STR);
            $prepare->bindParam(':id', $id, PDO::PARAM_INT);
            $prepare->execute();

            header("Location: https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/index.php");
            exit();
        } else {
            echo 'Bitte füllen Sie alle Felder aus.';
        }
    } catch (PDOException $e) {
        echo 'Es liegt ein Problem vor: ' . htmlspecialchars($e->getMessage());
    }
}
?>

<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>