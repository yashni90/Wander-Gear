// Get references to the checkbox and the submit button
const agreeCheckbox = document.getElementById('agreeCheckbox');
const submitButton = document.getElementById('submitButton');

// Function to toggle the submit button based on checkbox status
agreeCheckbox.addEventListener('change', function() {
    submitButton.disabled = !agreeCheckbox.checked; // Enable button if checkbox is checked, disable otherwise
});
