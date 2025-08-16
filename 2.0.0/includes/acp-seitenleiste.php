<div class="sidebar">
    <h3>Seitenverwaltung</h3>
    <ul>
        <li><a href="../../1.0.0/acp/index.php?page=pages">Seitenübersicht</a></li>
        <li><a href="../../1.0.0/acp/index.php?page=page-add">Seite hinzufügen</a></li>
    </ul>
    <h3>Benutzerverwaltung</h3>
    <ul>
        <li><a href="../../1.0.0/acp/index.php?page=user">Benutzerübersicht</a></li>
        <li><a href="../../1.0.0/acp/index.php?page=user-add">Benutzer hinzufügen</a></li>
    </ul>
    <h3>Eigene Werke</h3>
    <ul>
        <li><a href="../../1.0.0/acp/index.php?page=sepa">Überweisung tätigen</a></li>
        <li><a href="../../1.0.0/acp/index.php?page=admissions">Eintrittspreise verwalten</a></li>
        <li><a href="../../1.0.0/acp/index.php?page=raffle">Gewinnspiele verwalten</a></li>
    </ul>
    <div class="sidebar-end">  
        <?php if (isset($_SESSION['benutzername'])): ?>
        <ul>
            <li><a href="../../1.0.0/index.php?page=logout">Ausloggen</a></li>
        </ul>
        <?php endif; ?>
    </div>
</div>