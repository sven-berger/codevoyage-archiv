<?php
$bereich = 'Administrationsbereich';
$pageTitle = 'Snippet bearbeiten';
require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");
?>

<?php
try {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `wissensportal_objektorientierung` WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':id' => $id]);
    $snippet = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$snippet) {
        echo "Snippet nicht gefunden!";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = filter_input(INPUT_POST, 'title');
        $description = filter_input(INPUT_POST, 'description');        
        $url = filter_input(INPUT_POST, 'url');
        $php_klasse_1_name = filter_input(INPUT_POST, 'php_klasse_1_name');
        $php_klasse_1 = filter_input(INPUT_POST, 'php_klasse_1');
        $php_klasse_2_name = filter_input(INPUT_POST, 'php_klasse_2_name');
        $php_klasse_2 = filter_input(INPUT_POST, 'php_klasse_2');
        $php_klasse_3_name = filter_input(INPUT_POST, 'php_klasse_3_name');
        $php_klasse_3 = filter_input(INPUT_POST, 'php_klasse_3');
        $php_klasse_4_name = filter_input(INPUT_POST, 'php_klasse_4_name');
        $php_klasse_4 = filter_input(INPUT_POST, 'php_klasse_4');
        $php_klasse_5_name = filter_input(INPUT_POST, 'php_klasse_5_name');
        $php_klasse_5 = filter_input(INPUT_POST, 'php_klasse_5');
        $java_klasse_1_name = filter_input(INPUT_POST, 'java_klasse_1_name');
        $java_klasse_1 = filter_input(INPUT_POST, 'java_klasse_1');
        $java_klasse_2_name = filter_input(INPUT_POST, 'java_klasse_2_name');
        $java_klasse_2 = filter_input(INPUT_POST, 'java_klasse_2');
        $java_klasse_3_name = filter_input(INPUT_POST, 'java_klasse_3_name');
        $java_klasse_3 = filter_input(INPUT_POST, 'java_klasse_3');
        $java_klasse_4_name = filter_input(INPUT_POST, 'java_klasse_4_name');
        $java_klasse_4 = filter_input(INPUT_POST, 'java_klasse_4');
        $java_klasse_5_name = filter_input(INPUT_POST, 'java_klasse_5_name');
        $java_klasse_5 = filter_input(INPUT_POST, 'java_klasse_5');

        $sql = "UPDATE wissensportal_objektorientierung SET
        title = :title, 
        url = :url, 
        description = :description, 
        php_klasse_1_name = :php_klasse_1_name, 
        php_klasse_1 = :php_klasse_1, 
        php_klasse_2_name = :php_klasse_2_name, 
        php_klasse_2 = :php_klasse_2, 
        php_klasse_3_name = :php_klasse_3_name, 
        php_klasse_3 = :php_klasse_3, 
        php_klasse_4_name = :php_klasse_4_name, 
        php_klasse_4 = :php_klasse_4, 
        php_klasse_5_name = :php_klasse_5_name, 
        php_klasse_5 = :php_klasse_5, 
        java_klasse_1_name = :java_klasse_1_name, 
        java_klasse_1 = :java_klasse_1, 
        java_klasse_2_name = :java_klasse_2_name, 
        java_klasse_2 = :java_klasse_2, 
        java_klasse_3_name = :java_klasse_3_name, 
        java_klasse_3 = :java_klasse_3, 
        java_klasse_4_name = :java_klasse_4_name, 
        java_klasse_4 = :java_klasse_4, 
        java_klasse_5_name = :java_klasse_5_name, 
        java_klasse_5 = :java_klasse_5 
        WHERE id = :id";
        
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':url' => $url,
            ':php_klasse_1_name' => $php_klasse_1_name,
            ':php_klasse_1' => $php_klasse_1,
            ':php_klasse_2_name' => $php_klasse_2_name,
            ':php_klasse_2' => $php_klasse_2,
            ':php_klasse_3_name' => $php_klasse_3_name,
            ':php_klasse_3' => $php_klasse_3,
            ':php_klasse_4_name' => $php_klasse_4_name,
            ':php_klasse_4' => $php_klasse_4,
            ':php_klasse_5_name' => $php_klasse_5_name,
            ':php_klasse_5' => $php_klasse_5,
            ':java_klasse_1_name' => $java_klasse_1_name,
            ':java_klasse_1' => $java_klasse_1,
            ':java_klasse_2_name' => $java_klasse_2_name,
            ':java_klasse_2' => $java_klasse_2,
            ':java_klasse_3_name' => $java_klasse_3_name,
            ':java_klasse_3' => $java_klasse_3,
            ':java_klasse_4_name' => $java_klasse_4_name,
            ':java_klasse_4' => $java_klasse_4,
            ':java_klasse_5_name' => $java_klasse_5_name,
            ':java_klasse_5' => $java_klasse_5,
            ':id' => $id
        ]);

        header("Location: /1.0.0/wissensportal//index.php?oop_snippet=" . $snippet['url']);
        exit;
    }
    
} catch (PDOException $e) {
    echo "Fehler: " . htmlspecialchars($e->getMessage());
    exit;
}
?>

<form action="" method="post">
    <h3 class="section-title">Informationen</h3>
    <?php echo $section_beginn; ?>
    <label for="title">Titel</label>
    <input type="text" name="title" value="<?php echo htmlspecialchars($snippet['title']); ?>" required>
    <label for="url">URL</label>
    <input type="text" name="url" value="<?php echo htmlspecialchars($snippet['url']); ?>" required>
    <label for="description">Beschreibung</label>
    <input type="description" id="description" name="description" value="<?php echo htmlspecialchars($snippet['description']); ?>">
    <?php echo $section_ende; ?>

    <h3 class="section-title">PHP-Klasse #1</h3>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_1_name">Name der Klasse</label>
    <input type="text" name="php_klasse_1_name" value="<?php echo htmlspecialchars($snippet['php_klasse_1_name']); ?>" required>
    <label for="php_klasse_1">Inhalt</label>
   <textarea name="php_klasse_1" id="php_klasse_1" required><?php echo htmlspecialchars($snippet['php_klasse_1']); ?></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">PHP-Klasse #2</h3>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_2_name">Name der Klasse</label>
    <input type="text" name="php_klasse_2_name" value="<?php echo htmlspecialchars($snippet['php_klasse_2_name']); ?>" required>
    <label for="php_klasse_2">Inhalt</label>
    <textarea name="php_klasse_2" id="php_klasse_2" required><?php echo htmlspecialchars($snippet['php_klasse_2']); ?></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">PHP-Klasse #3</h3>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_3_name">Name der Klasse</label>
    <input type="text" name="php_klasse_3_name" value="<?php echo htmlspecialchars($snippet['php_klasse_3_name']); ?>">
    <label for="php_klasse_3">Inhalt</label>
    <textarea name="php_klasse_3" id="php_klasse_3"><?php echo htmlspecialchars($snippet['php_klasse_3']); ?></textarea>
    <?php echo $section_ende; ?>

    <h4 class="section-title">PHP-Klasse #4</h4>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_4_name">Name der Klasse</label>
    <input type="text" name="php_klasse_4_name" value="<?php echo htmlspecialchars($snippet['php_klasse_4_name']); ?>">
    <label for="php_klasse_4">Inhalt</label>
    <textarea name="php_klasse_4" id="php_klasse_4"><?php echo htmlspecialchars($snippet['php_klasse_4']); ?></textarea>
    <?php echo $section_ende; ?>

    <h5 class="section-title">PHP-Klasse #5</h5>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_5_name">Name der Klasse</label>
    <input type="text" name="php_klasse_5_name" value="<?php echo htmlspecialchars($snippet['php_klasse_5_name']); ?>">
    <label for="php_klasse_5">Inhalt</label>
    <textarea name="php_klasse_5" id="php_klasse_5"><?php echo htmlspecialchars($snippet['php_klasse_5']); ?></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">Java-Klasse #1</h3>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_1_name">Name der Klasse</label>
    <input type="text" name="java_klasse_1_name" value="<?php echo htmlspecialchars($snippet['java_klasse_1_name']); ?>">
    <label for="java_klasse_1">Inhalt</label>
    <textarea name="java_klasse_1" id="java_klasse_1"><?php echo htmlspecialchars($snippet['java_klasse_1']); ?></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">Java-Klasse #2</h3>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_2_name">Name der Klasse</label>
    <input type="text" name="java_klasse_2_name" value="<?php echo htmlspecialchars($snippet['java_klasse_2_name']); ?>">
    <label for="java_klasse_2">Inhalt</label>
    <textarea name="java_klasse_2" id="java_klasse_2"><?php echo htmlspecialchars($snippet['java_klasse_2']); ?></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">Java-Klasse #3</h3>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_3_name">Name der Klasse</label>
    <input type="text" name="java_klasse_3_name" value="<?php echo htmlspecialchars($snippet['java_klasse_3_name']); ?>">
    <label for="java_klasse_3">Inhalt</label>
    <textarea name="java_klasse_3" id="java_klasse_3"><?php echo htmlspecialchars($snippet['java_klasse_3']); ?></textarea>
    <?php echo $section_ende; ?>

    <h4 class="section-title">Java-Klasse #4</h4>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_4_name">Name der Klasse</label>
    <input type="text" name="java_klasse_4_name" value="<?php echo htmlspecialchars($snippet['java_klasse_4_name']); ?>">
    <label for="java_klasse_4">Inhalt</label>
    <textarea name="java_klasse_4" id="java_klasse_4"><?php echo htmlspecialchars($snippet['java_klasse_4']); ?></textarea>
    <?php echo $section_ende; ?>

    <h5 class="section-title">Java-Klasse #5</h5>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_5_name">Name der Klasse</label>
    <input type="text" name="java_klasse_5_name" value="<?php echo htmlspecialchars($snippet['java_klasse_5_name']); ?>">
    <label for="java_klasse_5">Inhalt</label>
    <textarea name="java_klasse_5" id="java_klasse_5"><?php echo htmlspecialchars($snippet['java_klasse_5']); ?></textarea>
    <?php echo $section_ende; ?>

    <input type="submit" value="Speichern">
    <input type="reset" value="Zurücksetzen">
</form>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>