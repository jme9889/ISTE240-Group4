<?php
    $pageTitle = "Proximity";

    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <section class="paragraph">
                    <h1>The CRAPsite - Proximity</h1>
                    <p>Some generic text here about Proximity</p>
                    <img src="#" alt="1" class="prox-graphic">
                    <img src="#" alt="2" class="prox-graphic">
                    <img src="#" alt="3" class="prox-graphic">
                    <img src="#" alt="4" class="prox-graphic">
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">A header</h2>
                    <p>text</p>
                    <img src="#" alt="1" class="prox-graphic">
                    <img src="#" alt="2" class="prox-graphic">
                    <img src="#" alt="3" class="prox-graphic">
                    <img src="#" alt="4" class="prox-graphic">
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">A header</h2>
                    <p>text</p>
                    <img src="#" alt="1" class="prox-graphic">
                    <img src="#" alt="2" class="prox-graphic">
                    <img src="#" alt="3" class="prox-graphic">
                    <img src="#" alt="4" class="prox-graphic">
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2">A header</h2>
                    <p>text</p>
                    <img src="#" alt="1" class="prox-graphic">
                    <img src="#" alt="2" class="prox-graphic">
                    <img src="#" alt="3" class="prox-graphic">
                    <img src="#" alt="4" class="prox-graphic">
                </section>

                <!-- Paige, please try and get whatever content you write here split into 4 paragraphs (keep the containers below). -->

                 <!--Include 4 images/videos from the ones Katiya had. I have the placeholders there already for them, just use those
                 spots. If you add videos/s, replace the placeholder but keep the class name. All 4 images are on each paragraph b/c
                 the user will choose which ones are visible.-->
            </div>
        </div>

        <div class="interaction-panel">
            <div class="column">
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix the Proximity!</h2>
                    <h3>Use the controls below to fix the proximity of this page!</h3>
                </section>

                <div class="control-section">
                    <form action="index.html" method="post">
                        <p>Choose one spot for each image (no repeats) for the best proximity!</p>
                        <img src="#" alt="1" class="prox-graphic">

                        <section class="image-change">
                            <h4>First Image:</h4>
                            <select class="dropdown" id="img-prox1" name="img-prox1">
                                <option value="first" id="first1">First</option>
                                <option value="second" id="second1">Second</option>
                                <option value="third" id="third1">Third</option>
                                <option value="fourth" id="fourth1">Fourth</option>
                            </select>
                        </section>
                        <hr>
    
                        <img src="#" alt="2" class="prox-graphic">

                        <section class="image-change">
                            <h4>Second Image:</h4>
                            <select class="dropdown" id="img-prox2" name="img-prox2">
                                <option value="second" id="second2">Second</option>
                                <option value="third" id="third2">Third</option>
                                <option value="fourth" id="fourth2">Fourth</option>
                                <option value="first" id="first2">First</option>
                            </select>
                        </section>
                        <hr>
    
                        <img src="#" alt="3" class="prox-graphic">

                        <section class="image-change">
                            <h4>Third Image:</h4>
                            <select class="dropdown" id="img-prox3" name="img-prox3">
                                <option value="third" id="third3">Third</option>
                                <option value="fourth" id="fourth3">Fourth</option>
                                <option value="first" id="first3">First</option>
                                <option value="second" id="second3">Second</option>
                            </select>
                        </section>
                        <hr>
    
                        <img src="#" alt="4" class="prox-graphic">

                        <section class="image-change">
                            <h4>Fourth Image:</h4>
                            <select class="dropdown" id="img-prox4" name="img-prox4">
                                <option value="fourth" id="fourth3">Fourth</option>
                                <option value="first" id="first3">First</option>
                                <option value="second" id="second3">Second</option>
                                <option value="third" id="third3">Third</option>
                            </select>
                        </section>
                        <hr>

                        <button type="submit" class="submit">Submit my Configuration!</button>
                    </form>
                </div>
            </div>
        </div>
    </main>  
<?php
    include("../assets/inc/footer.inc.php");
?>