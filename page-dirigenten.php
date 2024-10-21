<?php get_header(); ?>
<section class="atf bannerImg">
    <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
    <h1>Dirigenten</h1>
</section>

<section class="eenXColumn PaulIntroDropdown max-width">
    <section>
        <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
    </section>

    <section>
        <h2 class="bruinKleur">Paul Valk</h2>
        <h3>Chef-dirigent van de Nederlandse Händelvereniging</h3>
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
        <button onclick="toggleText()" id="textButton" class="btn_bruin">
            Show More
        </button>
    </section>
</section>

<section class="quoteDirigent max-width">
    <h3><i class="fa-solid fa-quote-left"></i></h3>
    <h3>
        Vooral wil ik verdieping en inspiratie bieden
        aan de leden, zodat we kunnen doen wat we het lieftse doen: samen zingen.
    </h3>
</section>

<section class="banner">
    <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
</section>

<section class="gastdirigenten max-width">
    <h2>GASTDIRIGENTEN</h2>
    <p>Bij onze concerten van 2017 tot heden hebben wij met diverse dirigenten samengewerkt. Vanaf 1 augustus 2021 is
        Paul Valk onze vaste dirigent geworden, maar wij zullen ook in de toekomst blijven samenwerken met
        gastdirigenten.
        Hieronder een overzicht van dirigenten (op alfabetische volgorde achternaam) waarmee wij hebben samen gewerkt.
    </p>

    <ul>
        <li>
            <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
            <h3>LOUIS BUSKENS</h3>
            <p>
                Louis Buskens kreeg zijn opleiding aan het Tilburgs Conservatorium waar hij naast koordirectie en
                schoolmuziek ook blokfluit studeerde.</p>
            <a href="#" class="btn_rood">Lees verder</a>
        </li>
        <li>
            <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
            <h3>LOUIS BUSKENS</h3>
            <p>Louis Buskens kreeg zijn opleiding aan het Tilburgs Conservatorium waar hij naast koordirectie en
                schoolmuziek ook blokfluit studeerde. </p>
            <a href="#" class="btn_rood">Lees verder</a>
        </li>
        <li>
            <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
            <h3>LOUIS BUSKENS</h3>
            <p>Louis Buskens kreeg zijn opleiding aan het Tilburgs Conservatorium waar hij naast koordirectie en
                schoolmuziek ook blokfluit studeerde. </p>
            <a href="#" class="btn_rood">Lees verder</a>
        </li>
        <li>
            <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
            <h3>LOUIS BUSKENS</h3>
            <p>Louis Buskens kreeg zijn opleiding aan het Tilburgs Conservatorium waar hij naast koordirectie en
                schoolmuziek ook blokfluit studeerde. </p>
            <a href="#" class="btn_rood">Lees verder</a>
        </li>
        <li>
            <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
            <h3>LOUIS BUSKENS</h3>
            <p>Louis Buskens kreeg zijn opleiding aan het Tilburgs Conservatorium waar hij naast koordirectie en
                schoolmuziek ook blokfluit studeerde. </p>
            <a href="#" class="btn_rood">Lees verder</a>
        </li>
        <li>
            <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
            <h3>LOUIS BUSKENS</h3>
            <p>Louis Buskens kreeg zijn opleiding aan het Tilburgs Conservatorium waar hij naast koordirectie en
                schoolmuziek ook blokfluit studeerde. </p>
            <a href="#" class="btn_rood">Lees verder</a>
        </li>


    </ul>
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