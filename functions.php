<?php
/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function scripts_styles() {
	
	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2013-07-18', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.js', array( 'jquery' ), '2013-07-18', true );

	// Loads our main stylesheet.
	wp_enqueue_style( 'twentythirteen-style', get_stylesheet_uri(), array(), '2013-07-18' );

}
add_action( 'wp_enqueue_scripts', 'scripts_styles' );




add_theme_support('post-formats');
add_theme_support('post-thumbnails');
add_theme_support('menus');

add_filter('get_twig', 'add_to_twig');
add_filter('timber_context', 'add_to_context');

add_action('wp_enqueue_scripts', 'load_scripts');

define('THEME_URL', get_template_directory_uri());
function add_to_context($data){
	/* this is where you can add your own data to Timber's context object */
	$data['qux'] = 'I am a value set in your functions.php file';
	$data['theme_options'] = get_option('theme_options');
	$data['menu'] = new TimberMenu();
	return $data;
}

function add_to_twig($twig){
	/* this is where you can add your own fuctions to twig */
	$twig->addExtension(new Twig_Extension_StringLoader());
	$twig->addFilter('myfoo', new Twig_Filter_Function('myfoo'));
	// $twig->addFilter('theme_options', get_option('theme_options'));
	return $twig;
}

function myfoo($text){
  	$text .= ' bar!';
  	return $text;
}

function load_scripts(){
	wp_enqueue_script('jquery');
}



// 
// Theme Options
// 

function build_options_page() { ?>
<div id="theme-options-wrap">
	<div class="icon32" id="icon-tools"> <br /> </div>
	<h2>Theme Settings</h2>
	<p>Update various settings throughout your website.</p>
	<form method="post" action="options.php" enctype="multipart/form-data">
		<?php settings_fields('theme_options'); ?>
		<?php do_settings_sections(__FILE__); ?>
		<p class="submit">
			<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
		</p>
	</form>
</div>
<?php }
add_action('admin_init', 'register_and_build_fields');
function register_and_build_fields() {
	register_setting('theme_options', 'theme_options', 'validate_setting');
	add_settings_section('homepage_settings', 'Homepage Settings', 'section_homepage', __FILE__);
	add_settings_section('footer_settings', 'Footer Settings', 'section_footer', __FILE__);
	function section_homepage() {}
	function section_footer() {}
	add_settings_field('button1text', 'Button 1 Text', 'button1text_setting', __FILE__, 'homepage_settings');
	add_settings_field('button1link', 'Button 1 URL', 'button1link_setting', __FILE__, 'homepage_settings');

	add_settings_field('button2text', 'Button 2 Text', 'button2text_setting', __FILE__, 'homepage_settings');
	add_settings_field('button2link', 'Button 2 URL', 'button2link_setting', __FILE__, 'homepage_settings');

	add_settings_field('button3text', 'Button 3 Text', 'button3text_setting', __FILE__, 'homepage_settings');
	add_settings_field('button3link', 'Button 3 URL', 'button3link_setting', __FILE__, 'homepage_settings');
	add_settings_field('phonenumber', 'Phone Number', 'phonenumber', __FILE__, 'footer_settings');
	add_settings_field('facebookurl', 'Facebook URL', 'facebookurl', __FILE__, 'footer_settings');
	add_settings_field('googleurl', 'Google+ URL', 'googleurl', __FILE__, 'footer_settings');
	add_settings_field('twitterurl', 'Twitter URL', 'twitterurl', __FILE__, 'footer_settings');
}
function validate_setting($theme_options) {
	return $theme_options;
}
function button1text_setting() {
	$options = get_option('theme_options');  echo "<input name='theme_options[button1text_setting]' type='text' value='{$options['button1text_setting']}' />";
}
function button1link_setting() {
	$options = get_option('theme_options');  echo "<input name='theme_options[button1link_setting]' type='text' value='{$options['button1link_setting']}' />";
}
function button2text_setting() {
	$options = get_option('theme_options');  echo "<input name='theme_options[button2text_setting]' type='text' value='{$options['button2text_setting']}' />";
}
function button2link_setting() {
	$options = get_option('theme_options');  echo "<input name='theme_options[button2link_setting]' type='text' value='{$options['button2link_setting']}' />";
}
function button3text_setting() {
	$options = get_option('theme_options');  echo "<input name='theme_options[button3text_setting]' type='text' value='{$options['button3text_setting']}' />";
}
function button3link_setting() {
	$options = get_option('theme_options');  echo "<input name='theme_options[button3link_setting]' type='text' value='{$options['button3link_setting']}' />";
}
function phonenumber() {
	$options = get_option('theme_options');  echo "<input name='theme_options[phonenumber]' type='text' value='{$options['phonenumber']}' />";
}
function facebookurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[facebookurl]' type='text' value='{$options['facebookurl']}' />";
}
function googleurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[googleurl]' type='text' value='{$options['googleurl']}' />";
}
function twitterurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[twitterurl]' type='text' value='{$options['twitterurl']}' />";
}
add_action('admin_menu', 'theme_options_page');
function theme_options_page() {  add_options_page('Theme Settings', 'Theme Settings', 'administrator', __FILE__, 'build_options_page');}