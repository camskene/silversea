<?php
/**
 * The Template for displaying the home page.
 */
?>

<?php include "header.php"; ?>
        <div id="hero" class="carousel">
            <!-- <div class="slides">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/hero-01.png" alt="">
            </div>
            <a class="ctrl slide-next icon-chevron-right">Next Slide</a>
            <a class="ctrl slide-previous icon-chevron-left">Previous Slide</a> -->
            <?php echo do_shortcode('[layerslider id="1"]') ;?>
        </div><!-- #hero -->

        <div id="plan-voyage">
            <form action="">
                <div>
                    <p>Plan Your Voyage</p>
                </div>
                <div>
                    <select name="" id="">
                        <option value="" selected>Destination</option>
                        <option value="">Africa</option>
                        <option value="">Africa &map; Middle East</option>
                        <option value="">Alaska</option>
                        <option value="">Antartica</option>
                        <option value="">Artic</option>
                    </select>
                </div>
                <div>
                    <select name="" id="">
                        <option value="" selected>Month</option>
                        <option value="">January 2014</option>
                        <option value="">February 2014</option>
                        <option value="">March 2014</option>
                        <option value="">April 2014</option>
                        <option value="">May 2014</option>
                        <option value="">June 2014</option>
                        <option value="">July 2014</option>
                        <option value="">August 2014</option>
                        <option value="">September 2014</option>
                        <option value="">October 2014</option>
                    </select>
                </div>
                <div>
                    <select name="" id="">
                    <option selected="selected" value="">Ship</option>
                    <option value="">Silver Galapagos</option>
                    <option value="">Silver Whisper</option>
                    <option value="">Silver Wind</option>
                    <option value="">Silver Spirit</option>
                    <option value="">Silver Explorer </option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Search">
                </div>
            </form>
        </div><!-- #plan-voyage -->

        <?php get_template_part("partials/big-cta"); ?>

        <div id="refer">
            <ul>
                <li>
                    <h3 class="icon-globe">Destinations</h3>
                    <figure><a href="/destinations/"><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/egypt-360x140.png" alt=""></a></figure>
                    <p>Aboard Silversea's small ships and intimate luxury cruises you can discover the world's most intriguing ports while travelling in extraordinary style. Sail directly into the heart of St Petersburg, down the Amazon River, under London's Tower Bridge and throughout Norway's breathtaking fjords.</p>
                    <p><a class="more" href="/destinations/">Read more</a></p>
                </li>
                <li>
                    <h3 class="icon-ship">Ships</h3>
                    <figure><a href="/ships/"><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/luxury-ship-360x140.png" alt=""></a></figure>
                    <p>While most cruise ships keep getting bigger and bigger, there is something uniquely satisfying about Silversea's luxurious small ship cruises. The intimacy. The close-knit camaraderie. The excitement of exploring secluded, rarely seen harbours where true adventure lies.</p>
                    <p><a class="more" href="/ships/">Read more</a></p>
                </li>
                <li>
                    <h3 class="icon-compass">Life Onboard</h3>
                    <figure><a href="/life-onboard/"><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/couple-360x140.png" alt=""></a></figure>
                    <p>Step on board a Silversea luxury cruise ship and sense how time pauses. Now imagine a schedule free to fill with all that is close to your heart. Each new day presents a personal canvas to fill with broad brush strokes of bright possibilities. </p>
                    <p><a class="more" href="/life-onboard/">Read more</a></p>
                </li>
            </ul>
        </div><!-- #refer -->

        <?php get_template_part("partials/why-book") ;?>

        <?php get_template_part("partials/lowest-rates") ;?>

<?php include "footer.php"; ?>