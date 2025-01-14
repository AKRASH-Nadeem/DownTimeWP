<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}
delete_option('downtimewp_maintenance_enabled');
