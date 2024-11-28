document.addEventListener('DOMContentLoaded', () => {
    // Adjust font style for body paragraphs
    const fontDropdowns = document.querySelectorAll('[id^="text-font"]');
    const paragraphs = [document.getElementById('rep1'), document.getElementById('rep2'), document.getElementById('rep3')];

    fontDropdowns.forEach((dropdown, index) => {
        dropdown.addEventListener('change', () => {
            const selectedFont = dropdown.value;
            if (paragraphs[index]) {
                paragraphs[index].style.fontFamily = selectedFont;
            }
        });
    });

    // Adjust color for subheaders
    const colorDropdowns = [document.getElementById('color1'), document.getElementById('color2')];
    const subheaders = [document.getElementById('subhead1'), document.getElementById('subhead2')];

    colorDropdowns.forEach((dropdown, index) => {
        dropdown.addEventListener('change', () => {
            const selectedColor = dropdown.value;
            if (subheaders[index]) {
                subheaders[index].style.color = selectedColor;
            }
        });
    });

    // Adjust list types shown
    const listDropdowns = [document.getElementById('list1'), document.getElementById('list2')];
    const lists = [
        { ul: document.querySelector('section:nth-child(2) ul'), ol: document.querySelector('section:nth-child(2) ol') },
        { ul: document.querySelector('section:nth-child(3) ul'), ol: document.querySelector('section:nth-child(3) ol') },
    ];

    listDropdowns.forEach((dropdown, index) => {
        dropdown.addEventListener('change', () => {
            const selectedList = dropdown.value;
            const currentLists = lists[index];

            if (selectedList === 'ul') {
                currentLists.ol.style.display = 'none';
                currentLists.ul.style.display = 'block';
            } else if (selectedList === 'ol') {
                currentLists.ul.style.display = 'none';
                currentLists.ol.style.display = 'block';
            }
        });
    });
});
