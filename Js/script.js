// Fungsi animasi tombol
const submitButtons = document.querySelectorAll('input[type="submit"]');

submitButtons.forEach(button => {
    button.addEventListener('mouseover', function () {
        this.style.backgroundColor = '#0056b3';
        this.style.transform = 'scale(1.05)';
    });

    button.addEventListener('mouseout', function () {
        this.style.backgroundColor = '#007bff';
        this.style.transform = 'scale(1)';
    });
});
