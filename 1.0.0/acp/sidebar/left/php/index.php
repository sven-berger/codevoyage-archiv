<?php
    $bereich = 'Administrationsbereich';
    $pageTitle = "Linke Seitenleiste (PHP-Bereich)";
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");
?>

<h3 class="section-title">Eigene Werke</h3>
<section class="section">
    <div class="sectionContent">
        <?php try { ?>
            <?php if (!empty($eigene_werke_liste)) : ?>
                <div class="ActionArea">
                    <ul>
                        <li><button class="button-action"><a href="/acp/sidebar/left/php/eigene-werke/add.php">Eigenes Werk hinzufügen</a></button></li>
                    </ul>
                </div>     
                <table>
                    <tr>
                        <th>Link</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($eigene_werke_liste as $row) : ?>
                        <tr>
                            <td><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                            <td>
                                <a href="/acp/sidebar/left/php/eigene-werke/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="/acp/sidebar/left/php/eigene-werke/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
           <?php else : ?>
                <p style="text-align: center;">Keine Einträge gefunden.</p>
            <?php endif; ?>
        <?php } catch (PDOException $e) { ?>
            <p style="text-align: center;">Es liegt ein Problem vor: <?php echo htmlspecialchars($e->getMessage()); ?></p>
        <?php } ?>
    </div>
</section>

<h3 class="section-title">Spielereien</h3>
<section class="section">
    <div class="sectionContent">
        <?php try { ?>
            <?php if (!empty($spielereien_liste)) : ?>
                <div class="ActionArea">
                    <ul>
                        <li><button class="button-action"><a href="/acp/sidebar/left/php/spielereien/add.php">Spielereien hinzufügen</a></button></li>
                    </ul>
                </div>
                <table>
                    <tr>
                        <th>Link</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($spielereien_liste as $row) : ?>
                        <tr>
                            <td><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                            <td>
                                <a href="/acp/sidebar/left/php/spielereien/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="/acp/sidebar/left/php/spielereien/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <p style="text-align: center;">Keine Einträge gefunden.</p>
            <?php endif; ?>
        <?php } catch (PDOException $e) { ?>
            <p style="text-align: center;">Es liegt ein Problem vor: <?php echo htmlspecialchars($e->getMessage()); ?></p>
        <?php } ?>
    </div>
</section>

<h3 class="section-title">Sonstiges</h3>
<section class="section">
    <div class="sectionContent">
        <?php try { ?>
            <?php if (!empty($sonstiges_liste)) : ?>
                <div class="ActionArea">
                    <ul>
                        <li><button class="button-action"><a href="/acp/sidebar/left/php/sonstiges/add.php">Sonstiges hinzufügen</a></button></li>
                    </ul>
                </div>
                <table>
                    <tr>
                        <th>Link</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($sonstiges_liste as $row) : ?>
                        <tr>
                            <td><a href="<?php echo htmlspecialchars($row['url']); ?>"><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                            <td>
                                <a href="/acp/sidebar/left/php/sonstiges/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="/acp/sidebar/left/php/sonstiges/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <p style="text-align: center;">Keine Einträge gefunden.</p>
            <?php endif; ?>
        <?php } catch (PDOException $e) { ?>
            <p style="text-align: center;">Es liegt ein Problem vor: <?php echo htmlspecialchars($e->getMessage()); ?></p>
        <?php } ?>
    </div>
</section>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>