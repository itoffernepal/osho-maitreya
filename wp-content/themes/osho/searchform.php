<?php
/**
 * Custom Search Form.
 */

?>

<!-- <form role="search" method="get" class="form-inline search-form my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'osho' ); ?></span>
	<input class="form-control mr-sm-2" type="search" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'osho' ); ?>" value="<?php the_search_query(); ?>" aria-label="Search" name="s">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo esc_attr_x( 'Search', 'submit button', 'osho' ); ?></button>
</form> -->


<!-- <form role="search" method="get" class="form-inline search-form my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="form-group text-end">
<i class="fas fa-search"></i>
	<input type="text" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'osho' ); ?>" value="<?php the_search_query(); ?>" aria-label="Search" name="s">
</div>

</form> -->

<div class="form-group text-end">
<i class="fas fa-search"></i>
	<input type="text" class="field" name="s" id="searchInput" onkeyup="fetchResults()" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'osho' ); ?>" >
</div>