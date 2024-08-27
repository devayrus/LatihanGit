document.getElementById('contactForm').addEventListener('submit', (event) => {
    // Ambil elemen form
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var message = document.getElementById('message');
    
    // Ambil elemen untuk pesan error
    var nameError = document.getElementById('nameError');
    var emailError = document.getElementById('emailError');
    var messageError = document.getElementById('messageError');

    // Reset pesan error
    nameError.style.display = 'none';
    emailError.style.display = 'none';
    messageError.style.display = 'none';

    var valid = true;

    // Cek apakah nama sudah diisi
    if (name.value.trim() === '') {
        nameError.textContent = 'Nama harus diisi';
        nameError.style.display = 'block';
        valid = false;
    }

    // Cek apakah email sudah diisi dan dalam format yang benar
    if (email.value.trim() === '') {
        emailError.textContent = 'Email harus diisi';
        emailError.style.display = 'block';
        valid = false;
    } else if (!validateEmail(email.value)) {
        emailError.textContent = 'Format email tidak valid';
        emailError.style.display = 'block';
        valid = false;
    }

    // Cek apakah pesan sudah diisi
    if (message.value.trim() === '') {
        messageError.textContent = 'Pesan harus diisi';
        messageError.style.display = 'block';
        valid = false;
    }

    // Jika tidak valid, cegah form dari pengiriman
    if (!valid) {
        event.preventDefault();
    }
});

// Fungsi untuk validasi format email
function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
