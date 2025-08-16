<?php 
  $pageTitle = "Mein Blog";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/header.php");
?>

<div id="blog"></div>

<script>
fetch('../json/blog.json')
  .then(response => response.json()) // JSON parsen
  .then(data => {
    console.log(data); // Zum Testen in der Konsole
    blogEintraegeAnzeigen(data); // Übergib die Daten an eine Funktion
  })
  .catch(error => {
    console.error('Fehler beim Laden der JSON:', error);
  });

function blogEintraegeAnzeigen(eintraege) {
  const container = document.getElementById("blog");

  eintraege.sort((a, b) => b.id - a.id);

  eintraege.forEach((eintrag, index) => {
    const div = document.createElement("div");
    div.classList.add("card", "bg-light", "mb-4",);

    div.innerHTML = `
      <div class="card-body">
        <h3 class="card-title">${eintrag.titel}</h3>
        <p class="card-subtitle mb-2 text-muted"><strong>Kategorie:</strong> ${eintrag.kategorie}</p>
        <p class="card-text">${eintrag.beschreibung}</p>
        <p><small class="text-muted">Erstellt am: ${eintrag.erstellt_am}</small></p>
        <a href="../blog/artikel.php?id=${eintrag.id}" class="btn btn-primary">Zum Artikel</a>
      </div>
    `;

    container.appendChild(div);
  });
}
</script>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/footer.php"); ?>