<nav class="sidebar">
    <h2>Aufgabe 5</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (!empty($sql_aufgaben_liste)): ?>
                <?php foreach ($sql_aufgaben_liste as $row): ?>
                <li><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Keine SQL-Aufgaben gefunden.</li>
            <?php endif; ?>
        </ul>
    </div>
</nav>