<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once('../1.0.0/layout/header/instance.header.inc.php'); ?>


<h2 class="section-title">Aufgabe 5.01</h2>
<pre><code class="language-sql"><pre><code class="language-sql">SELECT * FROM fahrraeder WHERE anschaffungswert > 600;</code></pre></code></pre>

<h2 class="section-title">Aufgabe 5.02</h2>
<pre><code class="language-sql">SELECT * FROM fahrraeder WHERE anschaffungswert < 300;</code></pre>

<h2 class="section-title">Aufgabe 5.03</h2>
<pre><code class="language-sql">SELECT * FROM fahrraeder WHERE kaufdatum < '2008-01-01';</code></pre>

<h2 class="section-title">Aufgabe 5.04</h2>
<pre><code class="language-sql">SELECT * FROM fahrraeder WHERE anschaffungswert < 400 AND kaufdatum < '2008-01-01';</code></pre>

<h2 class="section-title">Aufgabe 5.05</h2>
<pre><code class="language-sql">SELECT fahrradnr, anschaffungswert, anschaffungswert * 1.19 AS brutto_anschaftswert FROM fahrraeder WHERE fahrradnr = 6;</code></pre>

<h2 class="section-title">Aufgabe 5.06</h2>
<pre><code class="language-sql">SELECT AVG(anschaffungswert) AS 'Durchschnittswert:' FROM fahrraeder;</code></pre>

<h2 class="section-title">Aufgabe 5.07</h2>
<pre><code class="language-sql">SELECT MAX(anschaffungswert) AS 'Maximaler Anschaffungswert:' FROM fahrraeder;</code></pre>

<h2 class="section-title">Aufgabe 5.08</h2>
<pre><code class="language-sql">SELECT MIN(anschaffungswert) AS 'Kleinster Anschaffungswert:' FROM fahrraeder;</code></pre>

<h2 class="section-title">Aufgabe 5.09</h2>
<pre><code class="language-sql">SELECT SUM(anschaffungswert) AS 'Gesamtwert:' FROM fahrraeder;</code></pre>

<h2 class="section-title">Aufgabe 5.10</h2>
<pre><code class="language-sql">SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) = 2007;</code></pre>

<h2 class="section-title">Aufgabe 5.11</h2>

<pre><code class="language-sql">
/* Möglichkeit #1 */

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) < 2007 OR YEAR(kaufdatum) > 2007;

/* Möglichkeit #2 */

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) <> 2007;
</code></pre>

<h2 class="section-title">Aufgabe 5.12</h2>
<pre><code class="language-sql">SELECT * FROM fahrraeder WHERE anschaffungswert > 500 AND anschaffungswert < 800;</code></pre>

<h2 class="section-title">Aufgabe 5.13</h2>

<pre><code class="language-sql">SELECT * FROM hersteller WHERE herstellername LIKE 'C%';</code></pre>
 
<h2 class="section-title">Aufgabe 5.14</h2>
<pre><code class="language-sql">SELECT fahrraeder.fahrradnr, fahrraeder.anschaffungswert, fahrradarten.bezeichnung FROM fahrraeder JOIN fahrradarten ORDER BY fahrraeder.fahrradnr ASC;</code></pre>

<h2 class="section-title">Aufgabe 5.15</h2>
<pre><code class="language-sql">SELECT bezeichnung, herstellernr, herstellername FROM `hersteller` JOIN `fahrradarten`;</code></pre> 

<h2 class="section-title">Aufgabe 5.16</h2>
<pre><code class="language-sql">SELECT bezeichnung, herstellernr, herstellername FROM `hersteller` JOIN `fahrradarten` WHERE herstellername LIKE 'Cube';</code></pre>

<h2 class="section-title">Aufgabe 5.17</h2>
<pre><code class="language-sql">SELECT modelle.bezeichnung, hersteller.herstellernr, hersteller.herstellername, tagesmietpreis FROM hersteller JOIN modelle WHERE herstellername LIKE 'Scott' AND tagesmietpreis > '12';</code></pre>

<h2 class="section-title">Aufgabe 5.18</h2>
<pre><code class="language-sql">SELECT MAX(modelle.tagesmietpreis) AS max_tagesmietpreis FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';</code></pre>

<h2 class="section-title">Aufgabe 5.19</h2>
<pre><code class="language-sql">SELECT MIN(modelle.tagesmietpreis) AS max_tagesmietpreis FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';</code></pre>

<h2 class="section-title">Aufgabe 5.20</h2>
<pre><code class="language-sql">SELECT COUNT(*) FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';</code></pre>

<h2 class="section-title">Aufgabe 5.21</h2>
<pre><code class="language-sql">SELECT fahrraeder.fahrradnr, fahrradarten.bezeichnung, hersteller.herstellername FROM fahrraeder JOIN modelle ON fahrraeder.modellnr = modelle.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr WHERE fahrradarten.bezeichnung = 'Kinderrad';</code></pre>

<h2 class="section-title">Aufgabe 5.22</h2>
<pre><code class="language-sql">SELECT COUNT(*) AS anzahl_fahrraeder FROM modelle JOIN fahrradarten ON fahrradarten.artnr = modelle.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';</code></pre>

<h2 class="section-title">Aufgabe 5.23</h2>
<pre><code class="language-sql">SELECT fahrraeder.fahrradnr, modelle.bezeichnung AS modell_bezeichnung, fahrradarten.bezeichnung AS fahrradart_bezeichnung FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung NOT IN ('Kinderrad', 'Jugendrad');</code></pre>

<h2 class="section-title">Aufgabe 5.24</h2>
<pre><code class="language-sql">SELECT AVG(modelle.tagesmietpreis) AS durchschnitt_tagesmietpreis FROM modelle JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';</code></pre>

<h2 class="section-title">Aufgabe 5.25</h2>
<pre><code class="language-sql">SELECT MAX(modelle.tagesmietpreis) AS hoechster_tagesmietpreis, modelle.bezeichnung FROM modelle JOIN fahrradarten WHERE fahrradarten.bezeichnung = 'Kinderrad';</code></pre>

<h2 class="section-title">Aufgabe 5.26</h2>
<pre><code class="language-sql">SELECT fahrradarten.bezeichnung, COUNT(*) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr GROUP BY fahrradarten.bezeichnung;</code></pre>

<h2 class="section-title">Aufgabe 5.27</h2>
<pre><code class="language-sql">SELECT hersteller.herstellername, COUNT(hersteller.herstellername) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller.herstellername;</code></pre>

<h2 class="section-title">Aufgabe 5.28</h2>
<pre><code class="language-sql">SELECT hersteller.herstellername AS hersteller, COUNT(*) AS anzahl FROM hersteller JOIN modelle ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller ORDER BY anzahl DESC LIMIT 1;</code></pre>


<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");