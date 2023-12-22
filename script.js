// JavaScript - Opsional
// Dalam contoh ini, JavaScript tidak diperlukan untuk fungsionalitas utama
// Tetapi jika Anda memiliki kebutuhan animasi atau interaktivitas tambahan, ini adalah contoh

// Fungsi animasi tombol (JavaScript - Opsional)
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
