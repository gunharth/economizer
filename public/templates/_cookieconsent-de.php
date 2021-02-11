<script>
    window.addEventListener("load", function() {
        window.cookieconsent.initialise({
            palette: {
                popup: {
                    background: "#fff",
                    text: "#000"
                },
                button: {
                    background: "#000"
                },
            },
            "content": {
                "dismiss": "Einverstanden",
            },
            "elements": {
                messagelink: '<span id="cookieconsent:desc" class="cc-message">Um unsere Webseite für Sie optimal zu gestalten, verwenden wir Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.<a aria-label="learn more about cookies" tabindex="0" class="cc-link" href="/datenschutz/">Weitere Informationen</a></span>',
            }
        });
    });
</script>
