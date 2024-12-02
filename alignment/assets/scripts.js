/**
 * Date: 12/2/24
 * ISTE-240 Group 4: Johnathan Eschbacher, Paige Bohman, Garrett Recker, Jonathan Unger, Katiya Zawrotny
 */
// run on content load
document.addEventListener("DOMContentLoaded", function () {
    // Adjust alignment of text in body paragraphs
    function updateAlignment(selectId, paragraphId) {
        // grab paragraph and input alignment value
        const dropdown = document.getElementById(selectId);
        const paragraph = document.getElementById(paragraphId);

        // change alignment of text from input
        if (dropdown && paragraph) {
            dropdown.addEventListener("change", function () {
                paragraph.style.justifyContent = dropdown.value;
                paragraph.style.textAlign = dropdown.value;
            });
            paragraph.style.justifyContent = dropdown.value;
            paragraph.style.textAlign = dropdown.value;
        }
    }

    // update alignment for each paragraph
    updateAlignment("text-align1", "al1");
    updateAlignment("text-align2", "al2");
    updateAlignment("text-align3", "al3");

    // Adjust margin between body paragraphs

    //grab margin slider input and paragraphs
    const marginSlider = document.getElementById("margin-slider");
    const sliderValueDisplay = document.getElementById("slider-value");
    const paragraphs = document.querySelectorAll(".align-paragraph");

    // change bottom margin of each paragraph to input margin-slider value
    if (marginSlider && sliderValueDisplay && paragraphs) {
        marginSlider.addEventListener("input", function () {
            const marginValue = marginSlider.value + "px";
            paragraphs.forEach(paragraph => {
                paragraph.style.marginBottom = marginValue;
            });
            sliderValueDisplay.textContent = marginSlider.value;
        });

        const initialMargin = marginSlider.value + "px";
        paragraphs.forEach(paragraph => {
            paragraph.style.marginBottom = initialMargin;
        });
        sliderValueDisplay.textContent = marginSlider.value;
    }

    // Adjust postion of bottom image

    // grab image slider and the image to slide
    const imageSlider = document.getElementById("image-slider");
    const imageSliderValueDisplay = document.querySelector("#image-slider + .value-display span");
    const image = document.getElementById("slider-img");

    // based on calculations of screen size, change position of slider-img based on slider value
    if (imageSlider && imageSliderValueDisplay && image) {
        imageSlider.addEventListener("input", function () {
            const sliderValue = parseInt(imageSlider.value, 10);
            const container = image.closest(".single-column");
            const containerWidth = container.offsetWidth;
            const imageWidth = image.offsetWidth;

            const availableWidth = containerWidth * 0.8;
            const maxLeftMargin = availableWidth - imageWidth;

            const marginLeft = (sliderValue / 100) * maxLeftMargin + "px";
            image.style.marginLeft = marginLeft;
            imageSliderValueDisplay.textContent = sliderValue;
        });

        const initialSliderValue = parseInt(imageSlider.value, 10);
        const container = image.closest(".single-column");
        const containerWidth = container.offsetWidth;
        const imageWidth = image.offsetWidth;
        const availableWidth = containerWidth * 0.8;
        const maxLeftMargin = availableWidth - imageWidth;
        const initialMarginLeft = (initialSliderValue / 100) * maxLeftMargin + "px";

        image.style.marginLeft = initialMarginLeft;
        imageSliderValueDisplay.textContent = initialSliderValue;
    }
});