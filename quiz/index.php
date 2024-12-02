<!--
Date: 12/2/24
ISTE-240 Group 4: Johnathan Eschbacher, Paige Bohman, Garrett Recker, Jonathan Unger, Katiya Zawrotny
-->
<?php
    // Set the title for the page to be displayed in the browser tab and header
    $pageTitle = "Quiz";

    // Include the header file
    include("../assets/inc/header.inc.php");
?>
   <main>
        <div class="single-column">
            <div class="column">
                <h1>The CRAPsite - Quiz</h1>
                <!-- Section: Contrast Paragraph of Quiz -->
                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h1">Contrast</h2>
                    <p id="quiz-p1">Contrast creates visual interest and hierarchy by using differences in elements 
                        like color, size, and shape to make important content stand out. This principle enhances the 
                        readability and hierarchy of elements by ensuring critical components, such as headlines or 
                        call-to-action buttons, stand out against their background. High-contrast combinations, like 
                        black text on a white background, improve accessibility, especially for users with visual 
                        impairments. However, balance is essential; too much contrast can overwhelm and confuse, while 
                        too little can make designs appear monotonous. By using color saturation, shapes, and size 
                        effectively, designers can guide users' eyes and enhance their overall experience.</p>

                    <!-- Images: 4 Images to Switch Between -->
                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-1">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-1">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-1">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-1">
                </section>

                <!-- Section: Repetition Paragraph of Quiz -->
                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h2">Repetition</h2>
                    <p id="quiz-p2">Repetition establishes consistency and unity by reusing design elements like colors, 
                        fonts, and patterns throughout a piece. This consistency helps users quickly familiarize themselves 
                        with the design structure, reinforcing brand identity and improving navigation. For example, using 
                        the same typography for headings and a recurring icon style throughout a website creates a 
                        seamless and professional appearance. However, overuse of repetition can lead to redundancy; careful 
                        moderation ensures the design remains engaging. Through deliberate and sparing application, repetition 
                        provides rhythm and predictability, making designs more visually appealing and user-friendly.</p>

                    <!-- Images: 4 Images to Switch Between -->
                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-2">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-2">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-2">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-2">
                </section>

                <!-- Section: Alignment Paragraph of Quiz -->
                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h3">Alignment</h2>
                    <p id="quiz-p3">Alignment organizes elements by creating visual connections through proper positioning and spacing, 
                        making designs appear clean and structured. Proper alignment creates a sense of order, aiding users in 
                        processing information efficiently and reducing visual clutter. For example, left-aligned text provides 
                        a predictable starting point for the eye, enhancing readability for larger text blocks. In contrast, 
                        center-alignment, while aesthetically appealing for small text groups, can hinder readability when overused. 
                        Designers use alignment techniques like edge, center, and optical alignment to maintain a cohesive structure, 
                        improving the overall user experience and trust in the brand.</p>

                    <!-- Images: 4 Images to Switch Between -->
                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-3">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-3">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-3">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-3">
                </section>

                <!-- Section: Proximity Paragraph of Quiz -->
                <section class="quiz-paragraph">
                    <h2 class="quiz-subhead" id="quiz-h4">Proximity</h2>
                    <p id="quiz-p4">Proximity groups related elements together while separating unrelated ones to create clear visual 
                        relationships and improve understanding. This principle simplifies communication by visually signaling 
                        relationships, such as grouping form labels with their fields to reduce confusion. Whitespace plays a critical 
                        role, helping users differentiate sections and focus on relevant information. Conversely, improper grouping can 
                        lead to missed elements or user frustration, as unrelated items appear falsely connected. By leveraging proximity, 
                        designers can create intuitive layouts that reduce cognitive load and enhance the efficiency of user interactions.</p>

                    <!-- Images: 4 Images to Switch Between -->
                    <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="quiz-graphic" id="quiz1-4">
                    <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="quiz-graphic" id="quiz2-4">
                    <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="quiz-graphic" id="quiz3-4">
                    <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="quiz-graphic" id="quiz4-4">
                </section>
            </div>
        </div>

        <!-- Div: Javascript Interaction Panel for Quiz -->
        <div class="interaction-panel">
            <div class="column">
                <!-- Section: Instructions -->
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix This CRAP!</h2>
                    <h3>Use the controls below to fix the Contrast, Repetition, Alignment, and Proximity of this page!</h3>
                </section>

                <!-- Section: Controls to Change CRAP -->
                <div class="control-section">
                    <!-- Controls to change body text color -->
                    <p><strong>Contrast:</strong><br>Adjust the body text color for proper contrast!</p>
                    <div class="radio-row" id="quiz-text-color">
                        <label id="blue"><input type="radio" name="color-options" value="lightblue"> Light Blue</label>
                        <label id="red"><input type="radio" name="color-options" value="darkred"> Dark Red</label>
                        <label id="green"><input type="radio" name="color-options" value="greenyellow"> Green-Yellow</label>
                    </div>
                    <hr>

                    <!-- Controls to header font weight -->
                    <p>Which font weight has the best contrast for the headers?</p>
                    <div class="radio-row" id="quiz-font-weight">
                        <label id="normal-quiz"><input type="radio" name="bold-options" value="normal"> Normal</label>
                        <label id="bold-quiz"><input type="radio" name="bold-options" value="bold"> Bold</label>
                        <label id="bolder-quiz"><input type="radio" name="bold-options" value="900"> Bolder</label>
                    </div>
                    <hr>

                    <!-- Controls to change body paragraph font -->
                    <p><strong>Repetition:</strong><br>Ensure font repetition in the body paragraphs!</p>
                    <section class="change" id="quiz-rep">
                        <!-- Section: First Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>First Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-font1" name="quiz-text-font1">
                                <option value="Franklin Gothic Medium" id="franklin1">Franklin Gothic Medium</option>
                                <option value="Times New Roman" id="roman1">Times New Roman</option>
                                <option value="Verdana" id="verdana1">Verdana</option>
                                <option value="Gill Sans" id="gill1">Gill Sans</option>
                            </select>
                        </section>

                        <!-- Section: Second Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Second Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-font2" name="quiz-text-font2">
                                <option value="Times New Roman" id="roman2">Times New Roman</option>
                                <option value="Verdana" id="verdana2">Verdana</option>
                                <option value="Gill Sans" id="gill2">Gill Sans</option>
                                <option value="Franklin Gothic Medium" id="franklin2">Franklin Gothic Medium</option>
                            </select>
                        </section>

                        <!-- Section: Third Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Third Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-font3" name="quiz-text-font3">
                                <option value="Verdana" id="verdana3">Verdana</option>
                                <option value="Gill Sans" id="gill3">Gill Sans</option>
                                <option value="Franklin Gothic Medium" id="franklin3">Franklin Gothic Medium</option>
                                <option value="Times New Roman" id="roman3">Times New Roman</option>
                            </select>
                        </section>

                        <!-- Section: Fourth Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Fourth Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-font4" name="quiz-text-font4">
                                <option value="Gill Sans" id="gill4">Gill Sans</option>
                                <option value="Franklin Gothic Medium" id="franklin4">Franklin Gothic Medium</option>
                                <option value="Times New Roman" id="roman4">Times New Roman</option>
                                <option value="Verdana" id="verdana4">Verdana</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <!-- Controls to change color of headers -->
                    <p>Fix the color repetition for the four subheaders!</p>
                    <section class="change" id="quiz-rep">
                        <!-- Section: First Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>First Subheader:</h4>
                            <select class="dropdown" id="quiz-color1" name="quiz-color1">
                                <option value="white" id="h-white1">White</option>
                                <option value="darkblue" id="h-blue1">Dark Blue</option>
                                <option value="purple" id="h-purple1">Purple</option>
                                <option value="orange" id="h-orange1">Orange</option>
                            </select>
                        </section>

                        <!-- Section: Second Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Second Subheader:</h4>
                            <select class="dropdown" id="quiz-color2" name="quiz-color2">
                                <option value="darkblue" id="h-blue2">Dark Blue</option>
                                <option value="purple" id="h-purple2">Purple</option>
                                <option value="orange" id="h-orange2">Orange</option>
                                <option value="white" id="h-white2">White</option>
                            </select>
                        </section>

                        <!-- Section: Third Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Third Subheader:</h4>
                            <select class="dropdown" id="quiz-color3" name="quiz-color3">
                                <option value="purple" id="h-purple2">Purple</option>
                                <option value="orange" id="h-orange2">Orange</option>
                                <option value="white" id="h-white2">White</option>
                                <option value="darkblue" id="h-blue2">Dark Blue</option>
                            </select>
                        </section>

                        <!-- Section: Fourth Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Fourth Subheader:</h4>
                            <select class="dropdown" id="quiz-color4" name="quiz-color4">
                                <option value="orange" id="h-orange2">Orange</option>
                                <option value="white" id="h-white2">White</option>
                                <option value="darkblue" id="h-blue2">Dark Blue</option>
                                <option value="purple" id="h-purple2">Purple</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <!-- Controls to adjust alignment of body paragraphs -->
                    <p><strong>Alignment:</strong><br>Fix the alignment of the body paragraphs!</p>
                    <section class="change" id="quiz-rep">
                        <!-- Section: First Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>First Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-align1" name="quiz-text-align1">
                                <option value="left" id="quiz-left1">Left</option>
                                <option value="center" id="quiz-center1">Center</option>
                                <option value="right" id="quiz-right1">Right</option>
                            </select>
                        </section>

                        <!-- Section: Second Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Second Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-align2" name="quiz-text-align2">
                                <option value="center" id="quiz-center2">Center</option>
                                <option value="right" id="quiz-right2">Right</option>
                                <option value="left" id="quiz-left2">Left</option>
                            </select>
                        </section>

                        <!-- Section: Third Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Third Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-align3" name="quiz-text-align3">
                                <option value="right" id="quiz-right2">Right</option>
                                <option value="left" id="quiz-left2">Left</option>
                                <option value="center" id="quiz-center2">Center</option>
                            </select>
                        </section>

                        <!-- Section: Fourth Paragraph controls -->
                        <section class="paragraph-change">
                            <h4>Fourth Paragraph:</h4>
                            <select class="dropdown" id="quiz-text-align4" name="quiz-text-align4">
                                <option value="left" id="quiz-left4">Left</option>
                                <option value="center" id="quiz-center4">Center</option>
                                <option value="right" id="quiz-right4">Right</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <!-- Controls to adjust margins between paragraphs -->
                    <p>Adjust the margin between the paragraphs!</p>
                    <input type="range" id="quiz-margin-slider" class="slider" name="quiz-margin-slider" min="0" max="400" value="200">
                    <div class="value-display">Selected value: <span id="quiz-slider-value">200</span></div>
                    <hr>
                    
                    <!-- Form: Submission of Image Positions and Quiz, with call to gradeQuiz for final grade -->
                    <form action="index.php" method="post" onsubmit="gradeQuiz(event);">
                        <p><strong>Proximity:</strong><br>Choose one spot for each image (no repeats) for the best proximity!</p>

                        <!-- Section: First Image controls -->
                        <img src="../assets/images/quiz-contrast.jpg" alt="Contrast" class="mini-prox-graphic">

                        <section class="quiz-image-change">
                            <h4>First Image:</h4>
                            <select class="quiz-dropdown" id="quiz-img-prox1" name="quiz-img-prox1">
                                <option value="fourth" id="quiz-fourth1">Fourth</option>
                                <option value="first" id="quiz-first1">First</option>
                                <option value="second" id="quiz-second1">Second</option>
                                <option value="third" id="quiz-third1">Third</option>
                            </select>
                        </section>
                        <hr>
            
                        <!-- Section: Second Image controls -->
                        <img src="../assets/images/quiz-repetition.jpg" alt="Repetition" class="mini-prox-graphic">

                        <section class="quiz-image-change">
                            <h4>Second Image:</h4>
                            <select class="quiz-dropdown" id="quiz-img-prox2" name="quiz-img-prox2">
                                <option value="third" id="quiz-third2">Third</option>
                                <option value="fourth" id="quiz-fourth2">Fourth</option>
                                <option value="first" id="quiz-first2">First</option>
                                <option value="second" id="quiz-second2">Second</option>
                            </select>
                        </section>
                        <hr>
            
                        <!-- Section: Third Image controls -->
                        <img src="../assets/images/quiz-alignment.png" alt="Alignment" class="mini-prox-graphic">

                        <section class="quiz-image-change">
                            <h4>Third Image:</h4>
                            <select class="quiz-dropdown" id="quiz-img-prox3" name="quiz-img-prox3">
                                <option value="second" id="quiz-second3">Second</option>
                                <option value="third" id="quiz-third3">Third</option>
                                <option value="fourth" id="quiz-fourth3">Fourth</option>
                                <option value="first" id="quiz-first3">First</option>
                            </select>
                        </section>
                        <hr>
            
                        <img src="../assets/images/quiz-proximity.png" alt="Proximity" class="mini-prox-graphic">

                        <!-- Section: Fourth Image controls -->
                        <section class="quiz-image-change">
                            <h4>Fourth Image:</h4>
                            <select class="quiz-dropdown" id="quiz-img-prox4" name="quiz-img-prox4">
                                <option value="first" id="quiz-first3">First</option>
                                <option value="second" id="quiz-second3">Second</option>
                                <option value="third" id="quiz-third3">Third</option>
                                <option value="fourth" id="quiz-fourth3">Fourth</option>
                            </select>
                        </section>
                        <hr>

                        <!-- Button: Submit Quiz Answers -->
                        <button type="submit" class="submit">Submit my Configuration!</button>
                        <p id="sub-p">View your Grade Below!</p>
                        <!-- Upon Submit, Javascript adds Grades Below -->
                    </form>
                </div>
            </div>
        </div>
    </main>   
<?php
    // Include the footer file
    include("../assets/inc/footer.inc.php");
?>
