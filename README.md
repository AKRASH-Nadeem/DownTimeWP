# DownTimeWP

DownTimeWP is a simple WordPress plugin that allows you to put your website into maintenance mode. When activated, users will see a "Under Maintenance" page, while administrators can still access the website for updates and maintenance tasks. This plugin is ideal for developers or site owners who need to temporarily take their site offline for updates or maintenance.

## Features

- **Enable/Disable Maintenance Mode**: Easily toggle maintenance mode from the WordPress admin panel.
- **Maintenance Page**: A beautifully designed maintenance page to inform visitors of the downtime.
- **Admin Access**: Only administrators will be able to access the website while maintenance mode is enabled.
- **Simple Setup**: Easily configurable with just a few clicks from the settings page.

## Installation

1. Download the plugin ZIP file.
2. Go to your WordPress admin dashboard.
3. Navigate to **Plugins > Add New**.
4. Click **Upload Plugin** and select the downloaded ZIP file.
5. Click **Install Now**, and then **Activate**.

Alternatively, you can manually upload the plugin folder to the `/wp-content/plugins/` directory.

## Usage

Once the plugin is installed and activated:

1. Go to **Settings > DownTimeWP** in your WordPress admin panel.
2. Check the box **Enable Maintenance Mode** to activate maintenance mode.
3. Save changes.

Visitors will now see a maintenance page with the message "We'll Be Back Soon!" while administrators can continue to use the website normally.

## Settings

- **Enable Maintenance Mode**: When enabled, visitors will see the maintenance page, and administrators can still access the website.
  
## Uninstall

To uninstall the plugin:

1. Deactivate the plugin from the **Plugins** page in WordPress.
2. Optionally, you can delete the plugin from the same page.
3. If you want to remove the plugin’s settings, the plugin will automatically clean up after itself by removing the saved settings when uninstalled.

## Frequently Asked Questions (FAQ)

### Can I customize the maintenance page?

Currently, the plugin uses a default maintenance page. You can modify the page's HTML and CSS by editing the `maintenance.php` file inside the plugin directory.

### Can I still access my site while the plugin is active?

Yes, only administrators (those with the `manage_options` capability) can access the site when maintenance mode is enabled. All other visitors will see the maintenance page.

### How can I change the maintenance page content?

The content of the maintenance page is located in the `maintenance.php` file within the plugin directory. You can edit the content and style to suit your needs.

## Contributing

If you'd like to contribute to DownTimeWP, feel free to fork the repository, make changes, and create a pull request. Any help in improving the plugin is greatly appreciated.

## License

DownTimeWP is licensed under the [MIT License](https://opensource.org/licenses/MIT).
