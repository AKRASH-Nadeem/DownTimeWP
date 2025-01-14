# DownTimeWP

**DownTimeWP** is a lightweight and efficient WordPress plugin that allows you to enable a maintenance mode page on your site while you're performing updates or maintenance. It ensures that your visitors see a friendly message while you work behind the scenes.

## Features

- **Enable/Disable Maintenance Mode**: Easily toggle maintenance mode from the WordPress admin panel.
- **Maintenance Page**: A beautifully designed maintenance page to inform visitors of the downtime.
- **Admin Access**: Only administrators will be able to access the website while maintenance mode is enabled.
- **Simple Setup**: Easily configurable with just a few clicks from the settings page.
- **Light Weight**: No impact on website performance—this plugin is lightweight and doesn't affect your site's speed.

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

## Performance

**DownTimeWP** is designed with performance in mind. It is a lightweight plugin and will not negatively impact the performance of your website. It operates quietly in the background, making minimal use of system resources.

## Support

If you encounter any issues or have questions, feel free to open an issue in the [GitHub repository](https://github.com/AKRASH-Nadeem/DownTimeWP) or contact us via email.


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
