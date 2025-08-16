<?php $bereich = 'Startseite'; $pageTitle = 'Startseite von CodeVoyage.de'; require_once ("../1.0.0/layout/header/header.inc.php"); ?>

<h2 class="section-title">L2: Main Methode basteln</h2>

<div class="aufgabe">
<h3 class="lession-title">Aufgabe #1</h3>
<p>Erstellen Sie die Deklaration der Main-Methode mit den erforderlichen Elementen:</p>
<?php echo $section_beginn; ?>
<p>[[1]][[2]][[3]][[4]][[5]][[6]][[8]][[9]]</p>
<?php echo $section_ende; ?>
</div>

<div class="loesung">
<h3 class="lession-title">Lösung</h3>
<pre><code class="language-java">public static[2] void[3] main[4](String[] args) {

}</code></pre>
<?php echo $section_beginn; ?>
<ul>
    <li>[[1]]: <strong>public</strong> <i><small>– Sichtbarkeitsmodifizierer, macht die Methode von überall aus zugänglich.</li></small></i>
    <li>[[2]]: <strong>static</strong> <i><small>– Stellt sicher, dass die Methode ohne eine Instanz der Klasse aufgerufen werden kann.</small></i>
    <li>[[3]]: <strong>void</strong> <i><small>– Rückgabewert der Methode, hier gibt es keinen (void = nichts).</small></i>
    <li>[[4]]: <strong>main</strong> <i><small>– Der festgelegte Name für die Main-Methode.</small></i>
    <li>[[5]]: <strong>String</strong> <i><small>– Datentyp des Parameters (ein Array von Strings).</small></i>
    <li>[[6]]: <strong>[]</strong> <i><small>– Kennzeichnet ein Array.</small></i>
    <li>[[7]]: <strong>args</strong> <i><small>– Name des Parameters (kann beliebig sein, oft args für Argumente).</small></i>
    <li>[[8]]: <strong>{</strong> <i><small>– Eröffnet den Methodenblock.</small></i>
    <li>[[9]]: <strong>}</strong> <i><small>– Schließt den Methodenblock.</small></i>
</ul>
<?php echo $section_ende; ?>
</div>

<?php require_once ("../1.0.0/layout/footer/index.footer.inc.php"); ?>