<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("../includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('For Sale: 2012 Honda CB125e');
$templateLogic->addCSS("blueimp/css/blueimp-gallery.min.css", true);
$templateLogic->addCSS("prettyphoto/css/prettyPhoto.css", true);
$templateLogic->addJavascriptBottom("prettyphoto/js/jquery.prettyPhoto.js", true);
$templateLogic->addCustomHeadersStart();?>
<style>
    @media only screen and (min-width: 768px) { /*desktop styles*/
        .half {
            width:50%;
            float:left;
        }
        .half-2 {
            padding-left: 1em;
            overflow: hidden;
        }
        .half-box {
            padding-bottom: 2em;
        }
        .desc {
            width: 50%;
            float: left;
        }
    }
</style>
<?php
$templateLogic->addCustomHeadersEnd();
$templateLogic->startBody();
?>
<div class="half-box">
    <div class="half">
        <!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
        <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <div class="links" id="links">
            <a href="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125512.jpg"; ?>" title="Side of Bike">
                <img src="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125512-thumb.jpg"; ?>" alt="Side of Bike">
            </a>
            <a href="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125548.jpg"; ?>" title="Front of Bike">
                <img src="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125548-thumb.jpg"; ?>" alt="Front of Bike">
            </a>
            <a href="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125609.jpg"; ?>" title="Back and other side of Bike">
                <img src="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125609-thumb.jpg"; ?>" alt="Back and other side of Bike">
            </a>
            <a href="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125657.jpg"; ?>" title="Odometer of Bike">
                <img src="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/20160214_125657-thumb.jpg"; ?>" alt="Odometer of Bike">
            </a>
        </div>
        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
    </div>
    <div class="half-2">
        <h3>Asking price: $2000 ($2800 as new)</h3>
        <ul>
            <li>Rego til 29/4/2016</li>
            <li>Electric Start, Runs Great!</li>
            <li>Perfect for learners</li>
            <li>Always covered at home </li>
            <li>Never fallen off</li>
        </ul>
        <h3>Comes with Free:</h3>
        <ul><li><a href="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/trousers.jpg"; ?>" title="Motorbke Trousers" rel="prettyPhoto" target="_blank">Motorbike trousers (Large)</a></li>
            <li>Motorbike Cover</li>
            <li>Motorbike oil (approx 4L Gen4 oil)</li>
            <li>Air Filter & Spark plug</li></ul>
    </div>
</div>
<div class="desc">
    <p> Selling my Motorbike due to moving away. I have owned it for about 1 year. It was serviced about a month ago. 
        I have used for my daily work and errands. It runs great, though doesn't reach highway speeds. 
    Perfect for city use and occasional highway use.</p>

    <p>Mileage according to own use: <br />
        25 - 32.5 Km Per Litre - depending on speed on highways eg 90 - 80km/hr<br />(<a href="<?php echo CONFIG_ROOT_URL . "data/images/honda-CB125e/cb125-e.xlsx"; ?>">excel source</a>)</p>
    <p>Inspection Welcome</p>
    <p>Call Joshua on <a href="tel:0438211522">0438 211 522</a> or email at <a href="mailto:josh@joshuagraham.id.au">josh@joshuagraham.id.au</a></p>
</div>
<?php
$templateLogic->endBody();
$templateLogic->addJavascriptBottom("blueimp/js/blueimp-gallery.min.js", true);
$templateLogic->addCustomBottomStart();?>
<script>
    blueimp.Gallery(
        document.getElementById('links').getElementsByTagName('a'),
        {
            container: '#blueimp-gallery-carousel',
            carousel: true
        }
    );
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
    $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto({ social_tools: false });
    });
</script>
<?php $templateLogic->addCustomBottomEnd();

//html
echo $templateLogic->render("blank");
