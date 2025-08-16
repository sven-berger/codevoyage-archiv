<?php
    $bereich = 'Administrationsbereich';
    $pageTitle = 'Wissensportal';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");
?>

<div class="ActionArea">
    <ul>
        <li><button class="button-action"><a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/add.php">Snippet hinzufügen</a></button></li>
        <li><button class="button-action"><a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/oop.add.php">OOP-Snippet hinzufügen</a></button></li>

    </ul>
</div>

<h3 class="section-title">Variablen</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($variablen_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['wissensportal_id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['wissensportal_id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">Arrays / Listen</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <?php foreach ($arrays_snippets as $snippet): ?>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/acp/edit.php?id=<?php echo $snippet['wissensportal_id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['wissensportal_id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
                <?php endforeach; ?>
            </tr>
    </tbody>
</table>

<h3 class="section-title">Assoziatives Array / Einfaches Dictionarie</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($assoziatives_array_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['wissensportal_id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['wissensportal_id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">Mehrdimensionales Array / Mehrfaches Dictionarie</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($mehrdimensionales_array_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">Die for-Schleife</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($for_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">if, elsif/elif, else</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($if_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">Funktionen</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($funktionen_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

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
                <td><a href="<?php echo '../wissensportal/index.php?oop_snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/oop_edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/oop_delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">Datenbanken</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($datenbanken_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">Vorlagen</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($vorlagen_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<h3 class="section-title">Sonstiges</h3>
<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($sonstiges_snippets as $snippet): ?>
            <tr>
                <td><a href="<?php echo 'https://codevoyage.samwilliam.de/1.0.0/wissensportal//index.php?snippet=' . htmlspecialchars($snippet['url']); ?>" target="_blank"><?php echo htmlspecialchars($snippet['title']); ?></a></td>
                <td><?php echo htmlspecialchars($snippet['description']); ?></td>
                <td>
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
                    <a href="https://codevoyage.samwilliam.de/1.0.0/acp/wissensportal/delete.php?id=<?php echo $snippet['id']; ?>" onclick="return confirm('Sicher, dass du dieses Snippet löschen willst?');">Löschen</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>