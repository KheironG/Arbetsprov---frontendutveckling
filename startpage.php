<?php
/*
Template Name: Startsida
*/
get_header();
?>
<main>

    <form class="booking-request-form">
        <div>
            <label for="_booking_date"><span class="svg-icon-24-calendar sprite-24"></span>Välj datum</label>
            <input type="date" name="_booking_date" value="">
        </div>
        <div>
            <label for="_rooms"><span class="svg-icon-24-user sprite-24"></span>Antal rum & gäster</label>
            <select class="" name="_rooms">
                <option value="">2 rum, 4 gäster</option>
                <option value="">1 rum, 2 gäster</option>
            </select>
        </div>
        <div>
            <label for="_coupon"><span class="svg-icon-32-offer sprite-24"></span>Jag har en kod</label>
            <input type="text" placeholder="Lös in rabattkod" name="_coupon" value="">
        </div>
        <button class="button-rounded-green" type="button" name="button">SÖK</button>
    </form>


    <div class="bergendal-page-header">
        <h2>VÄLKOMMEN TILL STOCKHOLMS VITA PÄRLA</h2>
        <p>Vid Edsvikens strand, bara 20 minuter från Stockholm och Arlanda,
            finns en avskild plats för konferenser och fest. Här gömmer sig Bergendal.
            En mötesplats som fått växa med naturens nivåskillnader och former,
            vilket på ett naturligt sätt kunnat ge den vita herrgårdsmiljön sällskap av
            modern arkitektur. Som lagren på en pärla bygger vi vår verksamhet på många år
            av erfarenheter. Här kan du fokusera på det som är viktigt för dig. Välkommen.
        </p>
    </div>


    <div class="bergendal-booking-section">
        <div class="button-rectangle-green">
            <span class="svg-icon-32-hotel sprite-32"></span>
            BOKA HOTELL
        </div>
        <div class="button-rectangle-green">
            <span class="svg-icon-32-conf sprite-32"></span>
            BOKA KONFERENS
        </div>
        <div class="button-rectangle-green">
            <span class="svg-icon-32-weekend sprite-32"></span>
            BOKA PAKET & ERBJUDANDEN
        </div>
    </div>


    <div class="transparent-background-container">
        <h3>BERGENDALS CONCEPT</h3>
        <?php include wp_make_link_relative( get_template_directory() . '/elements/bergendal-icon-hr.php' ); ?>
        <div class="item-container">
            <div class="item">
                <div class="item-frame-concept">
                    <img class="bergendal-concept" src="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/pearl-1.jpg' ) ?>" alt="">
                    <h4>EN PÄRLA</h4>
                    <p>Text som beskriver en pärla. Text som beskriver en pärla. Text som beskriver en pärla. Text som beskriver en pärla.</p>
                </div>
            </div>
            <div class="item">
                <div class="item-frame-concept">
                    <img class="bergendal-concept" src="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/pearl-2.jpg' ) ?>" alt="">
                    <h4>TVÅ PÄRLOR</h4>
                    <p>Text som beskriver en pärla. Text som beskriver en pärla. Text som beskriver en pärla. Text som beskriver en pärla.</p>
                </div>
            </div>
            <div class="item">
                <div class="item-frame-concept">
                    <img class="bergendal-concept" src="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/pearl-3.jpg' ) ?>" alt="">
                    <h4>TRE PÄRLOR</h4>
                    <p>Text som beskriver en pärla. Text som beskriver en pärla. Text som beskriver en pärla. Text som beskriver en pärla.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="grey-background-container">
        <div class="padded-content-grid">
            <div class="padded-content-tabs">
                <div class="padded-content-tab">
                    KONFERENS
                    <span></span>
                </div>
                <div class="padded-content-tab padded-content-tab-selected">
                    LOKALER
                    <span></span>
                </div>
                <div class="padded-content-tab padded-content-tab-selected">
                    MÖTESFORMER
                    <span></span>
                </div>
            </div>
            <div class="padded-content-container">
                <div class="padded-content-frame">
                        <img class="padded-content" src="<?php echo get_template_directory_uri() . '/assets/images/weekend-1.jpg' ?>" alt="">
                        <div class="padded-content-info">
                            <span class="svg-icon-64-circle-conf sprite-64"></span>
                            <h3>STOCKHOLMS NÄRMASTE MÖTESPLATS</h3>
                            <p>Slappna av, andas ut och hämta ny energi.
                                Trots närheten till Stockholm och Arlanda
                                härskar lugnet på Bergendal.
                                Omgivningarna är vackra och strandkanten nära.
                                Här ryms både ro och inspiration.
                            </p>
                            <div class="flex-start">
                                <button class="button-rounded-green" type="button">BOKA KONFERENS</button>
                                <a href="#">Läs mer om konferens</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="transparent-background-container">
        <div class="padded-content-grid">
            <div class="padded-content-tabs">
                <div class="padded-content-tab">
                    RESTAURANG <span></span>
                </div>
                <div class="padded-content-tab padded-content-tab-selected">
                    MENYER <span></span>
                </div>
                <div class="padded-content-tab padded-content-tab-selected">
                    DRYCK <span></span>
                </div>
                <div class="padded-content-tab padded-content-tab-selected">
                    TAKE-AWAY <span></span>
                </div>
                <div class="padded-content-tab padded-content-tab-selected">
                    TERASSEN <span></span>
                </div>
            </div>
            <div class="padded-content-container">
                <div class="padded-content-frame">
                    <img class="padded-content" src="<?php echo get_template_directory_uri() . '/assets/images/restaurant-1.jpg' ?>" alt="">
                    <div class="padded-content-info">
                        <span class="svg-icon-64-circle-restaurant sprite-64"></span>
                        <h3>RESTAURANG</h3>
                        <p>Slappna av, andas ut och hämta ny energi.
                            Trots närheten till Stockholm och Arlanda
                            härskar lugnet på Bergendal.
                            Omgivningarna är vackra och strandkanten nära.
                            Här ryms både ro och inspiration.
                        </p>
                        <div class="flex-start">
                            <button class="button-rounded-green" type="button">BOKA BORD</button>
                            <a href="#">Läs mer om restaurangen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grey-background-container">
        <h3>INSTAGRAM</h3>
        <?php include wp_make_link_relative( get_template_directory() . '/elements/bergendal-icon-hr.php' ); ?>
        <div class="item-container">
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
    </div>


    <div class="bergendal-galleri">
        <h1>VÄLKOMMEN TILL STOCKHOLMS VITA PÄRLA</h1>
        <h5>Slappna av, andas ut, och hämta ny energi. Trots närheten to Stockholm och Arlanda härskar lugnet på Bergendal.</h5>
        <button class="button-rounded-green" type="button">SE BILDGALLERI</button>
    </div>


    <?php $calender_item_image = get_template_directory_uri() . '/assets/images/weekend-1.jpg';  ?>
    <div class="transparent-background-container">
        <h3>KALENDER</h3>
        <?php include wp_make_link_relative( get_template_directory() . '/elements/bergendal-icon-hr.php' ); ?>
        <div class="item-container">
            <div class="calender-item">
                <div class="item-frame">
                    <div class="item-frame-image" style="background-image: url('<?php echo $calender_item_image ?>')">
                        <h5>24 maj, 2022</h5>
                        <h4>GRILLAFTON</h4>
                    </div>
                </div>
            </div>
            <div class="calender-item">
                <div class="item-frame">
                    <div class="item-frame-image" style="background-image: url('<?php echo $calender_item_image ?>')">
                        <h5>24 maj, 2022</h5>
                        <h4>GRILLAFTON</h4>
                    </div>
                </div>
            </div>
            <div class="calender-item">
                <div class="item-frame-text">
                    <div>
                        <h5>24 maj, 2022</h5>
                        <h4>GRILLAFTON</h4>
                    </div>
                    <p>Cookie pastry gummi bears marzipan apple pie pastry dragée.
                        Sweet roll bear claw toffee icing apple pie.
                    </p>
                    <button class="button-rounded-green" type="button">LÄS MER</button>
                </div>
            </div>
        </div>
    </div>

</main>
<?php

get_footer(); ?>
