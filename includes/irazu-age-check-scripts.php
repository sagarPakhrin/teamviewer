<?php
//Add scripts
function tvd_add_scripts()
{
    //Add main css
    wp_enqueue_style('tvd-main-style', plugins_url(). '/irazu-age-check/css/irazu-agc.css');
    
    //Add main scripts
    wp_enqueue_script('tvd-main-script', plugins_url(). '/irazu-age-check/js/irazu-agc.js', null, null, true);
}

add_action('wp_enqueue_scripts', 'tvd_add_scripts');

add_action('wp_footer', 'add_team_viewer_button');

function add_team_viewer_button()
{
    ?>
<div class="irazu-agc__backdrop irazu-agc-hidden">
  <div class="irazu-agc__modal">
    <span class="irazu-agc__muted irazu-agc__uppercase">ALTERSPRÜFUNG</span>
    <h1 class="irazu-agc__heading">
      <?php
      echo get_option('irazu_age_check_settings_title_field'); ?>
    </h1>
    <span class="irazu-agc__muted irazu-agc__sm">
      <?php
      echo get_option('irazu_age_check_settings_subtitle_field'); ?>

    </span>
    <div class="irazu-agc__form">
      <div class="irazu-agc__form_field">
        <input type="checkbox" name="age" id="age">
        <label for="age" class="irazu-agc__label">
          <?php
            echo get_option('irazu_age_check_settings_age_label_field'); ?>
        </label>
      </div>
      <div class="irazu-agc__form_field">
        <input type="checkbox" name="policy" id="policy">
        <label for="policy" class="irazu-agc__label">
          <?php
            echo get_option('irazu_age_check_settings_gdpr_label_field'); ?>
        </label>
      </div>
      <button id="irazu-agc-btn" disabled>
        <?php
            echo get_option('irazu_age_check_settings_submit_btn'); ?>
      </button>
    </div>
  </div>
</div>
<?php
}


/**
 * Create Settings Menu
 */
function irazu_age_check_settings_menu()
{
    add_menu_page(
        __('Irazu Age Check', 'irazu-age-check'),
        __('Irazu Age Check', 'irazu-age-check'),
        'manage_options',
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_template_callback',
        '',
        null
    );
}
add_action('admin_menu', 'irazu_age_check_settings_menu');


/**
 * Settings Template Page
 */
function irazu_age_check_settings_template_callback()
{
    ?>
<div class="wrap">
  <h1><?php echo esc_html(get_admin_page_title()); ?>
  </h1>

  <form action="options.php" method="post">
    <?php

    // security field
    settings_fields('irazu-age-check-settings-page');

    do_settings_sections('irazu-age-check-settings-page');

    // save settings button
    submit_button('Save Settings'); ?>
  </form>
</div>
<?php
}


/**
 * Settings Template
 */
function myplugin_settings_init()
{

    // Setup settings section
    add_settings_section(
        'irazu_age_check_settings_section',
        'Irazu Age Check Settings',
        '',
        'irazu-age-check-settings-page'
    );

    // Register title
    register_setting(
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_title_field',
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => 'Sind Sie 18 Jahre alt, um diese Seite zu betreten?'
        )
    );

    // Add title
    add_settings_field(
        'irazu_age_check_settings_title_field',
        __('Title', 'irazu-age-check-title'),
        'irazu_age_check_settings_title_renderer',
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_section'
    );

    // Register subtitle
    register_setting(
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_subtitle_field',
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => 'Wir verkaufen unsere Produkte nur an Erwachsene.'
        )
    );

    // Add subtitle
    add_settings_field(
        'irazu_age_check_settings_subtitle_field',
        __('Sub Title', 'irazu-age-check-subtitle'),
        'irazu_age_check_settings_subtitle_renderer',
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_section'
    );

    // Register age label
    register_setting(
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_age_label_field',
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => 'Ich stimme zu, über 18 Jahre alt zu sein, um die Seite zu betreten'
        )
    );

    // Add age label
    add_settings_field(
        'irazu_age_check_settings_age_label_field',
        __('Age Label', 'irazu-age-check-age-label'),
        'irazu_age_check_settings_age_label_renderer',
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_section'
    );

    // Register GDPR Label
    register_setting(
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_gdpr_label_field',
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => 'Ich erkläre mich mit der GDPR und der Cookie-Richtlinie einverstanden, um die Website zu betreten.'
        )
    );

    // Add GDPR Label
    add_settings_field(
        'irazu_age_check_settings_gdpr_label_field',
        __('GDPR Label', 'irazu-age-check-gdpr-label'),
        'irazu_age_check_settings_gdpr_label_renderer',
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_section'
    );

    // Register GDPR Label
    register_setting(
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_submit_btn',
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => 'Ja, ich bin'
        )
    );

    // Add GDPR Label
    add_settings_field(
        'irazu_age_check_settings_submit_btn',
        __('Submit Button Text', 'irazu-age-check-gdpr-label'),
        'irazu_age_check_settings_submit_btn_renderer',
        'irazu-age-check-settings-page',
        'irazu_age_check_settings_section'
    );
}
add_action('admin_init', 'myplugin_settings_init');


function irazu_age_check_settings_title_renderer()
{
    $myplugin_input_field = get_option('irazu_age_check_settings_title_field'); ?>
<input type="text" name="irazu_age_check_settings_title_field" class="regular-text"
  value="<?php echo isset($myplugin_input_field) ? esc_attr($myplugin_input_field) : ''; ?>" />
<?php
}

function irazu_age_check_settings_subtitle_renderer()
{
    $myplugin_input_field = get_option('irazu_age_check_settings_subtitle_field'); ?>
<input type="text" name="irazu_age_check_settings_subtitle_field" class="regular-text"
  value="<?php echo isset($myplugin_input_field) ? esc_attr($myplugin_input_field) : ''; ?>" />
<?php
}

function irazu_age_check_settings_age_label_renderer()
{
    $myplugin_input_field = get_option('irazu_age_check_settings_age_label_field'); ?>
<input type="text" name="irazu_age_check_settings_age_label_field" class="regular-text"
  value="<?php echo isset($myplugin_input_field) ? esc_attr($myplugin_input_field) : ''; ?>" />
<?php
}

function irazu_age_check_settings_gdpr_label_renderer()
{
    $myplugin_input_field = get_option('irazu_age_check_settings_gdpr_label_field'); ?>
<input type="text" name="irazu_age_check_settings_gdpr_label_field" class="regular-text"
  value="<?php echo isset($myplugin_input_field) ? esc_attr($myplugin_input_field) : ''; ?>" />
<?php
}

function irazu_age_check_settings_submit_btn_renderer()
{
    $myplugin_input_field = get_option('irazu_age_check_settings_submit_btn'); ?>
<input type="text" name="irazu_age_check_settings_submit_btn" class="regular-text"
  value="<?php echo isset($myplugin_input_field) ? esc_attr($myplugin_input_field) : ''; ?>" />
<?php
}
