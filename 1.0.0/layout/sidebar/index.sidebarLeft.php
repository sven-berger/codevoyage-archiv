<nav class="sidebar">
    <h2>Community-Spiele</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($community_spiele_liste)): ?>
                <?php foreach ($community_spiele_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine Community-Spiele gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Verfügbare Produkte</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($drittanbieter_woltlab_liste)): ?>
                <?php foreach ($drittanbieter_woltlab_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine Drittanbieter gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
</nav>