<?php get_header(); ?>
<section class="atf bannerImg">
    <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="#">

    <section class="TitelBannerConcert">
        <div class="bannerConcert">
            <h1>Concert</h1>
            <a href="#koopKaartenScroll">Bekijk kaarten<i class="fa-solid fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- swiperReviewsVacatures JS -->
    <script src="swiperReviews-vacatures-bundle.min.js"></script>

    <section class="IntroInfoConcert max-width">
        <section class="intro">
            <p>In december 2024 vieren wij de 150ste uitvoering van Messiah door de Nederlandse Händelvereniging. Een
                prachtige mijlpaal in de rijke geschiedenis van ons koor, dat bij de oprichting in 1946 al een eerste
                Messiah uitvoerde in het Concertgebouw in Amsterdam.<br><br>
                Händels ongeëvenaard Engelstalig meesterwerk wint de laatste jaren overal aan populariteit, met
                tientallen professionele en amateuruitvoeringen, gezellige ‘Scratch’ Messiahs en indrukwekkende
                ‘flashmobs’ van het bekende Hallelujah. Toch kan maar één koor ‘de mooiste Messiah van Nederland’
                brengen, en dat is volgens onze duizenden trouwe concertgangers de Nederlandse Händelvereniging. Mede
                dankzij de inzet van jonge gastdirigenten zoals Rick Muselaers blijft deze hemelse muziek ons telkens
                weer verrassen en verblijden. In december zingen we Messiah op maar liefst 3 locaties. Vier met ons mee!
                <br><br>
                Georg Friedrich Händel (1685-1759) componeerde meer dan 600 werken, waaronder veel dramatische opera’s,
                oratoria en cantates. Messiah werd bij de première aangekondigd als ‘Grand Musical Entertainment’.
                Binnen een en hetzelfde koordeel komen frequent uiteenlopende stijlen en technieken aan bod.
                Contrapuntische verwerkingen van thema’s gaan hand in hand met akkoordische declamaties van monumentale
                allure.
            </p>
        </section>

        <section class="ConcertInfo">
            <dl>
                <dt>Locatie</dt>
                <dd>
                    <ul>
                        <li>Grote Kerk Gorinchem</li>
                        <li>Concertgebouw Amsterdam</li>
                    </ul>
                </dd>

                <dt>Datum</dt>
                <dd>Wo 11 december - za 21 december 2024</dd>

                <dt>Prijs</dt>
                <dd>€ 25,- per persoon</dd>

                <dt>Programma</dt>
                <dd>
                    <ul>
                        <li>Johann Sebastian Bach - Magnificat</li>
                        <li>Antonio Vivaldi - Gloria</li>
                    </ul>
                </dd>
            </dl>

            <section>
                <h4>Uitvoerenden</h4>

                <ul class="uitvoerenden">
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="http://haendel.local/wp-content/uploads/2024/09/handel-stokje-kopie.jpg" alt="">
                            <div> <span>Jaennette van Schaik</span> <br>sopraan</div>
                        </a>
                    </li>

                </ul>
                <button class="show-more btn_border">Toon alle</button>
            </section>
        </section>

        <script>
            const list = document.querySelector('.uitvoerenden');
            const showMoreButton = document.querySelector('.show-more');

            function updateListHeight() {
                if (window.innerWidth > 772) {
                    list.style.maxHeight = 'fit-content'; // Reset naar volledige weergave op desktop
                    showMoreButton.style.display = 'none'; // Verberg de knop op desktop
                } else {
                    list.style.maxHeight = '19.5rem'; // Zorg ervoor dat het op mobiel is beperkt
                    showMoreButton.style.display = 'block'; // Zorg dat de knop zichtbaar is op mobiel

                    // Reset de knoptekst als we naar mobiel gaan
                    showMoreButton.textContent = 'Toon alle'; // Reset naar "Toon alle"
                }
            }

            // Actie voor de "Toon alle" knop
            showMoreButton.addEventListener('click', function () {
                if (list.style.maxHeight === '1000rem') {
                    list.style.maxHeight = '19.5rem'; // Beperk opnieuw tot 3 items
                    this.textContent = 'Toon alle'; // Verander de tekst terug
                } else {
                    list.style.maxHeight = '1000rem'; // Toon alle items
                    this.textContent = 'Toon minder'; // Verander de knoptekst
                }
            });

            // Check schermformaat wanneer je het venster aanpast
            window.addEventListener('resize', updateListHeight);

            // Call it initially to set correct state based on the starting screen size
            updateListHeight();
        </script>








    </section>

    <section class="max-width">
        <section id="koopKaartenScroll" class="koopKaarten">
            <h2>Koop kaarten</h2>

            <article>
                <ul>
                    <li>Woensdag, 11 december 2024</li>
                    <li>19:30 uur</li>
                    <li>Grote Kerk Gorinchem</li>
                    <li><a href="#" class="btn_border"><p>Bestel kaarten</p></a></li>
                </ul>
            </article>
            <article>
            <ul>
                    <li>Woensdag, 11 december 2024</li>
                    <li>19:30 uur</li>
                    <li>Grote Kerk Gorinchem</li>
                    <li><a href="#" class="btn_border"><p>Bestel kaarten</p></a></li>
                </ul>
            </article>
            <article>
            <ul>
                    <li>Woensdag, 11 december 2024</li>
                    <li>19:30 uur</li>
                    <li>Grote Kerk Gorinchem</li>
                    <li><a href="#" class="btn_border"><p>Bestel kaarten</p></a></li>
                </ul>
            </article>
        </section>
    </section>


    <section class="swiperReview myswiperReview max-width swiperReview-css-mode">
        <h2>Dit zeggen onze klanten</h2>
        <ul class="swiperReview-wrapper">

            <li class="swiperReview-slide">
                <div>
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Ik was helemaal betoverd door de uitvoering. De energie en de emotie die overgebracht werden,
                        waren gewoonweg fenomenaal. Dit concert is een echte aanrader voor iedere muziekliefhebber. De
                        setting was mooi en de akoestiek uitstekend, waardoor elke nuance van de muziek goed tot zijn
                        recht kwam.
                        <br>
                        <span> – Margot van Dam</span>
                    </p>
                </div>
            </li>

            <li class="swiperReview-slide">
                <div>
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Het publiek werd meegenomen op een muzikale reis vol hoogtepunten. Dit was zonder twijfel een
                        van de beste concerten die ik in lange tijd heb bijgewoond.<br>
                        <span>- Isabella Rossi</span>
                    </p>
                </div>
            </li>
            <li class="swiperReview-slide">
                <div>
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Ik was helemaal betoverd door de uitvoering. De energie en de emotie die overgebracht werden,
                        waren gewoonweg fenomenaal. Dit concert is een echte aanrader voor iedere muziekliefhebber. De
                        setting was mooi en de akoestiek uitstekend, waardoor elke nuance van de muziek goed tot zijn
                        recht kwam.
                        <br>
                        <span> – Margot van Dam</span>
                    </p>
                </div>
            </li>

            <li class="swiperReview-slide">
                <div>
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Het publiek werd meegenomen op een muzikale reis vol hoogtepunten. Dit was zonder twijfel een
                        van de beste concerten die ik in lange tijd heb bijgewoond.<br>
                        <span>- Isabella Rossi</span>
                    </p>
                </div>
            </li>
            <li class="swiperReview-slide">
                <div>
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Ik was helemaal betoverd door de uitvoering. De energie en de emotie die overgebracht werden,
                        waren gewoonweg fenomenaal. Dit concert is een echte aanrader voor iedere muziekliefhebber. De
                        setting was mooi en de akoestiek uitstekend, waardoor elke nuance van de muziek goed tot zijn
                        recht kwam.
                        <br>
                        <span> – Margot van Dam</span>
                    </p>
                </div>
            </li>

            <li class="swiperReview-slide">
                <div>
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Het publiek werd meegenomen op een muzikale reis vol hoogtepunten. Dit was zonder twijfel een
                        van de beste concerten die ik in lange tijd heb bijgewoond.<br>
                        <span>- Isabella Rossi</span>
                    </p>
                </div>
            </li>



        </ul>
        <div class="swiperReview-button-next">>></div>
        <div class="swiperReview-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="swiperReview-pagination"></div>
    </section>

    <section class="ContactVraag max-width">
        <h2 class="subheadingXheading">
            <span>Contact</span> <br>
            heb je een vraag of wil je meer informatie?
        </h2>
        <a href="#" class="btn_rood">Neem contact op</a>
    </section>





    <?php get_footer(); ?>