document.getElementById('register-btn').addEventListener('click', function(event) {
    event.preventDefault();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (password !== confirmPassword) {
        alert('Passwords do not match!');
    } else {
        alert('Registration Successful!');
    }
});
