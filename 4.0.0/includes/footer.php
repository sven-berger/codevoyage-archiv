</main>
</div>
</div>
</div>

<script type="module" src="../assets/stimulus-bootstrap.js"></script>

<!-- Bootstrap Bundle mit Popper einbinden -->
<script src="https://codevoyage.samwilliam.de/4.0.0/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- HightLight.js einbinden -->
<link rel="stylesheet" href="https://codevoyage.samwilliam.de/4.0.0/assets/highlightjs/styles/default.min.css">
<script src="https://codevoyage.samwilliam.de/4.0.0/assets/highlightjs/highlight.min.js"></script>
<script>hljs.highlightAll();</script>

<!-- TinyMCE-Editor einbinden -->
<script src="https://codevoyage.samwilliam.de/4.0.0/assets/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: 'textarea',
    license_key: 'gpl',
    content_css:
    [
        'https://codevoyage.samwilliam.de/4.0.0/assets/highlightjs/styles/default.min.css',
        'https://codevoyage.samwilliam.de/4.0.0/styles/tm-editor.css'
    ],
    menubar: false,
    language: 'de',
    language_url: 'https://codevoyage.samwilliam.de/4.0.0/assets/tinymce/langs/de.js',
    plugins: 'code table lists fullscreen wordcount link image autosave advlist codesample preview',
    toolbar: 'code undo redo | bold italic | blocks | link image codesample table blockquote | bullist numlist | alignleft aligncenter alignright removeformat preview',
    fontsize_formats: "10pt 12pt 14pt 16pt 18pt 24pt 36pt"
});
document.querySelector("form")?.addEventListener("submit", function () {
  if (typeof tinymce !== "undefined") {
    tinymce.triggerSave();
  }
});
</script>

<style>
.tox .tox-statusbar {
    display: none;
}
</style>
</body>
</html>