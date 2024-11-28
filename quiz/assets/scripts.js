document.addEventListener("DOMContentLoaded", () => {
    // Adjust color of p tags for paragraphs
    const colorRadios = document.querySelectorAll("input[name='option']");
    colorRadios.forEach(radio => {
        radio.addEventListener("change", () => {
            const colorValue = radio.value;
            const paragraphs = document.querySelectorAll("#quiz-p1, #quiz-p2, #quiz-p3, #quiz-p4");
            paragraphs.forEach(p => {
                p.style.color = colorValue;
            });
        });
    });

    // Adjust boldness for headers
    const headerElements = document.querySelectorAll('.quiz-subhead');
    const boldRadioButtons = document.querySelectorAll('#quiz-font-weight input[type="radio"]');

    if (headerElements && boldRadioButtons) {
        const initialChecked = document.querySelector('#quiz-font-weight input[type="radio"]:checked');
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

    // Adjust font style for p tags
    const fontSelectors = document.querySelectorAll(".dropdown");
    fontSelectors.forEach(select => {
        select.addEventListener("change", (event) => {
            const selectedFont = event.target.value;
            const targetId = event.target.id;
            let targetParagraph;

            if (targetId.includes("1")) {
                targetParagraph = document.getElementById("quiz-p1");
            } else if (targetId.includes("2")) {
                targetParagraph = document.getElementById("quiz-p2");
            } else if (targetId.includes("3")) {
                targetParagraph = document.getElementById("quiz-p3");
            } else if (targetId.includes("4")) {
                targetParagraph = document.getElementById("quiz-p4");
            }

            if (targetParagraph) {
                targetParagraph.style.fontFamily = selectedFont;
            }
        });
    });

    // Adjust color of headers for each paragraph
    const colorSelectors = document.querySelectorAll(".dropdown");
    colorSelectors.forEach(select => {
        select.addEventListener("change", (event) => {
            const selectedColor = event.target.value;
            const targetId = event.target.id;
            let targetHeader;

            if (targetId.includes("1")) {
                targetHeader = document.getElementById("quiz-h1");
            } else if (targetId.includes("2")) {
                targetHeader = document.getElementById("quiz-h2");
            } else if (targetId.includes("3")) {
                targetHeader = document.getElementById("quiz-h3");
            } else if (targetId.includes("4")) {
                targetHeader = document.getElementById("quiz-h4");
            }

            if (targetHeader) {
                targetHeader.style.color = selectedColor;
            }
        });
    });

    // Adjust alignment of text for each body paragraph
    const alignmentSelectors = document.querySelectorAll(".dropdown");
    alignmentSelectors.forEach(select => {
        select.addEventListener("change", (event) => {
            const justifyValue = event.target.value;
            const targetId = event.target.id;
            let targetParagraph;

            if (targetId.includes("1")) {
                targetParagraph = document.getElementById("quiz-p1");
            } else if (targetId.includes("2")) {
                targetParagraph = document.getElementById("quiz-p2");
            } else if (targetId.includes("3")) {
                targetParagraph = document.getElementById("quiz-p3");
            } else if (targetId.includes("4")) {
                targetParagraph = document.getElementById("quiz-p4");
            }

            if (targetParagraph) {
                targetParagraph.style.display = 'flex';
                targetParagraph.style.justifyContent = justifyValue;
            }
        });
    });

    // Adjust margin between body paragraphs
    const marginSlider = document.getElementById("quiz-margin-slider");
    const marginDisplay = document.getElementById("quiz-slider-value");
    marginSlider.addEventListener("input", () => {
        const marginValue = marginSlider.value;
        marginDisplay.textContent = marginValue;
        const paragraphs = document.querySelectorAll(".quiz-paragraph");
        paragraphs.forEach(paragraph => {
            paragraph.style.marginBottom = `${marginValue}px`;
        });
    });

    // Adjust position of images
    const form = document.querySelector('form');
    const dropdowns = document.querySelectorAll('.quiz-dropdown');
    const paragraphs = document.querySelectorAll('.quiz-paragraph');

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
            alert('Please ensure there are no repeated values for the image proximity placement.');
            return;
        }

        paragraphs.forEach((paragraph) => {
            const images = paragraph.querySelectorAll('.quiz-graphic');
            images.forEach((image) => {
                image.style.display = 'none';
            });
        });

        dropdowns.forEach((dropdown, index) => {
            const selectedValue = dropdown.value;
            const imageId = `quiz${index + 1}-${selectedValue === 'first' ? 1 : selectedValue === 'second' ? 2 : selectedValue === 'third' ? 3 : 4}`;
            const image = document.getElementById(imageId);

            if (image) {
                image.style.display = 'block';
            }
        });
    });
});
