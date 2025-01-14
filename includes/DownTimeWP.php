<?php
if (!defined('ABSPATH')) {
    exit;
}
class DownTimeWP{
    private $option = "downtimewp_maintenance_enabled";
    private $settings_page_slug = 'DownTimeWP';
    private $optin_group_name = 'maintenance_mode_group';
    private $settings_section_id = 'downtimewp';

    public function __construct()
    {
        add_action("admin_init",array($this,"dtwp_settings_init"));
        add_action("admin_menu",array($this,"dtwp_settings_page"));
        add_action("template_redirect",array($this,"dtwp_check_maintenance"));
        add_filter('plugin_action_links_' . DOWNTIMEWP_PLUGIN_NAME, array($this,'add_settings_link') );
        // echo DOWNTIMEWP_PLUGIN_NAME;
    }
    public function add_settings_link($links) {
        $settings_link = '<a href="' . admin_url( 'options-general.php?page='.$this->settings_page_slug ) . '">Settings</a>';
        array_unshift($links, $settings_link);
        return $links;
    }
    public function dtwp_settings_init(){
        $this->dtwp_register_settings();
        $this->dtwp_settings_sections();
        $this->dtwp_settings_fields();
    }
    public function dtwp_register_settings(){
        register_setting($this->optin_group_name,$this->option, array($this, 'dtwp_validate_boolean'));
    }
    public function dtwp_settings_sections(){
        add_settings_section(
            $this->settings_section_id, // Section ID
            'Maintenance Settings', // Section Title
            array($this,'dtwp_settings_callback'), // Section callback
            $this->settings_page_slug // Settings Page Slug
        );
    }
    public function dtwp_settings_fields(){
        add_settings_field(
            'DownTimeWP-enable',
            'Enable Maintenances mode',
            array($this,"dtwp_settings_fields_callback"),
            $this->settings_page_slug, // Settings Page Slug
            $this->settings_section_id // Section id of the settings
        );
    }
    public function dtwp_settings_page(){
        add_options_page(
            'DownTimeWP Settings', // Page Title
            'DownTimeWP',          // Menu Title
            'manage_options',            // Capability
            $this->settings_page_slug,          // Slug for the settings page
            array($this,'maintenance_mode_settings_page_callback') // Callback function to display the settings page
        );
    }
    public function dtwp_settings_callback(){
        echo esc_html("This is DownTimeWP plugin Settings for Enabling Maintenance mode");
    }
    public function dtwp_validate_boolean($input) {
        // Ensure the value is either 1 (true) or 0 (false)
        return $input === '1' ? '1' : '0';
    }    
    public function dtwp_settings_fields_callback() {
        $option = get_option($this->option,'0');
        echo '<input type="checkbox" name="'.$this->option.'" value="1" ' . checked('1', $option, false) . ' />';
    }
    
    
    public function maintenance_mode_settings_page_callback(){
        ?>
        <div class="wrap">
            <h1>Maintenance Mode Settings</h1>
            <form method="post" action="options.php">
                <?php
                do_settings_sections($this->settings_page_slug); // Output settings sections
                settings_fields($this->optin_group_name); // Security nonce
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
    public function downtimewp_deactivate(){
        delete_option($this->option);
    }
    public function dtwp_check_maintenance(){
        if(get_option($this->option,'0')){
            if(current_user_can("manage_options")){
                return;
            }
            if (file_exists(DOWNTIMEWP_PLUGIN_DIR . 'pages/maintenance.php')) {
                include_once DOWNTIMEWP_PLUGIN_DIR . 'pages/maintenance.php';
                exit;
            } else {
                wp_die('UnderMaintenance ', 'DownTimeWP');
            }
        }
    }

}