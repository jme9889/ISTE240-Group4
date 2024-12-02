<?php
    // Set the title for the page to be displayed in the browser tab and header
    $pageTitle = "Proximity";

    // Include the header file
    include("../assets/inc/header.inc.php");
?>
    <main>
        <div class="single-column">
            <div class="column">
                <!-- Section: Introduction to Proximity -->
                <section class="paragraph">
                    <h1>The CRAPsite - Proximity</h1>
                    <p>Proximity works hand in hand with visual hierarchy to guide users through content in a predetermined order. 
                        By varying the distance between elements, designers can create primary, secondary, and tertiary levels of 
                        information. When considering the Law of Proximity, larger spaces between groups signal major transitions 
                        in content, while smaller spaces indicate closer relationships between elements. This careful manipulation 
                        of space helps users understand not just what elements are related, but also their relative importance 
                        within the overall design.</p>
                    <!-- Image to explain/show Repetition -->
                    <img src="../assets/images/proximity1.jpg" alt="1" class="prox-graphic" id="prox1-1">
                    <img src="../assets/images/proximity2.png" alt="2" class="prox-graphic" id="prox2-1">
                    <img src="../assets/images/proximity3.png" alt="3" class="prox-graphic" id="prox3-1">
                    <img src="../assets/images/proximity4.jpg" alt="4" class="prox-graphic" id="prox4-1">
                </section>
                
                <!-- Section: Spatial Relationships and Information Architecture -->
                <section class="paragraph">
                    <h2 class="interaction-h2">Spatial Relationships and Information Architecture</h2>
                    <p>The strategic use of space between elements forms the foundation of effective information architecture. 
                        When elements are positioned closer together, they form a cohesive unit that stands distinct from 
                        surrounding content. This visual grouping helps users understand the relationship between different 
                        pieces of information without the need for additional explanatory elements. The space between these 
                        groups becomes as important as the groups themselves, creating clear boundaries that help users 
                        navigate through complex layouts effortlessly. The graphic below displays how this space between two
                        circles of circles helps differentiate between the two groups.</p>
                    <!-- Image to explain/show Repetition -->
                    <img src="../assets/images/proximity1.jpg" alt="1" class="prox-graphic" id="prox1-2">
                    <img src="../assets/images/proximity2.png" alt="2" class="prox-graphic" id="prox2-2">
                    <img src="../assets/images/proximity3.png" alt="3" class="prox-graphic" id="prox3-2">
                    <img src="../assets/images/proximity4.jpg" alt="4" class="prox-graphic" id="prox4-2">
                </section>

                <!-- Section: Digital Adaptations of Proximity -->
                <section class="paragraph">
                    <h2 class="interaction-h2">Digital Adaptations of Proximity</h2>
                    <p>In digital design, proximity takes on additional complexity due to responsive layouts and varying screen 
                        sizes. According to the Gestalt Rule of Proximity, elements that are grouped together naturally appear 
                        to be more related than those that are further apart. Designers must consider how spatial relationships 
                        will maintain their integrity across different devices while still effectively communicating relationships 
                        between elements. This challenge requires a deep understanding of how proximity can be preserved through 
                        relative spacing and careful consideration of how elements reflow on different screen sizes while 
                        maintaining their intended groupings and hierarchical relationships.</p>
                    <!-- Image to explain/show Repetition -->
                    <img src="../assets/images/proximity1.jpg" alt="1" class="prox-graphic" id="prox1-3">
                    <img src="../assets/images/proximity2.png" alt="2" class="prox-graphic" id="prox2-3">
                    <img src="../assets/images/proximity3.png" alt="3" class="prox-graphic" id="prox3-3">
                    <img src="../assets/images/proximity4.jpg" alt="4" class="prox-graphic" id="prox4-3">
                </section>

                <!-- Section: Effectively Utilizing Proximity -->
                <section class="paragraph">
                    <h2 class="interaction-h2">Effectively Utilizing Proximity</h2>
                    <p>The effectiveness of proximity lies in its ability to create order without the need for explicit visual barriers 
                        or containers. The image below can be seen as a disorderly mess of different shapes, but had the triangles, 
                        circles, and squares been near each other respectively, it would feel more contained and controlled. By carefully 
                        controlling the space between elements, designers can create distinct groupings that help users navigate through 
                        information hierarchies naturally and intuitively. This principle becomes particularly crucial in an era of 
                        information overload, where users need to quickly understand and process large amounts of visual data.</p>
                    <!-- Image to explain/show Repetition -->
                    <img src="../assets/images/proximity1.jpg" alt="1" class="prox-graphic" id="prox1-4">
                    <img src="../assets/images/proximity2.png" alt="2" class="prox-graphic" id="prox2-4">
                    <img src="../assets/images/proximity3.png" alt="3" class="prox-graphic" id="prox3-4">
                    <img src="../assets/images/proximity4.jpg" alt="4" class="prox-graphic" id="prox4-4">
                </section>
            </div>
        </div>
        
        <!-- Interactive Panel to Adjust Proximity -->
        <div class="interaction-panel">
            <div class="column">
                <section class="paragraph">
                    <h2 class="interaction-h2">Fix the Proximity!</h2>
                    <h3>Use the controls below to fix the proximity of this page!</h3>
                </section>

                <!-- Image Location Controls -->
                <div class="control-section">
                    <form action="index.php" method="post">
                        <p>Choose one spot for each image (no repeats) for the best proximity!</p>
                        <img src="../assets/images/proximity1.jpg" alt="1" class="mini-prox-graphic">

                        <!-- Dropdown for changing location of image 1 -->
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
    
                        <img src="../assets/images/proximity2.png" alt="2" class="mini-prox-graphic">
                        <!-- Dropdown for changing location of image 2 -->
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
    
                        <img src="../assets/images/proximity3.png" alt="3" class="mini-prox-graphic">
                        <!-- Dropdown for changing location of image 3 -->
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
    
                        <img src="../assets/images/proximity4.jpg" alt="4" class="mini-prox-graphic">
                        <!-- Dropdown for changing location of image 4 -->
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
    // Include the footer file
    include("../assets/inc/footer.inc.php");
?>
