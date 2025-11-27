<?php
    $bereich = 'Administrationsbereich';
    $pageTitle = "Linke Seitenleiste";
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");
?>

<h3 class="section-title">Community-Spiele</h3>
<?php echo $section_beginn; ?>
<?php try { ?>
    <?php if (!empty($community_spiele_liste)) : ?>
        <table>
            <thead>
                <tr>
                    <th>URL</th>
                    <th>Ziel</th>
                    <th>Aktion</th>
                </tr>
            </thead>
            <?php foreach ($community_spiele_liste as $row) : ?>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($row['url']); ?></td>
                    <td><?php echo htmlspecialchars($row['ziel']); ?></td>
                    <td><a href="/1.0.0/acp/sidebar/left/codevoyage/community-spiele/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> | <a href="/1.0.0/acp/sidebar/left/codevoyage/community-spiele/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a></td>
                    </tr>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p style="text-align: center;">Keine Einträge gefunden.</p>
    <?php endif; ?>
<?php } catch (PDOException $e) { ?>
    <p style="text-align: center;">Es liegt ein Problem vor: <?php echo htmlspecialchars($e->getMessage()); ?></p>
<?php } ?>
<?php echo $section_ende; ?>
<div class="ActionArea">
    <ul>
        <li><button class="button-action"><a href="/1.0.0/acp/sidebar/left/codevoyage/community-spiele/add.php">Community-Spiel hinzufügen</a></button></li>
    </ul>
</div>

<h3 class="section-title">Drittanbieter von Woltlab</h3>
    <?php try { ?>
        <?php if (!empty($drittanbieter_woltlab_liste)) : ?>
            <table>
                <thead>
                    <tr>
                        <th>URL</th>
                        <th>Aktion</th>
                    </tr>
                </thead>
                <?php foreach ($drittanbieter_woltlab_liste as $row) : ?>
                <tbody>
                    <tr>    
                        <td><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                        <td><a href="/1.0.0/acp/sidebar/left/codevoyage/drittanbieter-woltlab/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> | <a href="/1.0.0/acp/sidebar/left/codevoyage/drittanbieter-woltlab/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        <?php else : ?>
            <p style="text-align: center;">Keine Einträge gefunden.</p>
        <?php endif; ?>
<?php } catch (PDOException $e) { ?>
        <p style="text-align: center;">Es liegt ein Problem vor: <?php echo htmlspecialchars($e->getMessage()); ?></p>
<?php } ?>
<div class="ActionArea">
    <ul>
        <li><button class="button-action"><a href="/1.0.0/acp/sidebar/left/codevoyage/drittanbieter-woltlab/add.php">Drittanbieter hinzufügen</a></button></li>
    </ul>
</div>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>