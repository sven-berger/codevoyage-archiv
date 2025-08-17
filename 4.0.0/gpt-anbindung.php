<?php 
  $pageTitle = "GPT-Anbindung";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<div class="chatbot">
    <div class="msgBot-start rounded p-4 mb-2 bg-light d-flex justify-content-start" id="msgBotStart">
        <p>Hallo, mein Name ist Sophia, was kann ich heute für dich tun?</p>
    </div>

    <div id="chatContent"></div>

    <form method="post" class="d-grid mt-5" onsubmit="conversation(); return false;">
        <input type="text" id="frage" name="frage" placeholder="Bitte Frage stellen..." class="p-3 form-control">
    </form>
</div>

<script>
function conversation() {
    const frage = document.getElementById('frage').value.trim();
    const chatContent = document.getElementById('chatContent');

    if (frage === '') return;

    // Begrüßung ausblenden
    document.getElementById('msgBotStart')?.classList.add('d-none');

    // Nutzerfrage anzeigen
    const userDiv = document.createElement('div');
    userDiv.className = 'msgMe mt-3 rounded p-4 mb-2 bg-secondary text-light d-flex justify-content-end';
    userDiv.innerHTML = `<p>${frage}</p>`;
    chatContent.appendChild(userDiv);

    // Bot-Antwortplatzhalter
    const botDiv = document.createElement('div');
    botDiv.className = 'msgBot mt-3 rounded p-4 mb-2 bg-light d-flex justify-content-start';
    botDiv.innerHTML = '<p><em>Sophia denkt nach ...</em></p>';
    chatContent.appendChild(botDiv);

    // API-Anfrage an PHP
    fetch('/assets/api/openai.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'frage=' + encodeURIComponent(frage)
    })
    .then(response => response.text())
    .then(text => {
    // Markdown zu HTML konvertieren
    const html = marked.parse(text);

    // Antwort einfügen
    botDiv.innerHTML = html;

    // Syntax-Highlighting aktivieren
    botDiv.querySelectorAll('pre code').forEach(block => {
        hljs.highlightElement(block);
    });

    chatContent.scrollTop = chatContent.scrollHeight;
    })
    .catch(() => {
        botDiv.innerHTML = '<p><em>Fehler: Sophia konnte keine Antwort laden.</em></p>';
    });

    document.getElementById('frage').value = '';
}
</script>

<style>
.chatbot {
    height: 564px !important;
    max-height: 564px !important;
}

#chatContent {
    max-height: 450px !important;
    overflow-y: auto;
}
</style>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>