<?php
    $assetPath = "";
    if (strpos($_SERVER['REQUEST_URI'], '/alignment/') !== false || strpos($_SERVER['REQUEST_URI'], '/contrast/') !== false ||
        strpos($_SERVER['REQUEST_URI'], '/proximity/') !== false || strpos($_SERVER['REQUEST_URI'], '/quiz/') !== false ||
        strpos($_SERVER['REQUEST_URI'], '/references/') !== false || strpos($_SERVER['REQUEST_URI'], '/repetition/') !== false) {
        $assetPath = "../";
    }
?>

<footer>
        <a href="<?php echo $assetPath; ?>references/index.php" id="ref-nav">
            <h2>References</h2>
        </a>
        <h3 id="ref-names">
            &copy Johnathan Eschbacher, Paige Bohman, Garrett Recker, Jonathan Unger, Katiya Zawrotny
        </h3>
    </footer>
    <script src="assets/scripts.js"></script>
</body>

</html>