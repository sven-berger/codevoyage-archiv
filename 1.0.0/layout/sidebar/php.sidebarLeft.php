<nav class="sidebar">
    <h2>Eigene Werke</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($eigene_werke_liste)): ?>
                <?php foreach ($eigene_werke_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine eigenen Werke gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Spielerein</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($spielereien_liste)): ?>
                <?php foreach ($spielereien_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine Spielerei und Snippet gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Sonstiges</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($sonstiges_liste)): ?>
                <?php foreach ($sonstiges_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
            <?php endforeach; ?>
            <?php else: ?>
                <li>Kein Snippet gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
</nav>