document.addEventListener("DOMContentLoaded", function() {
    const contactIcon = document.querySelector('img[src="./images/contact-icon.png"]');
    const contactLink = document.querySelector('.cta-contact');

    function showFormOverlay() {
        const overlay = document.createElement('div');
        overlay.classList.add('overlay');

        const formContainer = document.createElement('div');
        formContainer.classList.add('form-container');

        formContainer.innerHTML = `
            <link rel="stylesheet" type="text/css" href="style.css">
            <div class="background-arrow-form"></div>
            <div class="form">
                <form action="process_form.php" method="post">
                    <input type="text" id="name" name="name" placeholder="Nom" required>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <textarea id="message" name="message" rows="4" placeholder="Votre message..." required></textarea>
                    <input type="submit" value="ENVOYER">
                </form>
            </div>
        `;

        overlay.appendChild(formContainer);

        document.body.appendChild(overlay);

        function closeOverlay() {
            document.body.removeChild(overlay);
        }

        overlay.addEventListener('click', function(event) {
            if (event.target === overlay) {
                closeOverlay();
            }
        });

        const closeButton = document.createElement('span');
        closeButton.classList.add('close-btn');
        closeButton.innerHTML = '&times;';
        closeButton.addEventListener('click', closeOverlay);
        formContainer.appendChild(closeButton);
    }

    contactIcon.addEventListener('click', showFormOverlay);

    contactLink.addEventListener('click', function(event) {
        event.preventDefault();
        showFormOverlay();
    });
});
