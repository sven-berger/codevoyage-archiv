<?php
    $bereich = 'Wissensportal';
    $pageTitle = 'Wissensportal';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/wissensportal.header.inc.php");
?>

<?php
    $snippetName = $_GET['snippet'];
    $sql = "SELECT * FROM wissensportal WHERE url = :url";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':url' => $snippetName]);
    $snippet = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<?php if ($snippet): ?>
<?php
        $url = htmlspecialchars($snippet['url']);
        $title = htmlspecialchars($snippet['title']);
        $description = htmlspecialchars($snippet['description']);
        $phpSnippet = htmlspecialchars($snippet['php_snippet']);
        $phpSnippet_mit_html = htmlspecialchars($snippet['php_snippet_mit_html']);
        $phpSnippet_alternativ = htmlspecialchars($snippet['php_snippet_alternativ']);
        $pythonSnippet = htmlspecialchars($snippet['python_snippet']);
        $javaSnippet = htmlspecialchars($snippet['java_snippet']);
        $javascriptSnippet = htmlspecialchars($snippet['javascript_snippet']);
        $sqlSnippet = htmlspecialchars($snippet['sql_snippet']);
        $mitteilungSnippet = $snippet['mitteilung_snippet'];
    ?>

<h2 class="snippet-title"><?php echo htmlspecialchars($snippet['title']); ?></h2>

<?php if (!empty($description)): ?>
<h3 class="snippet-name">Beschreibung</h3>
<?php echo $section_beginn; ?>
<?php echo htmlspecialchars($snippet['description']); ?>
<?php echo $section_ende; ?>
<?php endif; ?>

<?php if (!empty($mitteilungSnippet)): ?>
<div class="mitteilungSnippet">
    <h2>Ein Hinweis in eigener Sache:</h2>
    <p><?php echo $mitteilungSnippet; ?></p>
</div>
<?php endif; ?>

<?php if (!empty($phpSnippet)): ?>
<h3 class="section-title">PHP</h3>
<pre><code class="language-php"><?php echo $phpSnippet; ?></code></pre>
<?php endif; ?>

<?php if (!empty($phpSnippet_mit_html)): ?>
<h3 class="section-title">PHP mit HTML</h3>
<pre><code class="language-php"><?php echo $phpSnippet_mit_html; ?></code></pre>
<?php endif; ?>

<?php if (!empty($phpSnippet_alternativ)): ?>
<h3 class="section-title">PHP (Alternative Syntax)</h3>
<pre><code class="language-php"><?php echo $phpSnippet_alternativ; ?></code></pre>
<?php endif; ?>

<?php if (!empty($pythonSnippet)): ?>
<h3 class="section-title">Python</h3>
<pre><code class="language-python"><?php echo $pythonSnippet; ?></code></pre>
<?php endif; ?>

<?php if (!empty($javaSnippet)): ?>
<h3 class="section-title">Java</h3>
<pre><code class="language-java"><?php echo $javaSnippet; ?></code></pre>
<?php endif; ?>

<?php if (!empty($javascriptSnippet)): ?>
<h3 class="section-title">JavaScript</h3>
<pre><code class="language-javascript"><?php echo $javascriptSnippet; ?></code></pre>
<?php endif; ?>

<?php if (!empty($sqlSnippet)): ?>
<h3 class="section-title">(My)SQL</h3>
<pre><code class="language-sql"><?php echo $sqlSnippet; ?></code></pre>
<?php endif; ?>

<?php echo $section_beginn; ?>
<a href="/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a>
|
<a href="/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>">Löschen</a>
<?php echo $section_ende; ?>
<?php else: ?>
<?php
    echo $snippet_beginn . "Snippet nicht gefunden oder keine Übereinstimmung" . $snippet_ende;
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/wissensportal.footer.inc.php");
    exit;
    ?>
<?php endif; ?>

<?php    
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/wissensportal.footer.inc.php");
?>