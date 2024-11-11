document.getElementById('registrationForm').addEventListener('submit', function(event) {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let address = document.getElementById('address').value;

    if (!name || !email || !phone || !address) {
        alert("Semua field harus diisi!");
        event.preventDefault();
    }
});
