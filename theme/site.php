<?php
/*
Template Name: Site-Template
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- START header -->
    <div id="header">
        <div id="fchheaderleft">
            <a href="<?php echo get_site_url() ?>">
                <div id="fchlogotype">Feminist<br/>Culture<br/>House</div>
            </a>
        </div>
        <div id="fchheaderright" role="banner">
            <a href="http://www.feministculturehouse.org"><img src="https://www.feministculturehouse.org/FCH-banner.png"
                                                               alt="FCH banner"></a>
        </div>
        <div id="fchheaderrightmobile" role="banner">
            <a href="http://www.feministculturehouse.org"><img src="https://www.feministculturehouse.org/FCH.png"
                                                               alt="FCH banner"></a>
        </div>
    </div><!-- END header -->

    <div id="mobilenav">
        <!-- mobile menu -->

        <div id="menuToggle">

            <!--
            A fake / hidden checkbox is used as click reciever,
            so you can use the :checked selector on it.
            -->
            <input type="checkbox" aria-label="mobilesitecheckbox"/>

            <!--    Some spans to act as a hamburger.    -->
            <span></span>
            <span></span>
            <span></span>

            <!-- 	Too bad the menu has to be inside of the button
            but hey, it's pure CSS magic.    -->
            <?php
            wp_nav_menu(array(
                'menu' => 'main_menu',
                'container' => null,
                'menu_id' => 'menu'
            ));
            ?>
        </div>
        <!-- end mobile menu -->
    </div>

    <!-- WRAP container to move footer to the end // -->
    <div id="wrap">

        <!-- START homepagecontainer -->
        <div id="homepagecontainer">
            <!-- START nav left column -->
            <div id="leftcol" role="conatinsnavigation" aria-label="contains main navigation">

                <?php
                wp_nav_menu(array('menu' => 'main_menu', 'container_id' => 'navitems'));
                ?>

                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup" role="form">
                    <form action="https://gmail.us20.list-manage.com/subscribe/post?u=ab3af42f3c21ed02a7a8e4321&amp;id=4ac5facd20"
                          method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                          class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                                <!--	<label for="mce-EMAIL">Email</label> -->

                                <div id="joinour">Join our mailing list!</div>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL2"
                                       aria-label="Enter your email address here">
                                <input type="submit" value="&#10004;" name="Join" id="mc-embedded-subscribe2"
                                       class="button" aria-label="Click to join our mailing list">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input aria-label="formvalue" type="text" name="b_ab3af42f3c21ed02a7a8e4321_4ac5facd20"
                                       tabindex="-1" value=""></div>
                        </div>
                    </form>
                </div>

                <!--End mc_embed_signup-->


                <br class="clear: both;"/>
            </div>
            <!-- END nav left column -->


            <!-- content right column -->

            <div id="rightcol" role="main" aria-label="page content">
                <div class="pagetitle"><?php the_title(); ?></div>
                <?php the_content(); ?>
                <br class="clear: both;"/>
            </div>

            <!-- END right column // -->

            <br class="clear: both;"/>
        </div>
        <!-- END homepagecontainer -->

        <!-- Pagefooter Beginning // -->
        <div id="footerwrap">
            <div id="pagefooter" role="footer" aria-label="footer">
                <div id="footercol1">
                    Feminist Culture House ry<br/>
                    c/o POIMU, Kuortaneenkatu 13, 5.krs<br/>
                    00520 Helsinki, Finland<br/><br/>
                    info@feministculturehouse.org

                    <!-- LISA START: social media buttons, kone logo -->
                    <br/> <br/>
                    <a href="https://www.facebook.com/Feminist-Culture-House-516421435429266/" target="_blank"><img
                                src="http://feministculturehouse.org/wp-content/uploads/2020/05/facebook-logo.png"
                                alt="facebook icon" style="width: 25px"></a>
                    &nbsp;
                    &nbsp;
                    <a href="https://www.instagram.com/feministculturehouse/?igshid=2hizn9xhwql8&fbclid=IwAR3njLmQfmgxC92bEe237umwgFvcHi4IlEpGyUgOzPAt2RdlMlOKzCOANm8"
                       target="_blank"><img
                                src="http://feministculturehouse.org/wp-content/uploads/2020/05/instagram-icon-white.png"
                                alt="instagram icon" style="width: 25px"></a>
                    &nbsp;
                    &nbsp;
                    <img src="http://feministculturehouse.org/wp-content/uploads/2020/05/kone-logo-white.png"
                         alt="Kone Foundation Logo White" style="width: 120px">
                    <!-- LISA END -->


                </div>
                <div id="footercol2">
                    <a href="http://www.feministculturehouse.org"><img
                                src="http://www.feministculturehouse.org/FCH-footer.png" alt="FCH footer"></a>
                </div>
                <div id="footercol3">
                    <a href="http://feministculturehouse.org/contact/">

                        <!-- replace with donate page once its set up again
                    <a href="http://feministculturehouse.org/donate/"> //-->
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="106.121px" height="99.485px" viewBox="0 0 106.121 99.485"
                             enable-background="new 0 0 106.121 99.485"
                             xml:space="preserve">
<font horiz-adv-x="1000">
    <!-- Copyright 2014 The Yatra Project Authors. -->
    <!-- Copyright: Copyright 2019 Adobe System Incorporated. All rights reserved. -->
    <font-face font-family="YatraOne-Regular" units-per-em="1000" underline-position="-125" underline-thickness="50"/>
    <missing-glyph horiz-adv-x="756" d="M241,625l0,-549l275,0l0,549M160,0l0,701l436,0l0,-701z"/>
    <glyph unicode="!" horiz-adv-x="270"
           d="M142,-22C108,-6 83,18 66,51C67,62 77,75 96,92C115,109 130,118 141,121C175,106 200,82 216,50C205,21 180,-3 142,-22M215,682l-32,-507l-89,19l-5,516z"/>
    <glyph unicode="D" horiz-adv-x="766"
           d="M210,1l-1,0l-139,29l0,636l1,-1l0,1C100,675 159,681 248,682C337,683 395,677 422,663C492,614 584,525 697,395C704,387 709,372 713,349C717,326 717,299 713,267C709,235 701,203 689,170C677,137 656,106 626,75C596,44 559,21 516,4C476,-10 428,-17 371,-16C314,-16 261,-10 210,1M512,506C489,525 464,540 439,551C413,562 385,568 356,570C326,571 302,571 283,570C264,569 239,566 208,562l2,-501C256,55 300,59 342,72C384,85 420,104 450,130C480,156 505,186 526,221C547,255 560,289 567,324C573,359 572,392 563,425C554,458 537,485 512,506z"/>
    <glyph unicode="a" horiz-adv-x="556"
           d="M106,351l-54,91C99,454 151,465 208,476C265,487 300,492 315,491C330,490 359,469 403,426C447,383 477,350 492,327C497,319 500,292 500,247C500,201 499,149 498,90C496,31 495,-8 496,-29l-124,29l1,51C319,-3 275,-30 241,-30C209,-29 168,1 119,61C70,121 45,164 45,190C45,211 59,230 87,247C115,264 149,278 190,288C230,297 266,305 297,310C328,315 355,319 377,321l1,27C379,380 362,397 327,400C295,402 228,388 125,357l-1,0l-1,-1l-1,0l-1,0l-1,-1l-1,0l-1,0l-1,-1l-1,0l-1,0l-1,-1l-1,0l-1,0l-1,0l-1,-1l-1,0l-1,0l-1,-1M156,100C162,91 173,85 190,82C207,79 232,84 266,96C299,107 336,128 375,157l1,88C200,194 127,145 156,100z"/>
    <glyph unicode="e" horiz-adv-x="553"
           d="M165,199l227,155C344,385 303,396 270,388C236,380 210,359 192,326C174,292 165,250 165,199M188,103C207,80 228,66 251,61C274,56 299,59 325,71C350,82 372,94 389,106C406,117 427,133 450,152l20,-20C483,118 495,104 508,90l20,-20C470,27 421,-1 381,-15C341,-30 301,-30 262,-15C205,7 151,46 100,101C70,134 53,174 48,220C43,265 49,308 66,347C82,386 107,420 142,448C176,475 213,489 254,489C281,489 320,472 373,438C425,403 468,370 503,337C502,335 476,315 424,276C371,237 319,198 266,160z"/>
    <glyph unicode="n" horiz-adv-x="597"
           d="M193,450l0,-41C252,464 304,491 349,488C370,487 408,460 462,409C515,357 544,322 547,303C550,286 551,175 551,-29l-124,28C431,228 429,349 422,362C410,385 390,392 363,383C335,374 306,357 277,334C247,311 219,283 193,252l0,-281l-130,28l0,479z"/>
    <glyph unicode="o" horiz-adv-x="590"
           d="M381,377C337,407 291,402 244,363C205,330 178,285 165,230C150,167 162,119 199,87C204,83 209,79 214,76C241,61 268,58 297,66C325,74 350,92 371,119C392,146 408,176 420,207C432,238 435,269 429,302C423,334 407,359 381,377M481,369C500,352 515,331 526,307C537,282 543,257 545,232C546,207 544,181 538,155C531,129 522,105 509,82C496,59 481,39 462,22C443,4 422,-9 399,-18C376,-27 351,-31 324,-29C296,-27 268,-18 239,-3C202,17 165,42 129,73C100,98 79,126 65,157C51,188 45,218 46,247C47,276 52,306 63,335C73,364 88,390 108,411C127,432 149,451 172,466C195,481 221,488 248,489C275,490 301,484 326,472C391,438 442,404 481,369z"/>
    <glyph unicode="t" horiz-adv-x="423"
           d="M40,408l-30,70l82,0l0,108l123,-28l0,-80l122,0l30,-70l-152,0l0,-127C215,274 215,263 215,248C215,230 215,212 215,194C214,176 215,159 218,143C220,127 223,112 226,99C229,86 235,75 243,67C251,59 261,54 272,51C283,48 298,50 316,57C333,63 353,73 376,88l27,-31C364,22 332,-3 306,-17C286,-28 259,-26 224,-11C189,4 158,25 132,52C105,79 92,102 92,122l0,286z"/>
</font>

                            <g>
                                <path fill="#FE8C2D" d="M47.878,1.091c7.299,0,22.213-2.219,40.298,15.23c18.087,17.449,16.5,38.078,10.473,51.402
		c-6.029,13.328-22.53,26.02-41.568,27.289c-19.036,1.27-34.584-5.711-43.787-17.135C4.708,67.22,3.878,62.226,2.459,50.802
		c-0.431-3.463-2.599-19.461,8.399-31.307C21.862,7.65,25.882,1.091,47.878,1.091z"/>
                                <g>

                                    <text transform="matrix(0.9878 -0.1556 0.1556 0.9878 10.1914 61.6299)"
                                          fill="#FFFFFF" font-family="'YatraOne-Regular'" font-size="22.8378">Donate!
                                    </text>
                                </g>
                            </g>
</svg>

                    </a>


                </div><!-- footer col 3 -->


                <br class="clear: both;"/>
            </div>
        </div>
        <!-- END pagefooter -->

    </div>
    <!-- END wrap // -->


<?php endwhile; else : ?>
<?php endif; ?>

<script>
  $('.child').hide(); //Hide children by default

  $('#navitems').children().click(function () {
    $(this).children('.child').slideToggle('slow');
  }).children('.child').click(function (event) {
    event.stopPropagation();
  });
</script>

<script>
  $('.child').hide(); //Hide children by default

  $('#menu').children().click(function () {
    $(this).children('.child').slideToggle('slow');
  }).children('.child').click(function (event) {
    event.stopPropagation();
  });
</script>


<?php get_footer(); ?>
