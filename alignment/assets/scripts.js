document.addEventListener("DOMContentLoaded", function () {
    // Function to update paragraph alignment based on dropdown selection
    function updateAlignment(selectId, paragraphId) {
        const dropdown = document.getElementById(selectId);
        const paragraph = document.getElementById(paragraphId);

        if (dropdown && paragraph) {
            dropdown.addEventListener("change", function () {
                paragraph.style.justifyContent = dropdown.value;
            });
            paragraph.style.justifyContent = dropdown.value;
        }
    }

    updateAlignment("text-align1", "al1");
    updateAlignment("text-align2", "al2");
    updateAlignment("text-align3", "al3");

    // Function to update margin-bottom based on margin-slider value
    const marginSlider = document.getElementById("margin-slider");
    const sliderValueDisplay = document.getElementById("slider-value");
    const paragraphs = document.querySelectorAll(".align-paragraph");

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

    // Function to adjust left margin of the image dynamically within the middle 80% of the screen width
    const imageSlider = document.getElementById("image-slider");
    const imageSliderValueDisplay = document.querySelector("#image-slider + .value-display span");
    const image = document.getElementById("slider-img");

    if (imageSlider && imageSliderValueDisplay && image) {
        imageSlider.addEventListener("input", function () {
            const sliderValue = parseInt(imageSlider.value, 10);
            const container = image.closest(".single-column"); // Get the container
            const containerWidth = container.offsetWidth; // Get the container's width
            const imageWidth = image.offsetWidth; // Get the current width of the image

            // Calculate the 80% of the container's width
            const availableWidth = containerWidth * 0.8;
            
            // Ensure the right edge of the image does not exceed the 80% width
            const maxLeftMargin = availableWidth - imageWidth;

            // Adjust margin-left based on the slider value, constrained to the available width
            const marginLeft = (sliderValue / 100) * maxLeftMargin + "px";
            image.style.marginLeft = marginLeft; // Dynamically adjust margin-left
            imageSliderValueDisplay.textContent = sliderValue; // Update displayed slider value
        });

        // Initial positioning
        const initialSliderValue = parseInt(imageSlider.value, 10);
        const container = image.closest(".single-column");
        const containerWidth = container.offsetWidth;
        const imageWidth = image.offsetWidth;
        const availableWidth = containerWidth * 0.8; // Calculate the 80% of the container's width
        const maxLeftMargin = availableWidth - imageWidth;
        const initialMarginLeft = (initialSliderValue / 100) * maxLeftMargin + "px";

        image.style.marginLeft = initialMarginLeft;
        imageSliderValueDisplay.textContent = initialSliderValue;
    }
});
