<?php
    $pageTitle = "Contrast";

    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <section class="paragraph">
                    <h1>The CRAPsite - Contrast</h1>
                    <p class="contrast-p">Contrast is an essential principle in visual design, allowing for elements to stand out 
                        from one another using several different design aspects. It is a fundamental method to allow certain areas 
                        of a design to stand out while allowing other sections to fade into the background. At its core, contrast 
                        creates meaningful differences between design elements using color, size, shape, texture, and typography 
                        to guide attention, establish hierarchy, and enhance visual interest.</p>
                    <iframe  class = "paragraph-vid" width="560" height="315" src="https://www.youtube.com/embed/Ox1iQ05FZ00?si=2NcviHssQEYlOkj4&amp;start=154&end431=" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">Visual Hierarchy Through Color Contrast</h2>
                    <p class="contrast-p">Color is the element most frequently and immediately associated with contrast. It is 
                        rightfully so, since color is an extremely powerful tool for directing the eye, creating emotional 
                        responses, and enhancing accessibility to designs. The key for effective color usage to create contrast 
                        is not just selecting opposing colors, but understanding how color combinations work to affect readability 
                        and visual impact while maintaining a harmonious overall design. Basic color theory will tell you that 
                        green and red are complementary colors with excellent contrast, however, a good designer knows that there 
                        will be an association of red and green with Christmas. This may be a boon to your design if you are 
                        designing for the holidays, but if you are creating a delicate and feminine perfume website, then pinks, 
                        soft blues, and whites will be a better choice for your design.</p>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">Size and Scale: Creating Dynamic Tension</h2>
                    <p class="contrast-p">Size contrast creates dynamic relationships between elements, establishing clear 
                        hierarchical structures within designs. By varying the scale of elements significantly, designers can 
                        create focal points that naturally draw the eye and guide users through content. This principle is 
                        particularly effective in typography, where size differences between headlines and body text can 
                        dramatically improve readability and information flow.                    </p>
                    <img src="../assets/images/contrast1.jpg" alt="Contrast Graphic" class="paragraph-img">
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">Textural and Stylistic Contrast</h2>
                    <p class="contrast-p">Using different textures and styles is another way to add contrast. Bringing in a 
                        mix of fonts, background patterns, and adhering to a style guide helps unify a page. More modern 
                        designs will prefer smooth textures, sans-serif fonts, and left-aligned or generally off-center 
                        elements, while older web designs may use more textured images, serif or cursive fonts, and centered 
                        text. Keeping these elements of style and typography in mind when designing will help push your 
                        design into the era you are designing it for.</p>
                </section>

                 <img src="../assets/images/bad-contrast.jpg" alt="Flower with Bad Contrast" class="contrast-img" id="flower-big">
                 <img src="../assets/images/mid-contrast.png" alt="Cat with Mid Contrast" class="contrast-img" id="cat-big">
                 <img src="../assets/images/good-contrast.jpg" alt="Frog with Good Contrast" class="contrast-img" id="frog-big">
            </div>
            
        </div>

        <div class="interaction-panel">
            <div class="column">
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix the Contrast!</h2>
                    <h3>Use the controls below to fix the contrast of this page!</h3>
                </section>

                <div class="control-section">
                    <p>Which text color has the best contrast with the background?</p>
                    <div class="radio-row" id="color-radio">
                        <label id="peach"><input type="radio" name="color-options" value="#FFE5B4"> Peach</label>
                        <label id="purple"><input type="radio" name="color-options" value="rgb(57, 0, 57)"> Dark Purple</label>
                        <label id="yellow"><input type="radio" name="color-options" value="yellow"> Yellow</label>
                    </div>
                    <hr>

                    <p>Which font weight has the best contrast for the headers?</p>
                    <div class="radio-row" id="bold-radio">
                        <label id="normal"><input type="radio" name="bold-options" value="normal"> Normal</label>
                        <label id="bold"><input type="radio" name="bold-options" value="bold"> Bold</label>
                        <label id="bolder"><input type="radio" name="bold-options" value="900"> Bolder</label>
                    </div>
                    <hr>

                    <p>Which image has the best contrast with this background?</p>
                    <div class="radio-row">
                        <label id="flower"><input type="radio" name="image-options" value="flower"> Flower
                            <img src="../assets/images/bad-contrast.jpg" alt="Flower with Bad Contrast" class="mini-contrast-img">
                        </label>
                        <label id="cat"><input type="radio" name="image-options" value="cat"> Cat
                            <img src="../assets/images/mid-contrast.png" alt="Cat with Mid Contrast" class="mini-contrast-img">
                        </label>
                        <label id="frog"><input type="radio" name="image-options" value="frog"> Frog
                            <img src="../assets/images/good-contrast.jpg" alt="Frog with Good Contrast" class="mini-contrast-img">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </main> 
<?php
    include("../assets/inc/footer.inc.php");
?>