<?php
/*
Template Name: Destinations
*/
get_header(); ?>

    <div class="hammer-head has-divider">
        <h1>Luxury Destinations</h1>
        <p class="sub-heading">Eight Ships – Seven Continents – Infinite Possibilities</p>
    </div>

    <div id="destinations">
        <?php
            /*
                Every third post will be wrapped in a div (.row) so you'll need to do something like this:
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
                    <h3>Mediterranean</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-mediterranean-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Experience Silversea's most popular destination, from the Riviera's unabashed joie de vivre and the sparkling blue Aegean to sun-drenched Spain and the legends of Istanbul.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Northern Europe & Baltic</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-europe-baltic-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>In lands of misty legends, become hopelessly infatuated with soaring cathedrals, impressive museums, scenic fjords and great capitals.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Africa and Middle East</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-africa-middle-east-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>India's streets swirling with vivid saris. Arabian souks rich with fragrant spices. Golden desertscapes and the wondrous secrets of the pyramids.</p>
                    </div>
                </a>
            </section>
        </div>

        <div class="row">
            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Australasia</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-australia-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Silversea's South Pacific cruises sweep across two hemispheres, two continents and a breathtaking succession of dazzling sights.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Central America & Caribbean</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-central-america-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Dive beneath sparkling azure waters or relax on a golden beach. Explore ancient Mayan ruins and the engineering marvel of the Panama Canal.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>South America</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-south-america-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Discover emerald rainforests, exuberant cities and sun-lit glaciers. Feel the passion of Rio and Buenos Aires. Marvel at the majesty of the Chilean Fjords.</p>
                    </div>
                </a>
            </section>
        </div>

        <div class="row">
            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Alaska</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-alaska-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Witness the beauty of snow-capped volcanoes, ice-blue glaciers calving like thunderclaps, brisk salmon-filled streams and pine-scented bays where otters frolic.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Canada & New England</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-canada-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Discover coastlines blanketed in colours of crimson and gold. Wander the cobblestone streets of historic villages. Photograph solitary lighthouses watching over rocky coasts.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Transoceanic</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-transoceanic-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Relish the pace of a classic ocean voyage. Wine tastings, cooking demonstrations or simply lounging poolside. Favourite ports and leisurely days that recall the golden age of travel.</p>
                    </div>
                </a>
            </section>
        </div>

        <div class="row">
            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Expedition Cruising</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-expedition-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Destinations include the frozen polar regions of Antarctica and the Arctic, Britain’s remote northern isles, the western coast of Africa and the tropical beauty of Latin America.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Asia</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-canada-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Cruises to Asia journey between ancient glories and modern-day miracles from Beijing with its Great Wall and Forbidden City to booming Shanghai … from Tokyo's flashing neon lights to Nagasaki's beautiful bay … from high-tech Taiwan to Kyoto, cultural fountainhead of Classical Japan.</p>
                    </div>
                </a>
            </section>

            <section>
                <a href="/destinations/destinations-single/">
                    <h3>Grand Voyages</h3>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-transoceanic-380x140.jpg" alt="">
                    </figure>
                    <div class="description">
                        <p>Intimate Ships. Grand Memories. Extended sailings ideal for the traveller who relishes a more leisurely pace. Itineraries visit must-see cities and lesser-known destinations and only rarely repeat a port.</p>
                    </div>
                </a>
            </section>
        </div>
    </div>

    <?php get_template_part("partials/big-cta"); ?>

<?php get_footer(); ?>