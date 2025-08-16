<!-- Video-Ausgabe -->
<video id="sagHalloAusgabe" class="w-100 mb-2 rounded" autoplay></video>

<!-- Screenshot-Button -->
<div class="videoNavigation">
    <button class="btn btn-primary" onclick="foto()">Foto machen</button>
</div>

<!-- Bildausgabe als Canvas -->
<canvas id="canvas" class="w-100 mt-2 rounded"></canvas>

<!-- Webcam aktivieren -->
<script>
  // Video starten
  const videoElement = document.getElementById("sagHalloAusgabe");

  navigator.mediaDevices.getUserMedia({ video: true, audio: false })
    .then(stream => {
      videoElement.srcObject = stream;
    })
    .catch(err => {
      console.error("Fehler beim Zugriff auf die Kamera:", err);
    });

  // Screenshot erstellen
  function foto() {
    const canvas = document.getElementById("canvas");
    const context = canvas.getContext("2d");

    // Canvas-Größe dynamisch an Video anpassen
    canvas.width = videoElement.videoWidth;
    canvas.height = videoElement.videoHeight;

    context.drawImage(videoElement, 0, 0, canvas.width, canvas.height);
  }
</script>

<!-- Stil für Button-Ausrichtung -->
<style>
  .videoNavigation {
    display: flex;
    justify-content: flex-end;
  }
</style>
