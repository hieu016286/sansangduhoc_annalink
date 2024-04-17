<?php
/*
Plugin Name: Category Description Editor
Plugin URI: http://www.laptoptips.ca/projects/category-description-editor/
Description: Adds visual editor (TinyMCE) for the description on the Edit Category and Edit Tag pages.
Version: 1.1
Author: Andrew Ozz
Author URI: http://www.laptoptips.ca/

Released under the GPL version 2, http://www.gnu.org/copyleft/gpl.html

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

add_action('init', 'catde_init');
function catde_init() {
	if ( is_admin() || defined('DOING_AJAX') ) {
		if ( current_user_can('manage_categories') )
			remove_filter('pre_term_description', 'wp_filter_kses');
	}
}

add_action('load-categories.php', 'catde_admin_init');
add_action('load-edit-tags.php', 'catde_admin_init');
function catde_admin_init() {
    if ( user_can_richedit() && isset($_GET['action']) && 'edit' === $_GET['action'] && ( !empty($_GET['cat_ID']) || ( !empty($_GET['taxonomy']) && !empty($_GET['tag_ID']) ) ) ) {
		add_filter( 'tiny_mce_before_init', 'catde_mceinit');
		add_action('admin_footer', 'wp_tiny_mce');
		add_action('admin_head', 'catde_head');
	}
}

function catde_mceinit($init) {
	
	$init['mode'] = 'textareas';
	$init['editor_selector'] = '';
	$init['elements'] = 'category_description,description';
	$init['plugins'] = 'safari,inlinepopups,autosave,spellchecker,paste,wordpress,media,fullscreen';
	$init['theme_advanced_buttons1'] .= ',image';
	$init['theme_advanced_buttons2'] .= ',code';
	$init['onpageload'] = '';
	$init['save_callback'] = '';

	return $init;
}

function catde_head() { ?>
	<style type="text/css">#category_description_tbl,#description_tbl{border:1px solid #dfdfdf;}.wp_themeSkin .mceStatusbar{border-color:#dfdfdf;}</style>
<?php
}
