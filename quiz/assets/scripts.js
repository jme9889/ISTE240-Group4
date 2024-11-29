document.addEventListener("DOMContentLoaded", () => {
    // Adjust color of p tags for paragraphs
    const colorRadios = document.querySelectorAll("input[name='color-options']");
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

function gradeQuiz(event) {
    event.preventDefault();

    let contrastScore = 0;
    let repetitionScore = 0;
    let alignmentScore = 0;
    let proximityScore = 0;

    // Contrast scoring

    // Text Color
    const textColor = document.querySelector('input[name="color-options"]:checked')?.value;
    if (textColor === "darkred") contrastScore += 2;
    else if (textColor === "greenyellow") contrastScore += 1;

    // Font Weight
    const fontWeight = document.querySelector('input[name="bold-options"]:checked')?.value;
    if (fontWeight === "bold") contrastScore += 2;
    else if (fontWeight === "900") contrastScore += 1;

    // Repetition scoring

    // Body Font Family
    const fonts = [
        document.getElementById("quiz-text-font1").value,
        document.getElementById("quiz-text-font2").value,
        document.getElementById("quiz-text-font3").value,
        document.getElementById("quiz-text-font4").value
    ];
    const uniqueFonts = new Set(fonts).size;
    if (uniqueFonts === 1) repetitionScore += 2;
    else if (uniqueFonts <= 2) repetitionScore += 1;

    // Subheader Colors
    const subheaderColors = [
        document.getElementById("quiz-color1").value,
        document.getElementById("quiz-color2").value,
        document.getElementById("quiz-color3").value,
        document.getElementById("quiz-color4").value
    ];
    const uniqueColors = new Set(subheaderColors).size;
    if (uniqueColors === 1) repetitionScore += 2;
    else if (uniqueColors <= 2) repetitionScore += 1;

    // Alignment scoring

    // Text Alignment
    const paragraphs = document.querySelectorAll('.quiz-paragraph p');
    let leftAlignedCount = 0;
    paragraphs.forEach(p => {
        if (getComputedStyle(p).justifyContent === "left") {
            leftAlignedCount++;
        }
    });
    if (leftAlignedCount === 4) alignmentScore += 2;
    else if (leftAlignedCount === 3) alignmentScore += 1;

    // Paragraph Margins
    const margin = document.getElementById('quiz-margin-slider');
    let currentValue = parseInt(margin.value, 10);
    if(currentValue > 390 || currentValue < 50) {
        alignmentScore += 0;
    } else if(currentValue > 249 || currentValue < 100) {
        alignmentScore += 1;
    } else {
        alignmentScore += 2;
    }
    

    // Proximity scoring (Image Placement)
    const imageSelects = ["quiz-img-prox1", "quiz-img-prox2", "quiz-img-prox3", "quiz-img-prox4"];
    let selectionOrder = [];
    imageSelects.forEach((id) => {
        const element = document.getElementById(id);
        selectionOrder.push(element.value);
    });
    if (selectionOrder[0] === "first") proximityScore += 1;
    if (selectionOrder[1] === "second") proximityScore += 1;
    if (selectionOrder[2] === "third") proximityScore += 1;
    if (selectionOrder[3] === "fourth") proximityScore += 1;

    // Overall scoring
    const totalScore = contrastScore + repetitionScore + alignmentScore + proximityScore;
    const percentage = (totalScore / 16) * 100;

    const previousGrades = document.querySelectorAll(".quiz-grade");
    previousGrades.forEach(grade => grade.remove());

    const gradeElement = document.createElement("div");
    gradeElement.classList.add("quiz-grade");
    gradeElement.innerHTML = `
        <h3>Your Grade:</h3>
        <p>Contrast: ${contrastScore}/4</p>
        <p>Repetition: ${repetitionScore}/4</p>
        <p>Alignment: ${alignmentScore}/4</p>
        <p>Proximity: ${proximityScore}/4</p>
        <p style="color: red; font-weight: bold;">Overall: ${percentage.toFixed(2)}%</p>
    `;
    gradeElement.style.textAlign = "center";
    gradeElement.style.fontSize = "1.5em";
    gradeElement.style.margin = "20px auto";

    document.querySelector(".interaction-panel").appendChild(gradeElement);
    gradeElement.scrollIntoView({ behavior: "smooth", block: "end" });
}
