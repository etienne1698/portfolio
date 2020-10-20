import {getElementsByAttribute} from "../tools";

let modals = document.getElementsByClassName('modal');

function closeModals() {
    for(let i = 0; i < modals.length; i++) {
        modals[i].className = modals[i].className.replace('is-active','');
    }
}

// bind button with target modal
for (let node of getElementsByAttribute('data-modal')) {
    node.addEventListener('click', () => {
        document.getElementById(node.getAttribute('data-modal')).className += ' is-active';
    });
}

// close modal when click on close button
for (let node of getElementsByAttribute('data-close')) {
    if (node.getAttribute('data-close') === 'modal') {
        node.addEventListener('click', () => {
            closeModals();
        });
    }
}

// close modal on background click
document.addEventListener('click', (event) => {
    event.path.forEach(elem => {
        if (elem.className && elem.className.includes && elem.className.includes('modal-background')) {
            closeModals();
        }
    });
});

