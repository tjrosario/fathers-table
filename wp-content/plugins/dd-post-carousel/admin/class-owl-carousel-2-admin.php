<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.howardehrenberg.com
 * @since      1.0.0
 *
 * @package    Owl_Carousel_2
 * @subpackage Owl_Carousel_2/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 *
 * @package    Owl_Carousel_2
 * @subpackage Owl_Carousel_2/admin
 * @author     Howard Ehrenberg <howard@howardehrenberg.com>
 */
class Owl_Carousel_2_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
        $this->load_metaboxes();
	}

    private function load_metaboxes(){
        $plugin_meta = new Owl_Carousel_2_Meta;
    }

/**
 * Register the stylesheets for the admin area.
 *
 * @since    1.0.0
 */
	public function enqueue_styles() {
				// Only Enqueue Style on Edit Pages
        if ( 'owl-carousel' === get_post_type() ) {
            wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/owl-carousel-2-admin.css', array(), $this->version, 'all' );
            wp_enqueue_style( 'Select2-Style', plugin_dir_url( __FILE__ ) . 'css/select2.min.css', array(), '4.0.5' , 'all' );
        }

	}

/**
 * Register the JavaScript for the admin area.
 *
 * @since    1.0.0
 */

	public function enqueue_scripts() {
        $handle = 'select2.js';
        $list = 'enqueued';
             if (wp_script_is( $handle, $list )) {
               return;
             } else {
               wp_enqueue_script( 'select2.js' , plugin_dir_url( __FILE__ ) . 'js/select2.min.js', array( 'jquery' ), '4.0.5', false );
             }
    }

/**
 * Enquque Admin Script only for Edit Page
 *
 * @since    1.0.1
 */

    public function only_admin_page() {
        if ( 'owl-carousel' === get_post_type() ) {
                wp_enqueue_script(  'dd-owl-admin' );
                    wp_enqueue_script( 'dd-owl-admin', plugin_dir_url( __FILE__ ) . '/js/owl-carousel-2-admin.js', $this->version, false );
            }
    }

    public function enqueue_jqueryui() {
        wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-tooltip' );
    }

    public static function add_carousel_cpt(){
        $labels = array(
            'name'               => _x( 'Carousels', 'post type general name'),
            'singular_name'      => _x( 'Carousel', 'post type singular name'),
            'menu_name'          => _x( 'Carousels', 'admin menu'),
            'name_admin_bar'     => _x( 'Carousel', 'add new on admin bar'),
            'add_new'            => _x( 'Add New', 'Carousel'),
            'add_new_item'       => __( 'Add New Carousel Item'),
            'new_item'           => __( 'New Carousel'),
            'edit_item'          => __( 'Edit Carousel'),
            'view_item'          => __( 'View Carousels'),
            'all_items'          => __( 'All Carousels'),
            'search_items'       => __( 'Search Carousels'),
            'not_found'          => __( 'No Carousel item found.'),
            'not_found_in_trash' => __( 'No Carousel items found in Trash.')
        );

    register_post_type( 'owl-carousel',
		array(
			'labels'                => $labels,
			'_builtin'              => false,
			'hierarchical'          => true,
			'capability_type'       => 'page',
			'menu_icon'             => 'dashicons-images-alt2',
            'public'                => false,
            'publicly_queryable'    => false,
            'show_ui'               => true,
            'exclude_from_search'   => true,
            'show_in_nav_menus'     => false,
            'has_archive'           => false,
            'rewrite'               => false,
			'supports'   => array(
								'title'
                        )
                    )
	           );
        }

    public function owl_carousel_modify_columns($columns) {
	// new columns to be added
	$new_columns = array(
		'shortcode' => 'Shortcode',
		'css-id' => 'CSS ID'
	);
	$columns = array_slice($columns, 0, 2, true) + $new_columns + array_slice($columns, 2, NULL, true);
	return $columns;
    }
    // DEFINE OUTPUT FOR EACH CUSTOM COLUMN DISPLAYED FOR THIS CUSTOM POST TYPE WITHIN THE DASHBOARD
    public function owl_carousel_custom_column_content($column) {
        // get post object for this row
        global $post;

        $dd_owl_css_id = get_post_meta( $post->ID, 'dd_owl_css_id', true );

        // output for the 'Shortcode' column
        if ($column == 'shortcode') {
            $shortcode = "<span class='shortcode owl-carousel-2'><input type='text' onfocus='this.select();' readonly='readonly' value='[dd-owl-carousel id=&quot;{$post->ID}&quot; title=&quot;{$post->post_title}&quot;]' class='large-text code'></span>";
            echo ($shortcode);
        }

        if ($column == 'css-id'){
            echo esc_html("#".$dd_owl_css_id);
        }
    }

}
