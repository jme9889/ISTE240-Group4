// Adjust what order the images appear in (next to which paragraph)
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const dropdowns = document.querySelectorAll('.dropdown');
    const paragraphs = document.querySelectorAll('.paragraph');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const selectedValues = new Set();
        let hasDuplicates = false;

        dropdowns.forEach((dropdown) => {
            const value = dropdown.value;

            if (selectedValues.has(value)) {
                hasDuplicates = true;
            } else {
                selectedValues.add(value);
            }
        });
        if (hasDuplicates) {
            alert('Please ensure there are no repeated values in the dropdowns.');
            return;
        }

        paragraphs.forEach((paragraph) => {
            const images = paragraph.querySelectorAll('.prox-graphic');
            images.forEach((image) => {
                image.style.display = 'none';
            });
        });

        dropdowns.forEach((dropdown, index) => {
            const selectedValue = dropdown.value;
            const imageId = `prox${index + 1}-${selectedValue === 'first' ? 1 : selectedValue === 'second' ? 2 : selectedValue === 'third' ? 3 : 4}`;
            const image = document.getElementById(imageId);

            if (image) {
                image.style.display = 'block';
            }
        });
    });
});
