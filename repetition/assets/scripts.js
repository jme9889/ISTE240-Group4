/**
 * Date: 12/2/24
 * ISTE-240 Group 4: Johnathan Eschbacher, Paige Bohman, Garrett Recker, Jonathan Unger, Katiya Zawrotny
 */
// run on content load
document.addEventListener('DOMContentLoaded', () => {
    // Adjust font style for body paragraphs

    // grab select input and body paragraphs
    const fontDropdowns = document.querySelectorAll('[id^="text-font"]');
    const paragraphClasses = ['rep1', 'rep2', 'rep3'];

    // change fonts based on input value
    fontDropdowns.forEach((dropdown, index) => {
        dropdown.addEventListener('change', () => {
            const selectedFont = dropdown.value;
            const paragraphs = document.querySelectorAll(`.${paragraphClasses[index]}`);
            paragraphs.forEach(paragraph => {
                paragraph.style.fontFamily = selectedFont;
            });
        });
    });

    // Adjust color for subheaders

    // grab color input and subheaders
    const colorDropdowns = [document.getElementById('color1'), document.getElementById('color2')];
    const subheaders = [document.getElementById('subhead1'), document.getElementById('subhead2')];

    // change subheader color based on input
    colorDropdowns.forEach((dropdown, index) => {
        dropdown.addEventListener('change', () => {
            const selectedColor = dropdown.value;
            if (subheaders[index]) {
                subheaders[index].style.color = selectedColor;
            }
        });
    });

    // Adjust list types shown

    // grab list input and 4 lists
    const listDropdowns = [document.getElementById('list1'), document.getElementById('list2')];
    const lists = [
        {
            ul: document.querySelector('section:nth-child(2) ul'),
            ol: document.querySelector('section:nth-child(2) ol')
        },
        {
            ul: document.querySelector('section:nth-child(3) ul'),
            ol: document.querySelector('section:nth-child(3) ol')
        }
    ];

    // change visibility of lists based on input
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
