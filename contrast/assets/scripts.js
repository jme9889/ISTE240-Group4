/**
 * Date: 12/2/24
 * ISTE-240 Group 4: Johnathan Eschbacher, Paige Bohman, Garrett Recker, Jonathan Unger, Katiya Zawrotny
 */
//Run scripts on content-load
document.addEventListener('DOMContentLoaded', () => {
    // Adjust color of body paragraphs

    //grab body paragraphs and radio input
    const contrastElements = document.querySelectorAll('.contrast-p');
    const colorRadioButtons = document.querySelectorAll('#color-radio input[type="radio"]');

    // Check for checked value
    if (contrastElements && colorRadioButtons) {
        const initialChecked = document.querySelector('#color-radio input[type="radio"]:checked');
        if (initialChecked) {
            contrastElements.forEach(element => {
                element.style.color = initialChecked.value;
            });
        }

        // Change color for each paragraph
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

    // grab headers and radio input
    const headerElements = document.querySelectorAll('.interaction-h2');
    const boldRadioButtons = document.querySelectorAll('#bold-radio input[type="radio"]');

    // grab checked value
    if (headerElements && boldRadioButtons) {
        const initialChecked = document.querySelector('#bold-radio input[type="radio"]:checked');
        if (initialChecked) {
            headerElements.forEach(header => {
                header.style.fontWeight = initialChecked.value;
            });
        }

        // set font weight for headers
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

     // grab all contrast images
     const images = {
        flower: document.getElementById('flower-big'),
        cat: document.getElementById('cat-big'),
        frog: document.getElementById('frog-big'),
    };

    // grab radio input
    const imageRadioButtons = document.querySelectorAll('.radio-row input[type="radio"]');

    // adjust image visibility acording to checked value
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
