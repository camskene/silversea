<?php
/*
Template Name: Specials
*/
get_header(); ?>

    <div class="hammer-head">
        <h1><?php echo date('Y') ;?> Specials</h1>
        <p>Africa/March 2014/Silver Wind</p>
    </div>

    <table class="destination-cruises" summary="Available cruises to <?php //[cruise destination] ;?>">
        <thead>
            <tr>
                <td>Date</td>
                <td>Days</td>
                <td>Voyage ID</td>
                <td>Ship</td>
                <td>Embark/Disembark</td>
                <td>Starting at</td>
                <td><!-- view details --></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mar 24 2014</td>
                <td>12</td><td>2408</td>
                <td>Silver Wind</td>
                <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                <td>$6,150</td>
                <td><a class="btn" href="/destinations/destinations-single/itinerary/">View Details</a></td>
            </tr>
            <tr>
                <td>Mar 24 2014</td>
                <td>12</td><td>2408</td>
                <td>Silver Wind</td>
                <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                <td>$6,150</td>
                <td><a class="btn" href="#">View Details</a></td>
            </tr>
            <tr>
                <td>Mar 24 2014</td>
                <td>12</td><td>2408</td>
                <td>Silver Wind</td>
                <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                <td>$6,150</td>
                <td><a class="btn" href="#">View Details</a></td>
            </tr>
            <tr>
                <td>Mar 24 2014</td>
                <td>12</td><td>2408</td>
                <td>Silver Wind</td>
                <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                <td>$6,150</td>
                <td><a class="btn" href="#">View Details</a></td>
            </tr>
            <tr>
                <td>Mar 24 2014</td>
                <td>12</td><td>2408</td>
                <td>Silver Wind</td>
                <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                <td>$6,150</td>
                <td><a class="btn" href="#">View Details</a></td>
            </tr>
        </tbody>
    </table>

    <?php get_template_part("partials/big-cta"); ?>

<?php get_footer(); ?>