// Toggle du Chatbot WhatsApp
function toggleWa() {
    const popup = document.getElementById('waPopup');
    popup.style.display = (popup.style.display === 'flex') ? 'none' : 'flex';
}

// Animation fluide des ancres
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.getElementById('auditForm')?.addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('contactName').value;
    const email = document.getElementById('contactEmail').value;
    const task = document.getElementById('contactTask').value;

    // Redirection WhatsApp pour l'Audit
    const numero = "243810000000"; // VOTRE NUMÉRO ICI
    const message = `*DEMANDE D'AUDIT GRATUIT*%0A` +
                    `--------------------------%0A` +
                    `*Client:* ${name}%0A` +
                    `*Email:* ${email}%0A` +
                    `*Défi:* ${task}`;

    window.open(`https://wa.me/${numero}?text=${message}`, '_blank');

    // Feedback visuel sur le site
    this.innerHTML = `
        <div style="text-align:center; padding: 20px;">
            <i class="fas fa-paper-plane" style="font-size: 3rem; color: #7451eb; margin-bottom: 15px;"></i>
            <h3>Demande reçue !</h3>
            <p>Merci ${name}, votre audit est en cours de préparation. On se parle sur WhatsApp.</p>
        </div>
    `;
});