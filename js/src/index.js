import sal from 'sal.js';
import './bulma/index.js';
import notyf from './notyf.js';



// activate scroll animations
sal();


let emailInput = document.getElementById('email-input');
let nameInput = document.getElementById('name-input');
let messageInput = document.getElementById('message-input');

// contact form
document.getElementById('send-message').addEventListener('click', async () => {
    try {
        let response = await window.fetch('http://localhost/portfolio/index.php',{
            method: "POST",
            body: JSON.stringify({
                email: emailInput.value,
                name: nameInput.value,
                message: messageInput.value
            }),
        });

        const data = await response.json();
        if (data.success) {
            notyf.success(data.message);
        }

    } catch (e) {}
    emailInput.value = '';
    nameInput.value = '';
    messageInput.value = '';

});





