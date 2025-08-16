navigator.mediaDevices.getUserMedia({video: true, audio: false})
.then (
    stream => 
    {
        sagHalloAusgabe.srcObject = stream;
    }
)

function foto() {
    canvas.getContent("2d")
        .drawImage(video, 0, 0, canvas.width, canvas.height);
}