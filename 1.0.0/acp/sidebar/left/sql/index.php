<?php
    $bereich = 'Administrationsbereich';
    $pageTitle = "Linke Seitenleiste (SQL-Bereich)";
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");
?>

<h3 class="section-title">Aufgabe 5</h3>
        <?php try { ?>
            <?php if (!empty($sql_aufgaben_liste)) : ?>
                <table>
                    <tr>
                        <th>Link</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($sql_aufgaben_liste as $row) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['ziel']); ?></td>
                            <td>
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/sql/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/sql/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <div class="ActionArea">
                    <ul>
                        <li><button class="button-action"><a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/sql/add.php">Eigene Lösung hinzufügen</a></button></li>
                    </ul>
                </div>
           <?php else : ?>
                <p style="text-align: center;">Keine Einträge gefunden.</p>
            <?php endif; ?>
        <?php } catch (PDOException $e) { ?>
            <p style="text-align: center;">Es liegt ein Problem vor: <?php echo htmlspecialchars($e->getMessage()); ?></p>
        <?php } ?>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/acp.footer.inc.php");
?>
