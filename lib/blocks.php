<?php




function acf_portfolio_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'portfolio-item',
			'title'				=> __('Portfolio Item'),
			'description'		=> __('A custom block for portfolio items.'),
			'render_template'	=> 'template-parts/blocks/portfolio-item-block.php',
			'category'			=> 'gwg',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'portfolio' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');




?>