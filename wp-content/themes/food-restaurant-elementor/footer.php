<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Food Restaurant Elementor
 */

?>

<footer class="footer-side">
  <?php if( get_theme_mod( 'food_restaurant_elementor_show_footer_widget',true)) : ?>
    <div class="footer-widget">
      <div class="container">
        <?php
          // Check if any footer sidebar is active
          $food_restaurant_elementor_any_sidebar_active = false;
          for ( $food_restaurant_elementor_i = 1; $food_restaurant_elementor_i <= 4; $food_restaurant_elementor_i++ ) {
            if ( is_active_sidebar( "footer{$food_restaurant_elementor_i}-sidebar" ) ) {
              $food_restaurant_elementor_any_sidebar_active = true;
              break;
            }
          }
          // Count active for responsive column classes
          $food_restaurant_elementor_active_sidebars = 0;
          if ( $food_restaurant_elementor_any_sidebar_active ) {
            for ( $food_restaurant_elementor_i = 1; $food_restaurant_elementor_i <= 4; $food_restaurant_elementor_i++ ) {
              if ( is_active_sidebar( "footer{$food_restaurant_elementor_i}-sidebar" ) ) {
                $food_restaurant_elementor_active_sidebars++;
              }
            }
          }
          $food_restaurant_elementor_col_class = $food_restaurant_elementor_active_sidebars > 0 ? 'col-lg-' . (12 / $food_restaurant_elementor_active_sidebars) . ' col-md-6 col-sm-12' : 'col-lg-3 col-md-6 col-sm-12';
        ?>
        <div class="row pt-2 <?php echo esc_attr( get_theme_mod('food_restaurant_elementor_enable_footer_animation', true) ? 'zoomInUp wow' : '' ); ?>">
          <?php for ( $food_restaurant_elementor_i = 1; $food_restaurant_elementor_i <= 4; $food_restaurant_elementor_i++ ) : ?>
            <div class="footer-area <?php echo esc_attr($food_restaurant_elementor_col_class); ?>">
              <?php if ( $food_restaurant_elementor_any_sidebar_active && is_active_sidebar("footer{$food_restaurant_elementor_i}-sidebar") ) : ?>
                <?php dynamic_sidebar("footer{$food_restaurant_elementor_i}-sidebar"); ?>
              <?php elseif ( ! $food_restaurant_elementor_any_sidebar_active ) : ?>
                  <?php if ( $food_restaurant_elementor_i === 1 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer1', 'food-restaurant-elementor' ); ?>" id="Search" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Search', 'food-restaurant-elementor' ); ?></h4>
                      <?php get_search_form(); ?>
                    </aside>

                  <?php elseif ( $food_restaurant_elementor_i === 2 ) : ?>
                      <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer2', 'food-restaurant-elementor' ); ?>" id="archives" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Archives', 'food-restaurant-elementor' ); ?></h4>
                      <ul>
                          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                      </ul>
                      </aside>
                  <?php elseif ( $food_restaurant_elementor_i === 3 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer3', 'food-restaurant-elementor' ); ?>" id="meta" class="sidebar-widget">
                      <h4 class="title"><?php esc_html_e( 'Meta', 'food-restaurant-elementor' ); ?></h4>
                      <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                      </ul>
                    </aside>
                  <?php elseif ( $food_restaurant_elementor_i === 4 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer4', 'food-restaurant-elementor' ); ?>" id="categories" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Categories', 'food-restaurant-elementor' ); ?></h4>
                      <ul>
                          <?php wp_list_categories('title_li=');  ?>
                      </ul>
                    </aside>
                  <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if( get_theme_mod( 'food_restaurant_elementor_show_footer_copyright',true)) : ?>
    <div class="footer-copyright <?php if( get_theme_mod( 'food_restaurant_elementor_sticky_copyright_enable','off') == 'on') { ?>sticky-copyright<?php } else { ?>close-sticky <?php } ?>">
      <div class="container">
        <div class="row pt-2">
          <div class="col-lg-6 col-md-6 align-self-center">
            <p class="mb-0 py-3 text-center text-md-start">
              <?php
                if (!get_theme_mod('food_restaurant_elementor_footer_text') ) { ?>
                <a href="<?php echo esc_url(__('https://www.wpelemento.com/products/free-food-wordpress-theme', 'food-restaurant-elementor' )); ?>" target="_blank">
                    <?php esc_html_e('Food Restaurant Elementor WordPress Theme','food-restaurant-elementor'); ?>
                </a>
              <?php } else {
                  echo esc_html(get_theme_mod('food_restaurant_elementor_footer_text'));
                }
              ?>
              <?php if ( get_theme_mod('food_restaurant_elementor_copyright_enable', true) == true ) : ?>
              <?php
                /* translators: %s: WP Elemento */
                printf( esc_html__( ' By %s', 'food-restaurant-elementor' ), 'WP Elemento' ); ?>
              <?php endif; ?>
            </p>
          </div>
          <div class="col-lg-6 col-md-6 align-self-center text-center text-md-end">
            <?php if ( get_theme_mod('food_restaurant_elementor_copyright_enable', true) == true ) : ?>
              <a href="<?php echo esc_url(__('https://wordpress.org','food-restaurant-elementor') ); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'food-restaurant-elementor' ), 'WordPress' ); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if ( get_theme_mod('food_restaurant_elementor_scroll_enable_setting')) : ?>
    <div class="scroll-up">
      <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
    </div>
  <?php endif; ?>
  <?php if(get_theme_mod('food_restaurant_elementor_progress_bar', true )== true): ?>
    <div id="elemento-progress-bar" class="theme-progress-bar <?php if( get_theme_mod( 'food_restaurant_elementor_progress_bar_position','top') == 'top') { ?> top <?php } else { ?> bottom <?php } ?>"></div>
  <?php endif; ?>
  <?php if(get_theme_mod('food_restaurant_elementor_cursor_outline', false )== true): ?>
			<!-- Custom cursor -->
			<div class="cursor-point-outline"></div>
			<div class="cursor-point"></div>
			<!-- .Custom cursor -->
  <?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>