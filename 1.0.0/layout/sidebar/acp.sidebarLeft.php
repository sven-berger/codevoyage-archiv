<nav class="sidebar">
    <h2>Navigation</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($acp_sidebar_left_navigation_header_liste)): ?>
                <?php foreach ($acp_sidebar_left_navigation_header_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine Einträge gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Linke Seitenleiste</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($acp_sidebar_left_seitenleiste_liste)): ?>
                <?php foreach ($acp_sidebar_left_seitenleiste_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine Einträge gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Eigene Werke</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($acp_sidebar_left_eigene_werke_liste)): ?>
                <?php foreach ($acp_sidebar_left_eigene_werke_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine eigenen Werke gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Wissensportal</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($acp_sidebar_left_wissensportal_liste)): ?>
                <?php foreach ($acp_sidebar_left_wissensportal_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine Snippets gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
</nav>