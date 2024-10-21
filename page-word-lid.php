<?php get_header(); ?>
<section class="atf bannerImg">
  <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
  <h1>Word lid</h1>
</section>

<section class="eenXColumn reverse max-width">
  <section>
    <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
  </section>
  <section>
    <h2 class="bruinKleur">kom je ook bij ons zingen?</h2>
    <p>Wil je grote koorwerken zingen, met goede orkesten en in grote concertzalen? En vind je het een uitdaging om ook
      minder bekende muziek te zingen? Kom dan kennismaken op een van onze repetities. De koorrepetities worden gehouden
      in de Wilhelminakerk in Bussum (Wilhelminaplantsoen 14), op donderdagavond van 19.45 tot 22.15 uur.</p>
  </section>
</section>

<section class="eenXColumn max-width">
  <section>
    <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
  </section>
  <section>
    <h2 class="bruinKleur">laat ons weten dat je komt</h2>
    <p>Je kunt je aanmelden voor de kennismaking door contact met ons op te nemen via telefoon of e-mail.
      Als de kennismaking bevalt kun je direct komen meezingen op enkele repetities. Daarna maken we een afspraak voor
      een eenvoudige stemtest bij de dirigent. Bij de kennismaking word je ontvangen door onze gastvrouw en krijg je
      meer informatie over het lidmaatschap van ons koor.</p>
    <div class="doubleBtn"> <a href="#" class="btn_rood">Telefoonnummer</a> <a href="#"
        class="btn_border reverseBorder">E-mail</a></div>
  </section>
</section>

<section class="bg_transparant_lichtgroen ">
  <section class="eenXColumn reverse max-width space">
    <section>
      <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">
    </section>
    <section>
      <h2 class="subheadingColumn">
        <span>Lid aan het woord</span> <br>
        Een Kijkje Achter de Schermen
      </h2>
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

</section>






<section class="ContactVraag max-width">
  <h2 class="subheadingXheading">
    <span>Contact</span> <br>
    heb je een vraag of wil
    je meer informatie?
  </h2>
  <a href="#" class="btn_rood">Neem contact op</a>
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