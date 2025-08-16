<?php $bereich = 'Startseite'; $pageTitle = 'Startseite von CodeVoyage.de'; require_once ("../1.0.0/layout/header/header.inc.php"); ?>

<h2 class="section-title">L1: if-Bedingung</h2>

<div class="aufgabe">
<h3 class="lession-title">Aufgabe #3</h3>
<p>Folgender Java Code Ausschnitt ist gegeben:</p>
<pre><code class="java">int a = 10;
int b = 5;
if (a == b * 2)
    System.out.println("b ist die Hälfte von a");
</code></pre>
<p>Welche Ausgabe ist zu erwarten?</p>
<?php echo $section_beginn; ?>
<ol>
  <li>Keine Ausgabe</li>
  <li>b ist die Hälfte von a</li>
  <li>Compiler-Fehler</li>
</ol>
<?php echo $section_ende; ?>
</div>

<div class="loesung">
<h3 class="lession-title">Lösung</h3>
<?php echo $section_beginn; ?>
<ul>
    <li>b ist die Hälfte von a</li>
</ul>
<?php echo $section_ende; ?>
</div>

<?php require_once ("../1.0.0/layout/footer/index.footer.inc.php"); ?>