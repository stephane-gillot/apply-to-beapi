<?php
/*
Template Name: custom-home
*/
?>
<?php get_header(); ?>
<body>

<div id="preloader"></div>

<!-- sidebar -->
<div id="mySidenav" class="sidenav">
    <div class="side-cont">
        <div class="container">
              <div class="row">
              
                  <!-- Name Block -->
                <div class="col-md-6 col-sm-12">
                    <div class="demo-2-side-name">
                        <h1>James Vincent</h1>
                        <div class="side-title" >Front-end & Wordpress developer</div>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    
                    <div class="side-title">"Success is the result of perfection, hard work, learning from failure, loyalty, and persistence. "</div>
                </div>
                
                <!-- Skills -->
                <div class="col-md-5 col-md-offset-1 col-sm-12">
                    
                    <div class="skill-title">My Skills</div>

                    <div class="skillbar clearfix " data-percent="80%">
                        <div class="skillbar-title"><div class="sk-title">HTML5 - <div class="skill-time">4 years experience</div></div></div>
                        <div class="skillbar-bar" style="background: #010101;"></div>
                        <div class="skill-bar-percent">80%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title"><div class="sk-title">CSS3 - <div class="skill-time">5 years experience</div></div></div>
                        <div class="skillbar-bar" style="background: #010101;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="70%">
                        <div class="skillbar-title"><div class="sk-title">jQuery - <div class="skill-time">3 years experience</div></div></div>
                        <div class="skillbar-bar" style="background: #010101;"></div>
                        <div class="skill-bar-percent">70%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="78%">
                        <div class="skillbar-title"><div class="sk-title">PHP - <div class="skill-time">5 years experience</div></div></div>
                        <div class="skillbar-bar" style="background: #010101;"></div>
                        <div class="skill-bar-percent">78%</div>
                    </div> <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="92%">
                        <div class="skillbar-title"><div class="sk-title">Wordpress - <div class="skill-time">6 years experience</div></div></div>
                        <div class="skillbar-bar" style="background: #010101;"></div>
                        <div class="skill-bar-percent">92%</div>
                    </div> <!-- End Skill Bar -->
                </div>
            </div>
          </div>
        
        <!-- Advantages -->
          <div class="my-adv container demo-2">
            <div class="row">

                <div class="my-adv-border">
                    <div class="my-adv-block col-md-3 col-sm-6">
                        <i class="fa fa-flag-o"></i>
                        <div class="adv-title">Creative</div>
                        <div class="adv-text">Lorem ipsum dolor sit amet, conasectetur adipisicing elit. Iste ratione molestias magni.</div>
                    </div>
                    <div class="my-adv-block col-md-3 col-sm-6">
                        <i class="fa fa-heart-o"></i>
                        <div class="adv-title">Punctual</div>
                        <div class="adv-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</div>
                    </div>
                    <div class="my-adv-block col-md-3 col-sm-6">
                        <i class="fa fa-envelope-o"></i>
                        <div class="adv-title">Responsible</div>
                        <div class="adv-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</div>
                    </div>
                    <div class="my-adv-block col-md-3 col-sm-6">
                        <i class="fa fa-commenting-o"></i>
                        <div class="adv-title">Friendly</div>
                        <div class="adv-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Side Footer -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="footer-wrapper">
                        
                        <div class="footer-info col-sm-4 col-xs-12">
                            <ul>
                                <li><a href="tel:+9145632973" class="white-link"><i class="fa fa-phone-square"></i>+9145632973</a></li>
                                <li><a href="mailto:work@jamesvincent.me" class="white-link"><i class="fa fa-google"></i>work@jamesvincent.me</a></li>
                            </ul>
                        </div>

                        <div class="footer-name col-sm-4 col-xs-12">
                            <span>James Vincent</span>
                            <div class="footer-address">
                                James Vincent, D12/3 <br>
                                Kharkov, Ukraine
                            </div>
                        </div>

                        <div class="footer-socials col-sm-4 col-xs-12">
                            <ul class="socials"> 
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>  
</div>

<!-- main -->
<div id="main">

<?php

global $wpdb;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '6',
    'orderby' => 'date',
    'order' => 'DESC',
);

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php get_template_part('content-blog'); ?>
        
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

    
</div>

<?php get_footer(); ?>
</body>
</html>