<?php
/**
 * @package Working_Papers
 */
?>

<header id="top">
	<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
	<div class="site-search">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <label>
                <input type="search" class="search-field" placeholder="<?php echo __( 'Search...', 'working-papers' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo __( 'Search for:', 'working-papers' ) ?>" />
            </label>
        </form>
    </div>
    

    <div class="menu-container">
        <label for="show-menu" class="show-menu">Menu</label>
        <input type="checkbox" id="show-menu" role="button">

        <?php wp_nav_menu( array(
            'theme_location'    =>  'primary',
            'container'         =>  '',
            'container_class'   =>  '',
            'items_wrap'        =>  '<ul id="menu" class="menu-top %2$s">%3$s</ul>',
            'menu_class'        =>  '',
            'depth'             =>  '1'
            )
        ); ?> 

    </div>

</header>