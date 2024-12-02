<?php
    $pageTitle = "Repetition";

    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <section class="paragraph">
                    <h1>The CRAPsite - Repetition</h1>
                    <p id="rep1">Repetition is the element that allows for easy recognition and unity of a site’s elements. It is about creating patterns and rhythms that guide the user through a design while also building recognition and memory. Repetition is about strategic reuse of colors, shapes, textures, and spatial relationships. It helps create visual relationships between elements that may otherwise seem disconnected.</p>
                    <iframe  
                        class="paragraph-vid" 
                        width="560" 
                        height="315" 
                        src="https://www.youtube.com/embed/Ox1iQ05FZ00?start=480&end=850" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2" id="subhead1">Creating Visual Rhythm and Flow</h2>
                    <p>Repetition in design serves as a powerful tool for creating visual rhythm, guiding viewers through content in a natural and engaging way. Much like music uses repeated patterns to create melody, design uses repeated visual elements to create flow. This rhythm can be established through the consistent spacing of elements, the regular use of certain colors, or the systematic application of specific design treatments. When properly executed, this visual rhythm makes content more digestible and memorable, allowing viewers to process information more efficiently while maintaining their engagement.</p>
                    <p id="rep2">The Three Elements of Creating Visual Rhythm:</p>
                    <ul id="unordered1">
                        <li>Regular Reuse of Elements</li>
                        <li>Consistency in Reuse</li>
                        <li>Recognizability of Repeated Elements</li>
                    </ul>
                    <ol id="ordered1">
                        <li>Regular Reuse of Elements</li>
                        <li>Consistency in Reuse</li>
                        <li>Recognizability of Repeated Elements</li>
                    </ol>
                </section>

                <section class="paragraph">
                    <h2 class="interaction-h2" id="subhead2">Enhancing User Experience Through Predictability</h2>
                    <p>In the context of user experience, repetition plays a vital role in creating intuitive and user-friendly designs. By maintaining consistent patterns in navigation, button styles, and interactive elements, designers can create interfaces that users can learn and navigate with confidence. This predictability reduces cognitive load and makes interfaces more accessible to users of all skill levels. The careful application of repetition in interactive design elements ensures that users can focus on content rather than constantly relearning how to interact with different parts of an interface.</p>
                    <p id="rep3">Keep in Mind:</p>
                    <ol id="ordered2">
                        <li>Users expect consistency</li>
                        <li>Good repetition can explain a website's layout all on its own</li>
                        <li>You can lose your user's focus with bad site repetition</li>
                    </ol>
                    <ul id="unordered2">
                        <li>Users expect consistency</li>
                        <li>Good repetition can explain a website's layout all on its own</li>
                        <li>You can lose your user's focus with bad site repetition</li>
                    </ul>
                    <img src="../assets/images/repetition1.jpg" alt="Graphical Example of Repetition" class="paragraph-img">
                </section>

                <!-- Paige, please try and get whatever content you write here split into 3 paragraphs (keep the containers below).
                 Just copy/paste the paragraph section above, same kinda style as the homepage -->
            </div>
            
        </div>

        <div class="interaction-panel">
            <div class="column">
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix the Repetition!</h2>
                    <h3>Use the controls below to fix the repetition of this page!</h3>
                </section>

                <div class="control-section">
                    <p>Ensure font style repetition in the body paragraphs!</p>
                    <section class="change">
                        <section class="paragraph-change">
                            <h4>First Paragraph:</h4>
                            <select class="dropdown" id="text-font1" name="text-font1">
                                <option value="arial" id="arial1">Arial</option>
                                <option value="Georgia" id="georgia1">Georgia</option>
                                <option value="Trebuchet MS" id="trebuchet1">Trebuchet MS</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Second Paragraph:</h4>
                            <select class="dropdown" id="text-font2" name="text-font2">
                                <option value="Georgia" id="georgia2">Georgia</option>
                                <option value="arial" id="arial2">Arial</option>
                                <option value="Trebuchet MS" id="trebuchet2">Trebuchet MS</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Third Paragraph:</h4>
                            <select class="dropdown" id="text-font3" name="text-font3">
                                <option value="Trebuchet MS" id="trebuchet3">Trebuchet MS</option>
                                <option value="arial" id="arial3">Arial</option>
                                <option value="Georgia" id="georgia3">Georgia</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <p>Fix the color repetition for the two subheaders!</p>
                    <section class="change" id="color-change">
                        <section class="paragraph-change">
                            <h4>First Subheader:</h4>
                            <select class="dropdown" id="color1" name="color1">
                                <option value="yellow" id="yellow1">Yellow</option>
                                <option value="black" id="black1">Black</option>
                                <option value="white" id="white1">White</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Second Subheader:</h4>
                            <select class="dropdown" id="color2" name="color2">
                                <option value="black" id="black2">Black</option>
                                <option value="yellow" id="yellow2">Yellow</option>
                                <option value="white" id="white2">White</option>
                            </select>
                        </section>
                    </section>
                    <hr>

                    <p>Fix the repetition for the two lists!</p>
                    <section class="change" id="list-change">
                        <section class="paragraph-change">
                            <h4>First List:</h4>
                            <select class="dropdown" id="list1" name="list1">
                                <option value="ul" id="ul1">Unordered</option>
                                <option value="ol" id="ol1">Ordered</option>
                            </select>
                        </section>

                        <section class="paragraph-change">
                            <h4>Second List:</h4>
                            <select class="dropdown" id="list2" name="list2">
                                <option value="ol" id="ol2">Ordered</option>
                                <option value="ul" id="ul1">Undordered</option>
                            </select>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </main>
<?php
    include("../assets/inc/footer.inc.php");
?>