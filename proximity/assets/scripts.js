/**
 * Date: 12/2/24
 * ISTE-240 Group 4: Johnathan Eschbacher, Paige Bohman, Garrett Recker, Jonathan Unger, Katiya Zawrotny
 */
// run on content load
document.addEventListener('DOMContentLoaded', () => {
    // grab form, image dropdownds, and paragraph sections
    const form = document.querySelector('form');
    const dropdowns = document.querySelectorAll('.dropdown');
    const paragraphs = document.querySelectorAll('.paragraph');

    // listen for submit
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const selectedValues = new Set();
        let hasDuplicates = false;

        // make sure each image is only answered once
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

        // stop displaying all images
        paragraphs.forEach((paragraph) => {
            const images = paragraph.querySelectorAll('.prox-graphic');
            images.forEach((image) => {
                image.style.display = 'none';
            });
        });

        // display correct image based on input
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
