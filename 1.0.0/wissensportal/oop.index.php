<?php
    $bereich = 'Wissensportal';
    require_once ("../1.0.0/layout/header/wissensportal.header.inc.php");
?>

<?php if (isset($_GET['oop_snippet'])): ?>
    <?php
        $oop_snippetURL = $_GET['oop_snippet'];
        $stmt = $connection->prepare("SELECT * FROM wissensportal_objektorientierung WHERE url = :url");
        $stmt->execute([':url' => $oop_snippetURL]);
        $oop_snippet = $stmt->fetch(PDO::FETCH_ASSOC);
        $description = htmlspecialchars($oop_snippet['description']);
    ?>

    <h2 class="snippet-title"><?php echo htmlspecialchars($oop_snippet['title']); ?></h2>

    <?php if (!empty($description)): ?>
        <h3 class="snippet-name">Beschreibung</h3>
        <?php echo $section_beginn; ?>
            <?php echo htmlspecialchars($oop_snippet['description']); ?>
        <?php echo $section_ende; ?>
    <?php endif; ?>
    
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <?php if (!empty($oop_snippet["php_klasse_$i"])): ?>
            <h3 class="section-title">PHP Klasse #<?php echo $i; ?></h3>
            <h3 class="snippet-name"><?php echo htmlspecialchars($oop_snippet["php_klasse_{$i}_name"]); ?></h3>
            <pre><code class="language-php"><?php echo htmlspecialchars($oop_snippet["php_klasse_$i"]); ?></code></pre>
        <?php endif; ?>
    <?php endfor; ?>

    <?php for ($i = 1; $i <= 5; $i++): ?>
        <?php if (!empty($oop_snippet["java_klasse_$i"])): ?>
            <h3 class="section-title">Java Klasse #<?php echo $i; ?></h3>
            <h3 class="snippet-name"><?php echo htmlspecialchars($oop_snippet["java_klasse_{$i}_name"]); ?></h3>
            <pre><code class="language-java"><?php echo htmlspecialchars($oop_snippet["java_klasse_$i"]); ?></code></pre>
        <?php endif; ?>
    <?php endfor; ?>

    <?php echo $section_beginn; ?>
    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/oop.edit.php?id=<?php echo $oop_snippet['id']; ?>">Bearbeiten</a> | <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/oop.delete.php?id=<?php echo $oop_snippet['id']; ?>">Löschen</a>
    <?php echo $section_ende; ?>
<?php endif; ?>


<?php    
    require_once ("../1.0.0/layout/footer/wissensportal.footer.inc.php");
?>