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
                messagelink: '<span id="cookieconsent:desc" class="cc-message">This website uses cookies to ensure you get the best experience on our website.<a aria-label="learn more about cookies" tabindex="0" class="cc-link" href="/datenschutz/">More info</a></span>',
            }
        });
    });
</script>
