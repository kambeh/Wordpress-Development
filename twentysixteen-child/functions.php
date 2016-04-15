<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen_Childtheme
 * @since Twenty Sixteen 1.0
 * 
 *  Theme Name:   Twenty Sixteen_Childtheme
 *  Theme URI:    http://example.com/twenty-sixteen_child/
 *  Description:  Twenty Sixteen Child Theme
 *  Author:       John Doe
 *  Author URI:   http://example.com
 *  Template:     twentysixteen
 *  Version:      1.0.0
 *  License:      GNU General Public License v2 or later
 *  License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 *  Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 *  Text Domain:  twenty-sixteen-child
 * 
 */


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_filter( 'twentysixteen_custom_header_args', 'wpb_new_header_size');
//add your parameters in - https://codex.wordpress.org/Custom_Headers
function wpb_new_header_size($array) {
		$array = array (
		'default-text-color'     => $default_text_color,
		'width'                  => 3840,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'twentysixteen_header_style',
	);
		return $array;
}
?>
