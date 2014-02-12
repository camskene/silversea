<?php
/*
Template Name: Expeditions
*/
get_header(); ?>

    <div class="hammer-head has-divider">
        <h1>Expedition Cruise Destinations</h1>
        <p>Every journey is new and unique, every day unlike any that has come before. Itineraries are unstructured, allowing for moment-by-moment flexibility. Stay longer at sites of particular interest, or make slight detours when weather, nature or mere curiosity dictate. </p>
    </div>

    <div id="destinations">
        <?php
            /*
                Every three posts need to be wrapped in a div (.row) so you'll need to do something like this:
            */
            // $i = 1;
            // //added before to ensure it gets opened
            // echo '<div>';
            // if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
            //      // post stuff...

            //      // if multiple of 3 close div and open a new div
            //      if($i % 3 == 0) {echo '</div><div>';}

            // $i++; endwhile; endif;
            // //make sure open div is closed
            // echo '</div>';
        ?>
        <div class="row">
            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Antarctica</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-antartica-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Experience Antarctica with an expedition cruise and discover a frosted wilderness of glistening white as far as the eye can see. Natural ice sculptures like enormous works of avant-garde art. This is the modern explorer's final frontier.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Arctic</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-arctic-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Explore remote regions at the top of the world. Marvel as multitudes of seabirds pattern the sky. Cross the Arctic Circle and toast the midnight sun. Enter the realm of the polar bear.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Central &amp; South America</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-central-south-america-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Venture into lush tropical jungle in search of monkeys and rare bird species. Swim amongst colourful marine life. Participate in the traditions of a native Kuna community.</p>
                    </div>
                </a>
            </section>
        </div>

        <div class="row">
            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Africa</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-africa-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Discover Africa’s Atlantic coast. Spot rare birds and wild monkeys. Visit places infamous for their historic role in the slave trade. Meet the school children of a traditional village.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Europe &amp; British Isles</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-europe-british-isles-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Contemplate mystical standing stones and explore sea caves by Zodiac. Identify diverse species of seabirds and capture the beauty of this fascinating region.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>East Asia &amp; Far East Russia</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-east-asia-russia-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Because of its remoteness and impassable ice floes in winter, the Sea of Okhotsk is one of the world's least-explored and most biologically productive seas.</p>
                    </div>
                </a>
            </section>
        </div>

        <div class="row">
            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Galapagos</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-galapagos-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Silversea's new 100-guest expedition ship, Silver Galapagos, will offer 7-day adventure cruises throughout the remote Galapagos Islands beginning late September 2014.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Micronesia, Melanesia &amp; Polynesia</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-micronesia-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>The islands at the western end of the Pacific are some of the most idyllic on Earth, lush, tropical edens with a dazzling diversity of cultural and natural landscapes. </p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Secrets of Southeast Asia</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-southeast-asia-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>For today's traveller, the great adventure lies East – east to Indonesia, islands of infinite diversity and home to some of the most intrepid travel destinations on the planet.</p>
                    </div>
                </a>
            </section>
        </div>
        <div class="row">
            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Australia &amp; New Zealand</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-us-nz-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Whether you choose the blazing sun and seascapes of The Kimberley or the spectacular icescapes of New Zealand's islands, you'll experience some of the most pristine landscapes this planet has to offer.</p>
                    </div>
                </a>
            </section>
        </div>
    </div>

    <?php get_template_part("partials/big-cta"); ?>

<?php get_footer(); ?>