document.addEventListener('DOMContentLoaded', () => {
    // Adjust color of body paragraphs
    const contrastElements = document.querySelectorAll('.contrast-p');
    const colorRadioButtons = document.querySelectorAll('#color-radio input[type="radio"]');

    if (contrastElements && colorRadioButtons) {
        const initialChecked = document.querySelector('#color-radio input[type="radio"]:checked');
        if (initialChecked) {
            contrastElements.forEach(element => {
                element.style.color = initialChecked.value;
            });
        }

        colorRadioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedColor = radio.value;
                contrastElements.forEach(element => {
                    element.style.color = selectedColor;
                });
            });
        });
    }

    // Adjust boldness of subheaders for body paragraphs
    const headerElements = document.querySelectorAll('.interaction-h2');
    const boldRadioButtons = document.querySelectorAll('#bold-radio input[type="radio"]');

    if (headerElements && boldRadioButtons) {
        const initialChecked = document.querySelector('#bold-radio input[type="radio"]:checked');
        if (initialChecked) {
            headerElements.forEach(header => {
                header.style.fontWeight = initialChecked.value;
            });
        }

        boldRadioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                const selectedWeight = radio.value;
                headerElements.forEach(header => {
                    header.style.fontWeight = selectedWeight;
                });
            });
        });
    }

     // Adjust which image is displayed for best contrast
     const images = {
        flower: document.getElementById('flower-big'),
        cat: document.getElementById('cat-big'),
        frog: document.getElementById('frog-big'),
    };

    const imageRadioButtons = document.querySelectorAll('.radio-row input[type="radio"]');

    if (images && imageRadioButtons) {
        const updateImageVisibility = (selectedOption) => {
            for (const [key, img] of Object.entries(images)) {
                img.style.display = key === selectedOption ? 'block' : 'none';
            }
        };

        const initialChecked = document.querySelector('.radio-row input[type="radio"]:checked');
        if (initialChecked) {
            updateImageVisibility(initialChecked.value);
        }
        imageRadioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                updateImageVisibility(radio.value);
            });
        });
    }
});
