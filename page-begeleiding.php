<?php get_header(); ?>

<section class="atf bannerImg">
    <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
    <h1>Begeleiding</h1>
</section>


<section class="eenXColumn PaulIntroDropdown max-width">
    <section>
        <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
    </section>

    <section>
        <h2>Wybe Kooijmans</h2>
        <h3>Repetitor</h3>
        <p>
            GeeksforGeeks was born out of necessity-
            a need to provide a convenient and
            one-stop educational portal to all the
            students of Computer Science.
            <span class="points">...</span>

            <span class="moreText" style="display: none;"> This necessity was
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
        <button onclick="toggleText(this)" class="textButton btn_rood">
            Show More
        </button>
    </section>
</section>

<section class="banner">
    <img src="http://haendel.local/wp-content/uploads/2024/09/kerk.jpg" alt="">
</section>


<section class="overzichtDirigenten max-width">
    <h2>Holland Symfonie Orkest </h2>
    <div>
        <p>Het Holland Symfonie Orkest is een gerenommeerd orkest in Nederland dat bekend staat om zijn veelzijdige en
            levendige uitvoeringen. Met een rijke geschiedenis van meer dan een eeuw, biedt het orkest een breed
            repertoire, variërend van klassieke meesterwerken tot hedendaagse composities. Het Holland Symfonie Orkest
            speelt regelmatig op prestigieuze podia en werkt samen met getalenteerde solisten en dirigenten, waardoor
            het een belangrijke speler is in het Nederlandse muzikale landschap. Het orkest streeft ernaar om de
            schoonheid en emotie van symfonische muziek te delen met een breed publiek.</p>
        <p>Naast zijn indrukwekkende repertoire, legt het Holland Symfonie Orkest ook een sterke nadruk op educatie en
            community engagement. Het orkest organiseert regelmatig workshops, masterclasses en educatieve concerten
            voor zowel jongeren als volwassenen. Deze initiatieven hebben als doel om de liefde voor muziek te
            bevorderen en nieuwe generaties te inspireren. Door deze betrokkenheid bij de gemeenschap en het onderwijs
            draagt het Holland Symfonie Orkest bij aan de ontwikkeling van een levendige en diverse muzikale cultuur in
            Nederland.</p>
    </div>
    <a href="#" class="btn_rood btnRoodLeft">Ontdek meer</a>
</section>

<section class="eenXColumn PaulIntroDropdown max-width space">
    <section>
        <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
    </section>

    <section>
        <h2>Wybe Kooijmans</h2>
        <h3>Repetitor</h3>
        <p>
            GeeksforGeeks was born out of necessity-
            a need to provide a convenient and
            one-stop educational portal to all the
            students of Computer Science.
            <span class="points">...</span>

            <span class="moreText" style="display: none;"> This necessity was
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
        <button onclick="toggleText(this)" class="textButton btn_rood">
            Show More
        </button>
    </section>
</section>


<!-- LET OP: deze script is anders dan de script op de andere pagina's (dirigent en gastdirigenten: omdat hier 2 dropdowns werken met class ipv id) -->
<!-- LET OP: deze script is anders dan de script op de andere pagina's (dirigent en gastdirigenten: omdat hier 2 dropdowns werken met class ipv id) -->
<!-- LET OP: deze script is anders dan de script op de andere pagina's (dirigent en gastdirigenten: omdat hier 2 dropdowns werken met class ipv id) -->
<script>
    function toggleText(button) {
        // Find the closest section to the clicked button
        let section = button.closest('section');

        // Find the points and moreText within the section
        let points = section.querySelector('.points');
        let showMoreText = section.querySelector('.moreText');

        // Toggle the visibility
        if (points.style.display === "none") {
            showMoreText.style.display = "none";
            points.style.display = "inline";
            button.innerHTML = "Show More";
        } else {
            showMoreText.style.display = "inline";
            points.style.display = "none";
            button.innerHTML = "Show Less";
        }
    }
</script>







<?php get_footer(); ?>