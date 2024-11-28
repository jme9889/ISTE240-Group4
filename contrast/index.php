<?php
    $pageTitle = "Contrast";

    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <section class="paragraph">
                    <h1>The CRAPsite - Contrast</h1>
                    <p class="contrast-p">Some generic text here about Contrast</p>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">A header</h2>
                    <p class="contrast-p">text</p>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">A header</h2>
                    <p class="contrast-p">text</p>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">A header</h2>
                    <p class="contrast-p">text</p>
                </section>

                <!-- Paige, please try and get whatever content you write here split into at least 4 or 5 paragraphs -->

                 <!--Try and include 1 or 2 more images/graphics from the ones Katiya had-->

                 <!-- These are the images I plan to use, it's just gonna have one image visible at a time in the end. 
                  Put these images with whatever paragraph you have mentioning color contrast for images-->
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
                        <label id="peach"><input type="radio" name="option" value="#FFE5B4"> Peach</label>
                        <label id="purple"><input type="radio" name="option" value="rgb(57, 0, 57)"> Dark Purple</label>
                        <label id="yellow"><input type="radio" name="option" value="yellow"> Yellow</label>
                    </div>
                    <hr>

                    <p>Which font weight has the best contrast for the headers?</p>
                    <div class="radio-row" id="bold-radio">
                        <label id="normal"><input type="radio" name="option" value="normal"> Normal</label>
                        <label id="bold"><input type="radio" name="option" value="bold"> Bold</label>
                        <label id="bolder"><input type="radio" name="option" value="900"> Bolder</label>
                    </div>
                    <hr>

                    <p>Which image has the best contrast with this background?</p>
                    <div class="radio-row">
                        <label id="flower"><input type="radio" name="option" value="flower"> Flower
                            <img src="../assets/images/bad-contrast.jpg" alt="Flower with Bad Contrast" class="mini-contrast-img">
                        </label>
                        <label id="cat"><input type="radio" name="option" value="cat"> Cat
                            <img src="../assets/images/mid-contrast.png" alt="Cat with Mid Contrast" class="mini-contrast-img">
                        </label>
                        <label id="frog"><input type="radio" name="option" value="frog"> Frog
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