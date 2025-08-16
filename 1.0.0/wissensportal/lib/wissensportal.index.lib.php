<?php
$ausgabe = '<?php
$name = "Sven Oliver Berger";
$wohnort = "Idstein";

class Person {
    private $name;
    private $wohnort;

    public function __construct($name, $wohnort) {
        $this->name = $name;
        $this->wohnort = $wohnort;
    }

    public function vorstellen() {
        return $this->name . " wohnt in " . $this->wohnort . ".";
    }
}

$person = new Person($name, $wohnort);

// Ausgabe: "Sven Oliver Berger wohnt in Idstein."
echo $person->vorstellen(); 
';

$ausgabe = htmlspecialchars($ausgabe);
?>

<pre><code class="language-php">
<?php echo $ausgabe; ?>
</code></pre>