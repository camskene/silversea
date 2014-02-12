<?php
/*
Template Name: Destinations Single
*/
get_header(); ?>

    <div class="hammer-head">
        <h1>Mediterranean Cruises</h1>
        <p>An Insider's Look at the World's Favourite Playground</p>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/fpo/fpo-destinations-single-940x350.jpg" alt="">
        </figure>
    </div>

    <div id="destinations-single">
        <div class="description">
            <p>Like returning to one's own hometown, Silversea's experience and expertise allow you to explore Southern Europe as an insider. Aboard Silversea's luxury Mediterranean cruises, you can browse the world's best museums at your leisure during private after-hours openings, learn the secrets of traditional dishes in the kitchens of chefs who hold recipes handed down through generations, and savour amazing wines surrounded by their birthplace vineyards at tastings hosted by renowned vintners.</p>

            <p>Join Silversea on a journey to the playgrounds of the world's most legendary sea. Wind through the exquisite isles of the Aegean and explore the antiquity of the Peloponnese. Embark on a Eastern Mediterranean cruise and sail to the Greek Isles, the Black Sea and Dalmatian coast jewels in Croatia and Montenegro. Or a Western Mediterranean cruise that discovers jet-set hideaways from the sun-soaked Iberian shores to golden Riviera beaches. The Mediterranean is an irresistible Silversea destination that keeps calling you back for more. </p>
        </div>


        <div class="table-info">
            <div>
                <h2>Mediterranean Cruises</h2>
                <p>Inquire About our Discounted Fares</p>
            </div>
            <ul>
                <li><span class="icon-venetian-society"></span>Venetian Society Members Save 5%</li>
                <li><span class="icon-bridge-sailing"></span>Bridge Saispanng</li>
                <li><span class="icon-special-offers"></span>Special Offers</li>
                <li><span class="icon-gentleman-hosts"></span>Gentleman Hosts</li>
                <li><span class="icon-lecole-des-chefs"></span>L’École des Chefs</li>
            </ul>
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
                    <td>Enrichment</td>
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
                    <td>
                        <span class="icon-venetian-society" title="Venetian Society"></span>
                        <span class="icon-gentleman-hosts" title="Gentleman Hosts"></span>
                    </td>
                    <td><a class="btn" href="/destinations/destinations-single/itinerary/">View Details</a></td>
                </tr>
                <tr>
                    <td>Mar 24 2014</td>
                    <td>12</td><td>2408</td>
                    <td>Silver Wind</td>
                    <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                    <td>$6,150</td>
                    <td>
                        <span class="icon-venetian-society" title="Venetian Society"></span>
                        <span class="icon-gentleman-hosts" title="Gentleman Hosts"></span>
                    </td>
                    <td><a class="btn" href="/destinations/destinations-single/itinerary/">View Details</a></td>
                </tr>
                <tr>
                    <td>Mar 24 2014</td>
                    <td>12</td><td>2408</td>
                    <td>Silver Wind</td>
                    <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                    <td>$6,150</td>
                    <td>
                        <span class="icon-bridge-sailing" title="Venetian Society"></span>
                        <span class="icon-gentleman-hosts" title="Gentleman Hosts"></span>
                    </td>
                    <td><a class="btn" href="/destinations/destinations-single/itinerary/">View Details</a></td>
                </tr>
                <tr>
                    <td>Mar 24 2014</td>
                    <td>12</td><td>2408</td>
                    <td>Silver Wind</td>
                    <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                    <td>$6,150</td>
                    <td>
                        <span class="icon-venetian-society" title="Venetian Society"></span>
                        <span class="icon-gentleman-hosts" title="Gentleman Hosts"></span>
                    </td>
                    <td><a class="btn" href="/destinations/destinations-single/itinerary/">View Details</a></td>
                </tr>
                <tr>
                    <td>Mar 24 2014</td>
                    <td>12</td><td>2408</td>
                    <td>Silver Wind</td>
                    <td>Las Palmas, Canary Islands, Spain to Barcelona, Spain </td>
                    <td>$6,150</td>
                    <td>
                        <span class="icon-venetian-society" title="Venetian Society"></span>
                        <span class="icon-gentleman-hosts" title="Gentleman Hosts"></span>
                    </td>
                    <td><a class="btn" href="/destinations/destinations-single/itinerary/">View Details</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php get_template_part("partials/big-cta"); ?>

<?php get_footer(); ?>