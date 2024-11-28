<?php
    $pageTitle = "Alignment";

    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <section class="align-paragraph">
                    <h1>The CRAPsite | Alignment</h1>
                    <p id="al1">Some generic text here about Alignment</p>
                </section>

                <section class="align-paragraph">
                    <h2 class="interaction-h2">A header</h2>
                    <p id="al2">text</p>
                </section>

                <section id="bottom-align">
                    <h2 class="interaction-h2">A header</h2>
                    <p id="al3">text</p>
                    <img src="#" alt="" id="slider-img">
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