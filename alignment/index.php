<?php
    $pageTitle = "Alignment";

    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <section class="align-paragraph">
                    <h1>The CRAPsite - Alignment</h1>
<div class="align-container"id="al1">
                        <p  class="align-p">Alignment is used to set an invisible framework to create a sense of order within designs. Alignment creates meaningful and intentional relationships between elements to group them together and create visual connections. When elements are properly grouped, they allow the user to navigate the site and process information more easily. This can vary based on target audience, such as the difference between a desktop display and a mobile display, or even considering languages that read right-to-left instead of left-to-right. The power of alignment lies in its ability to create structure without drawing attention to itself; when done correctly, it creates a seamless experience that feels natural and intuitive to the user.</p>
    
</div>                    <iframe  class = "paragraph-vid" width="560" height="315" src="https://www.youtube.com/embed/Ox1iQ05FZ00?si=2NcviHssQEYlOkj4&amp;start=850&end930=" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </section>

                <section class="align-paragraph">
                    <h2 class="interaction-h2">Edge Alignment vs. Center Alignment</h2>
<div class="align-container"id="al2">
                        <p  class="align-p">The choice between edge alignment and center alignment significantly impacts how users interact with content. Edge alignment, particularly left alignment, provides a strong vertical line that anchors the design and creates a natural starting point for the eye. This alignment style is particularly effective for longer text passages and content-heavy designs. Center alignment, while visually appealing for shorter pieces of text or decorative elements, can become problematic when overused, as it creates irregular starting points that can strain the reader's eye movement.</p>
    
</div>                    <img src="../assets/images/alignment1.jpg" alt="Alignment example image" class="paragraph-img">
                </section>

                <section class="align-paragraph">
                    <h2 class="interaction-h2">Digital Alignment Considerations</h2>
<div class="align-container"id="al3">
                        <p class="align-p">In the digital realm, alignment takes on additional importance due to the responsive nature of modern designs. Websites and applications must maintain proper alignment across various screen sizes and devices, requiring careful consideration of how elements will reflow and reorganize themselves. This dynamic aspect of digital design necessitates a flexible approach to alignment that can adapt while maintaining the fundamental principles that make the design effective and engaging.</p>
    
</div>                    <img src="../assets/images/alignment2.png" alt="Alignment example image" class="paragraph-img" id="slider-img">
                </section>

                <!-- Paige, please try and get whatever content you write here split into 3 paragraphs (keep the containers below).
                 Just copy/paste the paragraph section above, same kinda style as the homepage -->

                 <!--Try and include 1 or 2 images/graphics from the ones Katiya had. One of these images should be in the
                 slider-img placeholder I have.-->
            </div>
        </div>

        <div class="interaction-panel">
            <div class="column">
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix the Alignment!</h2>
                    <h3>Use the controls below to fix the alignment of this page!</h3>
                </section>

                <div class="control-section">
                    <p>Fix the alignment of the body paragraphs!</p>
                    <section class="change">
                        <section class="paragraph-change">
                            <h4>First Paragraph:</h4>
                            <select class="dropdown" id="text-align1" name="text-align1">
                                <option value="left" id="left1">Left</option>
                                <option value="center" id="center1">Center</option>
                                <option value="right" id="right1">Right</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Second Paragraph:</h4>
                            <select class="dropdown" id="text-align2" name="text-align2">
                                <option value="right" id="right2">Right</option>
                                <option value="left" id="left2">Left</option>
                                <option value="center" id="center2">Center</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Third Paragraph:</h4>
                            <select class="dropdown" id="text-align3" name="text-align3">
                                <option value="center" id="center3">Center</option>
                                <option value="right" id="right3">Right</option>
                                <option value="left" id="left3">Left</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <p>Adjust the margin between the paragraphs!</p>
                    <input type="range" id="margin-slider" class="slider" name="margin-slider" min="0" max="400" value="200">
                    <div class="value-display">Selected value: <span id="slider-value">200</span></div>
                    <hr>

                    <p>Adjust the position of the bottom image!</p>
                    <input type="range" id="image-slider" class="slider" name="image-slider" min="0" max="100" value="100">
                    <div class="value-display">Selected value: <span id="slider-value">100</span></div>
                </div>
            </div>
        </div>
    </main>
<?php
    include("../assets/inc/footer.inc.php");
?>