<nav class="sidebar">
    <h2>Variablen</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($variablen_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($variablen_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Arrays / Listen</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($arrays_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($arrays_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Assoziatives Array / Einfaches Dictionarie</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($assoziatives_array_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($assoziatives_array_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Mehrdimensionales Array / Mehrfaches Dictionarie</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($mehrdimensionales_array_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($mehrdimensionales_array_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>for-Schleife</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($for_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($for_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>if, else, elseif/elif</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($if_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($if_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Funktionen</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($funktionen_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($funktionen_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Objektorientiertes Programmieren</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($oop_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($oop_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?oop_snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <h2>Datenbanken</h2>
    <div class="sidebarContent">
        <ul>
            <?php if (empty($datenbanken_snippets)): ?>
                <li>Kein Snippet vorhanden</li>
            <?php else: ?>
                <?php foreach ($datenbanken_snippets as $snippet): ?>
                <li><a href="<?php echo 'index.php?snippet=' . htmlspecialchars($snippet['url']); ?>"><?php echo htmlspecialchars($snippet['title']); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>