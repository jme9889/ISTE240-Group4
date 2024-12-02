<!--
Date: 12/2/24
ISTE-240 Group 4: Johnathan Eschbacher, Paige Bohman, Garrett Recker, Jonathan Unger, Katiya Zawrotny
-->
<?php
    // Set the title for the page to be displayed in the browser tab and header
    $pageTitle = "Home Page";

    // Include the header file
    include("./assets/inc/header.inc.php");
?>
    <main>
        <!-- Hero Image Section -->
        <div class="hero">
            <!-- Display the main heading for the homepage -->
            <h1>Welcome to CRAP</h1>
        </div>

        <!-- Two-Column Section -->
        <div class="two-column">
            <!-- Left Column: Image -->
            <div class="column">
            <!-- Add an image to visually represent CRAP design principles -->
                <img src="assets/images/home1.jpg" alt="Image that shows the 4 parts of CRAP- Contrast, Repition, Allignment, Position." id="side-img">
            </div>
            
            <!-- Right Column: Text Content -->
            <div class="column">
                <!-- Section: Introduction -->
                <section class="paragraph">
                    <h1>Welcome to the CRAPsite</h1>
                    <p> This website has been created to teach users about the CRAP principles as well as 
                        guide them through using these principles in real time. We have implemented a quiz 
                        portion so users could test their knowledge and use those results to know which factors 
                        they should look back at. We have added images as well as videos to tailor to different 
                        kinds of learning styles.   </p>
                </section>

                <!-- An overview of CRAP, what it is, and a basic mention of each principle. -->
                <section class="paragraph">
                    <h2>What is CRAP?</h2>

                    <p>C.R.A.P. stands for Contrast, Repetition, Alignment, and Proximity—four key principles of design
                        outlined by Robin Williams.
                        When designing any visual material, such as a flyer, business card, or newsletter, it's
                        important to
                        consider these principles
                        to create a balanced and effective layout.
                    </p>

                </section>

                <!-- Individual CRAP Principle Descriptions -->
                <section class="paragraph">
                    <h3>Contrast</h3>
                    <p>Contrast forms the foundation of effective design. By varying elements like color, size,
                        typography,
                        and other visual
                        aspects, you create emphasis that directs the viewer's attention and enhances their
                        understanding of
                        the content.</p>
                </section>

                <section class="paragraph">
                    <h3>Repetition</h3>
                    <p>Repetition involves deliberately reusing certain design elements to establish consistency, unity,
                        and
                        coherence. This
                        technique helps users become familiar with your design and strengthens your brand identity. You
                        can
                        apply repetition
                        to various components such as colors, fonts, shapes, and patterns.</p>
                </section>
                <section class="paragraph">
                    <h3>Alignment</h3>
                    <p>Alignment refers to the arrangement of elements in your design so that they line up in a visually
                        organized and logical
                        manner. Proper alignment helps users follow the flow of information, creating a clean and
                        structured
                        look that is easy
                        to navigate.</p>
                </section>

                <section class="paragraph">
                    <h3>Proximity</h3>
                    <p>Proximity involves positioning elements in your design to highlight their relationships and
                        create a
                        sense of order. By
                        grouping related items together and spacing out those that are unrelated, you help users
                        navigate
                        the design more intuitively
                        and locate the information they need with ease.
                    </p>
                </section>
                
                <!-- Section: Website Features -->
                <section class="paragraph">
                    <h2>Using this Website</h2>
                    <p>Each page offers an explanation of a specific design principle, along with interactive features
                        that
                        let you adjust the style
                        based on that principle. The quiz page serves as a way to test your understanding by allowing
                        you to
                        modify these design elements,
                        and then it evaluates how effectively you've applied the principles.</p>
                </section>

            </div>

        </div>
        <!-- Image at the Bottom showing CRAP Principals -->
        <img src="assets/images/home2.jpg"
            alt="Image that shows the 4 CRAP principles with different color and placement of circles." id="bottom-img">
    </main>
<?php
    // Include the footer file
    include("./assets/inc/footer.inc.php");
?>
