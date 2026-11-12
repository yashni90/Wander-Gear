const faqQuestions = document.querySelectorAll('.faqbutton');

faqQuestions.forEach(button => {
    button.addEventListener('click', () => {
        const faqAnswer = button.nextElementSibling;
        faqAnswer.style.display = faqAnswer.style.display === 'block' ? 'none' : 'block';
    });
});