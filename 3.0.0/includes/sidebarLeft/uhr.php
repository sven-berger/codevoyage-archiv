<div id="uhr"></div>

<script>
    setInterval(() => {
        const uhr = document.getElementById("uhr");
        uhr.textContent = new Date().toLocaleTimeString();
    }, 1000);
</script>