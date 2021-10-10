<?php 

if(class_exists('WP_Customize_Control')){

    class lz_fitness_Switch_Control extends WP_Customize_Control{
        public $type = 'switch';
        public $on_off_label = array();

        public function __construct($manager, $id, $args = array() ){
            $this->on_off_label = $args['on_off_label'];
            parent::__construct( $manager, $id, $args );
        }

        public function render_content(){
            ?>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>
            <?php if($this->description){ ?>
            <span class="description customize-control-description">
                <?php echo wp_kses_post($this->description); ?>
            </span>
            <?php } ?>
            <?php
            $switch_class = ($this->value() == 'on') ? 'switch-on' : '';
            $on_off_label = $this->on_off_label;
            ?>
            <div class="onoffswitch <?php echo $switch_class; ?>">
                <div class="onoffswitch-inner">
                    <div class="onoffswitch-active">
                        <div class="onoffswitch-switch"><?php echo esc_html($on_off_label['on']) ?></div>
                    </div>

                    <div class="onoffswitch-inactive">
                        <div class="onoffswitch-switch"><?php echo esc_html($on_off_label['off']) ?></div>
                    </div>
                </div>  
            </div>
            <input <?php $this->link(); ?> type="hidden" value="<?php echo esc_attr($this->value()); ?>"/>
            <?php
        }
    }

    class lz_fitness_Customize_Heading extends WP_Customize_Control {
        public $type = 'heading';

        public function render_content() {
            if ( !empty( $this->label ) ) : ?>
            <h3 class="total-accordion-section-title"><?php echo esc_html( $this->label ); ?></h3>
        <?php endif;

        if($this->description){ ?>
        <span class="description customize-control-description">
            <?php echo wp_kses_post($this->description); ?>
        </span>
        <?php }
    }
}

/*=== code for free theme ====*/

  class unboxthemes_Customize_Pronew extends WP_Customize_Control {
        public $type = 'label';

        public function render_content() {
            if ( !empty( $this->label ) ) : ?>
            <h3 class="total-accordion-section-title"><?php echo esc_html( $this->label ); ?>
                <a href="https://www.unboxthemes.com/wordpress/glorious-spa-salon-theme/" target="_blank" style="font-size: 14px;color: #fff;background: #29c053;text-decoration: none;padding: 5px 15px;float: right;border-radius: 5px;position: relative;top: -5px;"> Buy Pro </a>
            </h3>
        <?php endif;
    }
}

  class unboxthemes_Customize_Pronewsec extends WP_Customize_Control {
        public $type = 'label';

        public function render_content() {
            if ( !empty( $this->label ) ) : ?>
            <h3 class="total-accordion-section-title"><?php echo esc_html( $this->label ); ?>
                <a href="https://www.unboxthemes.com/wordpress/glorious-spa-salon-theme/" target="_blank" style="font-size: 14px;color: #fff;background: #29c053;text-decoration: none;padding: 5px 15px;float: right;border-radius: 5px;position: relative;top: -5px;"> Go to Pro </a>
            </h3>
        <?php endif;
    }
}

  class unboxthemes_Customize_Pronewdoc extends WP_Customize_Control {
        public $type = 'label';

        public function render_content() {
            if ( !empty( $this->label ) ) : ?>
            <h3 class="total-accordion-section-title"><?php echo esc_html( $this->label ); ?>
                <a href="https://www.unboxthemes.com/wp-content/docs/glorious-spa/documentation/" target="_blank" style="font-size: 14px;color: #fff;background: #29c053;text-decoration: none;padding: 5px 15px;float: right;border-radius: 5px;position: relative;top: -5px;"> Document Pro </a>
            </h3>
        <?php endif;
    }
}

/*=========== coe for free theme ========*/

class lz_fitness_Fontawesome_Icon_Chooser extends WP_Customize_Control{
    public $type = 'icon';

    public function render_content(){
        ?>
        <label>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>

            <?php if($this->description){ ?>
            <span class="description customize-control-description">
                <?php echo wp_kses_post($this->description); ?>
            </span>
            <?php } ?>

            <div class="total-selected-icon">
                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
                <span><i class="fa fa-angle-down"></i></span>
            </div>
            <ul class="total-icon-list clearfix">
                <?php
                $lz_fitness_font_awesome_icon_array = lz_fitness_font_awesome_icon_array();
                foreach ($lz_fitness_font_awesome_icon_array as $lz_fitness_font_awesome_icon) {
                    $icon_class = $this->value() == $lz_fitness_font_awesome_icon ? 'icon-active' : '';
                    echo '<li class='.$icon_class.'><i class="'.$lz_fitness_font_awesome_icon.'"></i></li>';
                }
                ?>
            </ul>
            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
        </label>
        <?php
    }
}

class lz_fitness_Dropdown_Chooser extends WP_Customize_Control{
    public $type = 'dropdown_chooser';

    public function render_content(){
        if ( empty( $this->choices ) )
            return;
        ?>
        <label>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>

            <?php if($this->description){ ?>
            <span class="description customize-control-description">
                <?php echo wp_kses_post($this->description); ?>
            </span>
            <?php } ?>

            <select class="hs-chosen-select" <?php $this->link(); ?>>
                <?php
                foreach ( $this->choices as $value => $label )
                    echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . esc_html( $label ) . '</option>';
                ?>
            </select>
        </label>
        <?php
    }
}

class lz_fitness_Display_Gallery_Control extends WP_Customize_Control{
    public $type = 'gallery';

    public function render_content() {
        ?>
        <label>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>

            <?php if($this->description){ ?>
            <span class="description customize-control-description">
                <?php echo wp_kses_post($this->description); ?>
            </span>
            <?php } ?>

            <div class="gallery-screenshot clearfix">
                <?php
                {
                    $ids = explode( ',', $this->value() );
                    foreach ( $ids as $attachment_id ) {
                        $img = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
                        echo '<div class="screen-thumb"><img src="' . esc_url($img[0]) . '" /></div>';
                    }
                }
                ?>
            </div>

            <input id="edit-gallery" class="button upload_gallery_button" type="button" value="<?php _e('Add/Edit Gallery','total') ?>" />
            <input id="clear-gallery" class="button upload_gallery_button" type="button" value="<?php _e('Clear','total') ?>" />
            <input type="hidden" class="gallery_values" <?php echo $this->link() ?> value="<?php echo esc_attr( $this->value() ); ?>">
        </label>
        <?php
    }
}

class lz_fitness_Customize_Checkbox_Multiple extends WP_Customize_Control {
    public $type = 'checkbox-multiple';
    public function render_content() {
        if ( empty( $this->choices ) )
            return; ?>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php if ( !empty( $this->description ) ) : ?>
            <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
        <?php endif; ?>
        <?php $multi_values = !is_array( $this->value() ) ? explode( ',', $this->value() ) : $this->value(); ?>
        <ul>
            <?php foreach ( $this->choices as $value => $label ) : ?>
                <li>
                    <label>
                        <input type="checkbox" value="<?php echo esc_attr( $value ); ?>" <?php checked( in_array( $value, $multi_values ) ); ?> /> 
                        <?php echo esc_html( $label ); ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( implode( ',', $multi_values ) ); ?>" />
        <?php }
    }

    class lz_fitness_Dropdown_Multiple_Chooser extends WP_Customize_Control{
        public $type = 'dropdown_multiple_chooser';
        public $placeholder = '';
        public function __construct($manager, $id, $args = array()){
            $this->placeholder = $args['placeholder'];
            unset($args['placeholder']);
            parent::__construct( $manager, $id, $args );
        }
        public function render_content(){
            if ( empty( $this->choices ) ){
                return;
            }
            ?>
            <label>
                <span class="customize-control-title">
                    <?php echo esc_html( $this->label ); ?>
                </span>
                <?php if($this->description){ ?>
                <span class="description customize-control-description">
                    <?php echo wp_kses_post($this->description); ?>
                </span>
                <?php } ?>
                <select data-placeholder="<?php echo esc_html( $this->placeholder ); ?>" multiple="multiple" class="hs-chosen-select" <?php $this->link(); ?>>
                    <?php
                    foreach ( $this->choices as $value => $label ){
                        $selected = '';
                        if(in_array($value, $this->value())){
                            $selected = 'selected="selected"';
                        }
                        echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . esc_html($label) . '</option>';
                    }
                    ?>
                </select>
            </label>
            <?php
        }
    }

    class lz_fitness_Category_Dropdown extends WP_Customize_Control{
        private $cats = false;

        public function __construct($manager, $id, $args = array(), $options = array()){
            $this->cats = get_categories($options);

            parent::__construct( $manager, $id, $args );
        }

        public function render_content(){
            if(!empty($this->cats)){
                ?>
                <label>
                    <span class="customize-control-title">
                        <?php echo esc_html( $this->label ); ?>
                    </span>

                    <?php if($this->description){ ?>
                    <span class="description customize-control-description">
                        <?php echo wp_kses_post($this->description); ?>
                    </span>
                    <?php } ?>

                    <select <?php $this->link(); ?>>
                       <?php
                       foreach ( $this->cats as $cat )
                       {
                        printf('<option value="%s" %s>%s</option>', esc_attr($cat->term_id), selected($this->value(), $cat->term_id, false), esc_html($cat->name));
                    }
                    ?>
                </select>
            </label>
            <?php
        }
    }
}

class lz_fitness_Info_Text extends WP_Customize_Control{
    public function render_content(){
        ?>
        <span class="customize-control-title">
            <?php echo esc_html( $this->label ); ?>
        </span>

        <?php if($this->description){ ?>
        <span class="description customize-control-description">
            <?php echo wp_kses_post($this->description); ?>
        </span>
        <?php }
    }

}

class lz_fitness_Font_Chooser extends WP_Customize_Control{
    public $type = 'dropdown_chooser';

    public function render_content(){
        if ( empty( $this->choices ) )
            return;
        $font = getFonts(false);
        ?>
        <label>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>

            <?php if($this->description){ ?>
            <span class="description customize-control-description">
                <?php echo wp_kses_post($this->description); ?>
            </span>
            <?php } ?>

            <select class="" <?php $this->link(); ?>>
                <?php
                foreach ( $this->choices as $value => $label )
                    echo '<option style="font-family:'.$font[$value].';" value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . esc_html( $label ) . '</option>';
                ?>
            </select>
        </label>
        <?php
    }
}
}

/**
 * Manage the bacbround for the home page sections
 * 
 **/function backgroundManager($wp_customize, $id, $section, $color='#fff', $img='', $imgOrColor = 'img'){
    // Manage the background SECTION
    
    $wp_customize->add_setting(
        'rg_'.$id.'_title_heading1',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new lz_fitness_Customize_Heading(
            $wp_customize,
            'rg_'.$id.'_title_heading1',
            array(
                'settings'      => 'rg_'.$id.'_title_heading1',
                'section'       => $section,
                'label'         => __( 'Background Manager', 'Resume Design Pro' ),
            )
        )
    );
    $def = ($imgOrColor == 'img')?'off':'on';
    $wp_customize->add_setting(
        'unbox_'.$id.'_section_background',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text',
            'default'=> $def,
        )
    );
    
    $wp_customize->add_control(
        new lz_fitness_Switch_Control(
            $wp_customize,
            'unbox_'.$id.'_section_background',
            array(
                'settings'      => 'unbox_'.$id.'_section_background',
                'section'       => $section,
                'label'         => __( '', 'Resume Design Pro' ),
                'on_off_label'  => array(
                    'on' => __( 'Image', 'Resume Design Pro' ),
                    'off' => __( 'Color', 'Resume Design Pro' )
                ),
            )
        )
    );
    
    //colour
    $wp_customize->add_setting(
        'rg_'.$id.'_bg_color',
        array(
            'default'           => $color,
            'sanitize_callback' => 'sanitize_hex_color',
            'priority' => 1
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'rg_'.$id.'_bg_color',
            array(
                'settings'      => 'rg_'.$id.'_bg_color',
                'section'       => $section,
                'label'         => __( 'Using Color ', 'Resume Design Pro' ),
            )
        )
    );
    // bg image
    $img = empty($img)?get_template_directory_uri().'/images/default.png':$img;
    $wp_customize->add_setting(
        'rg_'.$id.'_bg_image',
        array(
            'default'           => $img,
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rg_'.$id.'_bg_image',
            array(
                'section' => $section,
                'settings' => 'rg_'.$id.'_bg_image',
                'label' => __( 'Using Image ', 'Resume Design Pro' ),
                'description' => __('Recommended Image Size: 1900X600px', 'Resume Design Pro')
            )
        )
    );
}

/**
 * Add the color option for the sections palate 
 * @param object $wpCustomizer an object of a WP customizer object
 * @param string $id an id for an element and the name that will be used at front end
 * @param string $section name of the section where the option will list
 * @param string $label The label for the color option default is "Choose Color"
 * @param string $color a default colour code for the color option, Default colour code is "#fff"
 * @return void
 * @author Resume Design Pro 
 * @since Since V1.0
 *
 **/
function addColorPalatOption($wpCustomizer, $id, $section, $label="Choose Color", $color = '#ffffff'){
    $wpCustomizer->add_setting(
        $id,
        array(
            'default'           => $color,
            'sanitize_callback' => 'sanitize_hex_color',
            'priority' => 1
        )
    );
    $wpCustomizer->add_control(
        new WP_Customize_Color_Control(
            $wpCustomizer,
            $id,
            array(
                'settings'      => $id,
                'section'       => $section,
                'label'         => __( $label, 'Resume Design Pro' ),
            )
        )
    );
}


/**
 * Add the Radio buttons with graphical html for the sections palate 
 * @param object $wpCustomizer an object of a WP customizer object
 * @param string $id an id for an element and the name that will be used at front end
 * @param string $section name of the section where the option will list
 * @param string $label The label for the color option default is "Label"
 * @return void
 * @author Resume Design Pro 
 * @since Since V1.0
 *
 **/
function lzAddCustomRadio($wpCustomizer, $id, $section, $label="Label"){
    $wpCustomizer->add_setting($id,array('sanitize_callback' => 'lz_fitness_sanitize_text','default' => 'off'));
    $wpCustomizer->add_control(
        new lz_fitness_Switch_Control($wpCustomizer,$id,
            array(
                'settings'=> $id,
                'section'=> $section,
                'label'=> __( $label, 'Resume Design Pro' ),
                'on_off_label' => array(
                    'on' => __( 'Yes', 'Resume Design Pro' ),
                    'off' => __( 'No', 'Resume Design Pro' )
                )
            )
        )
    );
}

/**
 * Add the label for the sections palate 
 * @param object $wpCustomizer an object of a WP customizer object
 * @param string $id an id for an element and the name that will be used at front end
 * @param string $section name of the section where the option will list
 * @param string $label The label for the color option default is "Label"
 * @return void
 * @author Resume Design Pro 
 * @since Since V1.0
 *
 **/
function lzAddElement($wpCustomizer, $id, $section, $type = 'text', $label="Label", $callback ='lz_fitness_sanitize_text', $default='Add description here'){
    addSetting($wpCustomizer, $id, $callback, $default);
    $wpCustomizer->add_control(
        $id,
        array(
            'settings'      => $id,
            'section'       => $section,
            'type'          => $type,
            'label'         => __( $label, 'Resume Design Pro' )
        )
    );
}

/**
 * Adding the setting for an option
 * @param object $wpCustomizer an object of a WP customizer object
 * @param string $id an id for an element and the name that will be used at front end
 * @param string $callback callback function default is "lz_fitness_sanitize_text"
 * @param string $default Set the default value for the control default is 'Add description here'
 * @return void
 * @author Resume Design Pro 
 * @since Since V1.0
 *
 **/
function addSetting($wpCustomizer, $id, $callback ='lz_fitness_sanitize_text', $default='Add description here'){
    $params = array('sanitize_callback' => $callback);
    if($default != ""){
        $params['default']= __( $default, 'Resume Design Pro' );
    }
    $wpCustomizer->add_setting($id, $params);
}

/**
 * Add the label for the sections palate 
 * @param object $wpCustomizer an object of a WP customizer object
 * @param string $id an id for an element and the name that will be used at front end
 * @param string $section name of the section where the option will list
 * @param string $label The label for the color option default is "Label"
 * @return void
 * @author Resume Design Pro 
 * @since Since V1.0
 *
 **/
function lzCustomLable($wpCustomizer, $id, $section, $label="Label"){
    // echo 'section: '.$section;
    addSetting($wpCustomizer, $id.'1', 'lz_fitness_sanitize_text', $default='');
    $wpCustomizer->add_control(
        new lz_fitness_Customize_Heading(
            $wpCustomizer,
            $id.'1',
            array(
                'settings' => $id.'1',
                'section' => $section,
                'label' => __( $label, 'Resume Design Pro' ),
            )
        )
    );
}

/**
 * Add the image element for the sections palate 
 * @param object $wpCustomizer an object of a WP customizer object
 * @param string $id an id for an element and the name that will be used at front end
 * @param string $section name of the section where the option will list
 * @param string $label The label for the color option default is "Label"
 * @return void
 * @author Resume Design Pro 
 * @since Since V1.0
 *
 **/
function lzAddImageElement($wpCustomizer, $id, $section, $label="Recommended Image Size: 400X300px"){
    addSetting($wpCustomizer, $id, 'esc_url_raw', $default='');
    $wpCustomizer->add_control(
        new WP_Customize_Image_Control(
            $wpCustomizer,
            $id,
            array(
                'settings' => $id,
                'section' => $section,
                'description' => __($label, 'Resume Design Pro')
            )
        )
    );
}
