<?php
    $bereich = 'Administrationsbereich';
    $pageTitle = 'Wissensportal';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");
?>


<h3 class="section-title">Objektorientiertes Programmieren</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($oop_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo '/1.0.0/wissensportal//objektorientierung/index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td>
                    <a href="/1.0.0/acp/wissensportal/objektorientierung/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="/1.0.0/acp/wissensportal/objektorientierung/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>