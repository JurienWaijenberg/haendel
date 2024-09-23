<?php get_header(); ?>

<section class="eenXColumn PaulIntroDropdown max-width">
  <section>
    <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
  </section>
  <section>
    <h2>Georg Friedrich Händel</h2>
    <h3>Componist</h3>
    <p>
        GeeksforGeeks was born out of necessity-
        a need to provide a convenient and
        one-stop educational portal to all the
        students of Computer Science.
        <span id="points">...</span>

        <!-- Define the text that would be 
                hidden by default and only shown 
                when clicked on the button -->
        <span id="moreText"> This necessity was
            as personal to me as it was universal.
            This need combined with my passion for
            teaching resulted in GeeksforGeeks as
            we know today. My message to you, in
            our inaugural edition of Geeks Digest,
            would be that if you are looking for
            a problem to work on, you don’t need
            to look very far for it. All you should
            do is to look around yourself.
        </span>
    </p>
    <button onclick="toggleText()" id="textButton" class="btn_rood">
        Show More
    </button>
  </section>
</section>

    <script>
        function toggleText() {

            // Get all the elements from the page
            let points =
                document.getElementById("points");

            let showMoreText =
                document.getElementById("moreText");

            let buttonText =
                document.getElementById("textButton");

            // If the display property of the dots 
            // to be displayed is already set to 
            // 'none' (that is hidden) then this 
            // section of code triggers
            if (points.style.display === "none") {

                // Hide the text between the span
                // elements
                showMoreText.style.display = "none";

                // Show the dots after the text
                points.style.display = "inline";

                // Change the text on button to 
                // 'Show More'
                buttonText.innerHTML = "Show More";
            }

            // If the hidden portion is revealed,
            // we will change it back to be hidden
            else {

                // Show the text between the
                // span elements
                showMoreText.style.display = "inline";

                // Hide the dots after the text
                points.style.display = "none";

                // Change the text on button
                // to 'Show Less'
                buttonText.innerHTML = "Show Less";
            }
        }
    </script>

<?php get_footer(); ?>