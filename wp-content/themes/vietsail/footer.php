<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage viet-sail
 * @since viet-sail 1.0
 */

?>
			<!--Footer-->
			<section id="section-map">
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-12 pt-5 pb-5">
                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.592361026011!2d103.85749648185823!3d10.374441990919479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31081f011e0066c1%3A0x55725ddc2d731b15!2zUmVzb3J0IEdpw7MgQmnhu4NuIFBow7ogUXXDtGM!5e0!3m2!1sfr!2s!4v1635102150070!5m2!1sfr!2s"
                        allowfullscreen="" loading="lazy" allowfullscreen="" loading="lazy" style="height: 40vh;">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

     <!-- Modal -->
     <section id="section-modal">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Dear Friend's</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hi everyone !
                        I'm Pierre, from France, and I started that sailing adventure in Phu Quoc island 4 years ago already.
                        Sailing is the passion of my parents, so I learned it when I was very young and I spent all my holidays on sailing
                        boats. But it is only recently that I work in the Sailing industry. Before it was just my passion and I worked
                        around 10 years in Paris as a construction manager. Five years ago I passed my instructor graduation and I teached
                        sailing for 2 years in France to get experience in a major sailing school.
                        The question that most of my guests ask me is :"Why did you choose VIET NAM ?".
                        My dream was to develop my small sailing business on a paradise island somewhere... and I met one guy half-French
                        half-Vietnamese, in the sailing school, who told me that sailing is not developed yet in VIET NAM and there are good
                        opportunities there ! As a coincidence, at the same time, one of my friends married a Vietnamese girl and he invited
                        me to the wedding party in Ha Noi... So I came for the first time in VIET NAM 5 years ago for the wedding party, and
                        to check if it was possible to do business here. I travelled all around the country, I felt really good, and met
                        many friendly people. It took 3 months to travel from the North to the South, and when I saw Phu Quoc island, I
                        definitely thought "that's THE PLACE TO BE" ! Beautiful beaches, many islands around with nice corals, many tourists
                        come, the wind is not too strong, so it's good for beginners, and no Typhoon during the rainy season (safer). For
                        all those reasons I chose Phu Quoc island. I planned first to buy some boats in VIET NAM, but it was impossible to
                        find, so I decided to import all from France...
                        After 4 years in Phu Quoc, I know the island pretty well from the sea. I try my best to do something good for the
                        people and good for the environment. We plan to work with local schools and give opportunities to the locals to
                        learn sailing & practice sailing for free. Transmite your values, your passion, your knowledge is definitely more
                        important for me than the money. I hope many Vietnamese people will follow that way to develop that activity in Phu
                        Quoc and all around VIET NAM.                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<?php wp_footer(); ?>

	</body>
</html>
