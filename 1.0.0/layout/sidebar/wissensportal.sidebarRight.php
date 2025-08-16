<aside class="sidebar">
    <h2>Vorlagen</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($vorlagen_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($vorlagen_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Sonstiges</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($sonstiges_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($sonstiges_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</aside>