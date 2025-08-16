<?php
    $bereich = 'Administrationsbereich';
    $pageTitle = "Menüpunkte (Administrationsbereich)";
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/header.inc.php");

    error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<h3 class="section-title">Navigation</h3>
<section class="section">
    <div class="sectionContent">
    <div class="ActionArea">
        <ul>
            <li><button class="button-action"><a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/navigation/add.php">Menüpunkt hinzufügen</a></button></li>
        </ul>
    </div>      
        <?php try { ?>
            <?php if (!empty($acp_sidebar_left_navigation_header_liste)) : ?>   
                <table>
                    <tr>
                        <th>URL</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($acp_sidebar_left_navigation_header_liste as $row) : ?>
                        <tr>
                            <td><a href='<?php echo htmlspecialchars($row['url']); ?>' ><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                            <td>
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/navigation/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/navigation/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
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

<h3 class="section-title">Linke Seitenleiste</h3>
<section class="section">
    <div class="sectionContent">
    <div class="ActionArea">
        <ul>
            <li><button class="button-action"><a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/linke-seitenleiste/add.php">Menüpunkt hinzufügen</a></button></li>
        </ul>
    </div>      
        <?php try { ?>
            <?php if (!empty($acp_sidebar_left_seitenleiste_liste)) : ?>   
                <table>
                    <tr>
                        <th>URL</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($acp_sidebar_left_seitenleiste_liste as $row) : ?>
                        <tr>
                            <td><a href='<?php echo htmlspecialchars($row['url']); ?>' ><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                            <td>
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/linke-seitenleiste/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/linke-seitenleiste/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
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

<h3 class="section-title">Eigene Werke</h3>
<section class="section">
    <div class="sectionContent">
    <div class="ActionArea">
        <ul>
            <li><button class="button-action"><a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/eigene-werke/add.php">Menüpunkt hinzufügen</a></button></li>
        </ul>
    </div>       
        <?php try { ?>
            <?php if (!empty($acp_sidebar_left_eigene_werke_liste)) : ?>  
                <table>
                    <tr>
                        <th>URL</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($acp_sidebar_left_eigene_werke_liste as $row) : ?>
                        <tr>
                            <td><a href='<?php echo htmlspecialchars($row['url']); ?>' ><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                            <td>
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/eigene-werke/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/eigene-werke/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
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

<h3 class="section-title">Wissensportal</h3>
<section class="section">
    <div class="sectionContent">
    <div class="ActionArea">
        <ul>
            <li><button class="button-action"><a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/wissensportal/add.php">Menüpunkt hinzufügen</a></button></li>
        </ul>
    </div>    
        <?php try { ?>
            <?php if (!empty($acp_sidebar_left_wissensportal_liste)) : ?> 
                <table>
                    <tr>
                        <th>URL</th>
                        <th>Aktion</th>
                    </tr>
                    <?php foreach ($acp_sidebar_left_wissensportal_liste as $row) : ?>
                        <tr>
                            <td><a href='<?php echo htmlspecialchars($row['url']); ?>' ><?php echo htmlspecialchars($row['ziel']); ?></a></td>
                            <td>
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/wissensportal/edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>">Bearbeiten</a> |
                                <a href="https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/acp/wissensportal/delete.php?id=<?php echo htmlspecialchars($row['ID']); ?>" onclick="return confirm('Bist du dir sicher, dass du diesen Eintrag löschen möchtest?');">Löschen</a>
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