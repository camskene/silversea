<?php
/*
Template Name: About
*/
get_header(); ?>

    <div class="hammer-head">
        <h1>Silversea Luxury Cruises</h1>
        <p>Silversea is a luxury cruise line that offers unparalleled service and superlative comfort aboard intimate, all-inclusive ships cruising worldwide.</p>
    </div>

    <div id="pics">
        <ul>
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/egypt-360x140.png" alt=""></figure>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/luxury-ship-360x140.png" alt=""></figure>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/couple-360x140.png" alt=""></figure>
            </li>
        </ul>
    </div><!-- #pics -->

    <?php get_template_part("partials/big-cta"); ?>

    <div class="about img-right">
        <div class="column">
            <h2>Distinctions</h2>
            <ul>
                <li>Intimate, elegant ships ­ extraordinary space per guest ratio</li>
                <li>Superlative service ­ nearly one crew member for every guest</li>
                <li>All ocean-view suites, over 85% with private verandas</li>
                <li>Butler service for all ships, all guests</li>
                <li>Open-seating in The Restaurant ­ no assigned time, no assigned table</li>
                <li>Alternative dining options ­ multiple venues</li>
                <li>Gourmet cuisine inspired by Relais & Châteaux</li>
                <li>Sophisticated entertainment from live music to production shows</li>
                <li>Enrichment lecturers, acclaimed chefs and destination consultants</li>
            </ul>
        </div>

        <figure class="align-right"><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-about-1.jpg" alt=""></figure>
    </div>

    <div class="about img-left">
        <figure class="align-left"><img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-about-2.jpg" alt=""></figure>
        <div class="column">
            <h2>All-Inclusive Value</h2>
            <ul>
                <li>Fares include onboard gratuities</li>
                <li>Complimentary beverages served throughout the ship ­</li>
                <li>In-room bar and refrigerator stocked with your preferred beverage selections</li>
                <li>Complimentary 24-hour room service and in-suite dining served course-by-course from The Restaurant</li>
                <li>Complimentary shoreside events on select voyages</li>
                <li>Complimentary guided excursions ashore on Silversea Expeditions aboard Silver Explorer</li>
                <li>Complimentary transportation into town in most ports of call</li>
            </ul>
        </div>
    </div>

    <?php get_template_part("partials/why-book") ;?>


    <?php get_template_part("partials/lowest-rates"); ?>

<?php get_footer(); ?>