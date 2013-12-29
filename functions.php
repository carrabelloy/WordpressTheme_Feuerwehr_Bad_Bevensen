<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function feuerwehr_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'sidebar_right',
		'before_widget' => '<div id="boxdesign_001" class="boxes">
								<div class="container_box_pieces">     
									<div class="box_top_left"></div>
									<div class="box_top_center"></div>
									<div class="box_top_right"></div>
									<div class="box_middle_left"></div>
									<div class="box_content">',
		'after_widget' => '			</div>
									<div class="box_middle_right"></div>
									<div class="box_bottom_left"></div>
									<div class="box_bottom_center"></div>
									<div class="box_bottom_right"></div>
								</div>
							</div>',
		'before_title' => '<h3 class="rounded">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'feuerwehr_widgets_init' );
?>