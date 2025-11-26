<?php require_once("$_SERVER[DOCUMENT_ROOT]" . "/2.0.0/lib/class/now.class.php"); ?>
<div class="navbar">
    <div class="now-box">
        <ul>
            <li class="now-tag"><?= Now::tag(); ?></li>
            <li class="now-datum"><?= Now::datum(); ?></li>
            <li class="now-uhrzeit"><?= Now::uhrzeit(); ?> Uhr</li>
            <?php if (!empty($benutzername)): ?>
                <li class="now-benutzer">Hallo <?php echo htmlspecialchars($benutzername); ?></li>
            <?php else: ?>
                <li class="now-benutzer">Hallo Gast, schön das du da bist.</li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="menu">
        <ul class="navbar">
            <li><a href="/2.0.0/index.php?page=index">Startseite</a></li>
            </li>
            <li><a href="/2.0.0/index.php?page=about">Über mich</a></li>
            <li><a href="/2.0.0/index.php?page=kontakt">Kontakt</a></li>
            <li><a href="/2.0.0/index.php?page=impressum">Impressum</a></li>
            <li><a href="/2.0.0/index.php?page=datenschutzerklaerung">Datenschutzerklärung</a></li>
        </ul>
    </div>
</div>