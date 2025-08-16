setInterval(() => {
    document.getElementById("uhr").textContent = new Date().toLocaleTimeString();
}, 1000);