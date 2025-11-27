<?php
$bereich = 'Administrationsbereich';
$pageTitle = 'OOP-Snippet hinzufügen';
require_once ("../1.0.0/layout/header/header.inc.php");
?>

<form action="" method="post">
    <h3 class="section-title">Informationen</h3>
    <?php echo $section_beginn; ?>
    <label for="title">Titel</label>
    <input name="title" id="title">
    <label for="url">URL</label>
    <input type="text" name="url" value="" >
    <label for="description">Beschreibung</label>
    <input type="text" id="description" name="description" value="">
    <?php echo $section_ende; ?>

    <h3 class="section-title">PHP-Klasse #1</h3>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_1_name">Name der Klasse</label>
    <input type="text" name="php_klasse_1_name" value="">
    <label for="php_klasse_1">Inhalt</label>
    <textarea name="php_klasse_1" id="php_klasse_1" ></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">PHP-Klasse #2</h3>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_2_name">Name der Klasse</label>
    <input type="text" name="php_klasse_2_name" value="">
    <label for="php_klasse_2">Inhalt</label>
    <textarea name="php_klasse_2" id="php_klasse_2"></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">PHP-Klasse #3</h3>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_3_name">Name der Klasse</label>
    <input type="text" name="php_klasse_3_name" value="">
    <label for="php_klasse_3">Inhalt</label>
    <textarea name="php_klasse_3" id="php_klasse_3"></textarea>
    <?php echo $section_ende; ?>

    <h4 class="section-title">PHP-Klasse #4</h4>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_4_name">Name der Klasse</label>
    <input type="text" name="php_klasse_4_name" value="">
    <label for="php_klasse_4">Inhalt</label>
    <textarea name="php_klasse_4" id="php_klasse_4"></textarea>
    <?php echo $section_ende; ?>

    <h5 class="section-title">PHP-Klasse #5</h5>
    <?php echo $section_beginn; ?>
    <label for="php_klasse_5_name">Name der Klasse</label>
    <input type="text" name="php_klasse_5_name" value="">
    <label for="php_klasse_5">Inhalt</label>
    <textarea name="php_klasse_5" id="php_klasse_5"></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">Java-Klasse #1</h3>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_1_name">Name der Klasse</label>
    <input type="text" name="java_klasse_1_name" value="">
    <label for="java_klasse_1">Inhalt</label>
    <textarea name="java_klasse_1" id="java_klasse_1"></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">Java-Klasse #2</h3>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_2_name">Name der Klasse</label>
    <input type="text" name="java_klasse_2_name" value="">
    <label for="java_klasse_2">Inhalt</label>
    <textarea name="java_klasse_2" id="java_klasse_2"></textarea>
    <?php echo $section_ende; ?>

    <h3 class="section-title">Java-Klasse #3</h3>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_3_name">Name der Klasse</label>
    <input type="text" name="java_klasse_3_name" value="">
    <label for="java_klasse_3">Inhalt</label>
    <textarea name="java_klasse_3" id="java_klasse_3"></textarea>
    <?php echo $section_ende; ?>

    <h4 class="section-title">Java-Klasse #4</h4>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_4_name">Name der Klasse</label>
    <input type="text" name="java_klasse_4_name" value="">
    <label for="java_klasse_4">Inhalt</label>
    <textarea name="java_klasse_4" id="java_klasse_4"></textarea>
    <?php echo $section_ende; ?>

    <h5 class="section-title">Java-Klasse #5</h5>
    <?php echo $section_beginn; ?>
    <label for="java_klasse_5_name">Name der Klasse</label>
    <input type="text" name="java_klasse_5_name" value="">
    <label for="java_klasse_5">Inhalt</label>
    <textarea name="java_klasse_5" id="java_klasse_5"></textarea>
    <?php echo $section_ende; ?>

    <input type="submit" value="Speichern">
    <input type="reset" value="Zurücksetzen">
</form>

<?php 
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

    if (
    $title 
    && $url 
    && $description 
    && $php_klasse_1_name 
    && $php_klasse_1 
    && $php_klasse_2_name 
    && $php_klasse_2 
    && $php_klasse_3_name 
    && $php_klasse_3 
    && $php_klasse_4_name 
    && $php_klasse_4 
    && $php_klasse_5_name 
    && $php_klasse_5 
    && $java_klasse_1_name 
    && $java_klasse_1 
    && $java_klasse_2_name 
    && $java_klasse_2 
    && $java_klasse_3_name 
    && $java_klasse_3 
    && $java_klasse_4_name 
    && $java_klasse_4  
    && $java_klasse_5_name 
    && $java_klasse_5
    ) {
        $sql = "INSERT INTO wissensportal_objektorientierung (
        title, 
        description, 
        url,
        php_klasse_1_name, 
        php_klasse_1, 
        php_klasse_2_name, 
        php_klasse_2, 
        php_klasse_3_name, 
        php_klasse_3, 
        php_klasse_4_name, 
        php_klasse_4, 
        php_klasse_5_name, 
        php_klasse_5, 
        java_klasse_1_name, 
        java_klasse_1, 
        java_klasse_2_name, 
        java_klasse_2, 
        java_klasse_3_name, 
        java_klasse_3, 
        java_klasse_4_name, 
        java_klasse_4, 
        java_klasse_5_name, 
        java_klasse_5) 
            VALUES (
            :title, 
            :description, 
            :url, 
            :php_klasse_1_name, 
            :php_klasse_1, 
            :php_klasse_2_name, 
            :php_klasse_2, 
            :php_klasse_3_name, 
            :php_klasse_3, 
            :php_klasse_4_name, 
            :php_klasse_4, 
            :php_klasse_5_name, 
            :php_klasse_5, 
            :java_klasse_1_name, 
            :java_klasse_1, 
            :java_klasse_2_name, 
            :java_klasse_2, 
            :java_klasse_3_name, 
            :java_klasse_3, 
            :java_klasse_4_name, 
            :java_klasse_4, 
            :java_klasse_5_name, 
            :java_klasse_5
            )";
        $stmt = $connection->prepare($sql);

        try {
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
                ':java_klasse_5' => $java_klasse_5
                ]);
            header("Location: /1.0.0/acp/wissensportal/objektorientierung/");
        } catch (PDOException $e) {
            echo "Fehler beim Einfügen der Daten: " . htmlspecialchars($e->getMessage());
        }
    } else {
        if (!$title || !$url || !$description) {
            echo "Eines der Pflichtfelder (title, url, description) ist leer.";
            die();
        }
    }
}

require_once ("../1.0.0/layout/footer/acp.footer.inc.php");
?>
