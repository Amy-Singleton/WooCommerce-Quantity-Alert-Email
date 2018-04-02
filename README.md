WooCommerce Quantity Alert Email 
=================================

Contributors: developer@psycharmor.org
Requires at least: 4.9
Tested up to: 4.9.4
Requires PHP: 7.0
Stable tag: trunk
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Add a custom Quantity Alert Email for WooCommerce Orders

## Description 
Add a custom WooCommerce email that sends admins an email when 50 or more publications are ordered.

## Installation

### Manual installation

The manual installation method involves downloading our plugin and uploading it to your WordPress installation via the Plugins Admin Page
Login to WordPress
Click Plugins->Add New
Click the Upload Plugin button
Click Browse->Locate the file on your local computer
Click Install Now
Locate the plugin you just uploaded
Click->Activate

### FTP/SFTP installation

The ftp/sftp installation method involves downloading our plugin and uploading it to your WordPress installation with .
Login to your FTP/SFTP Software in your local development environment
Locate the file you want to upload
Drag the plugin into the wp-content/plugins/ directory
Reset file permissions if necessary
Login to WordPress
Go to Plugins
Locate the plugin you just uploaded
Click->Activate

## Changelog ==

= 1.0.1 - 4.02.18=
Fix - Added a check to verify that WooCommerce is active to woocommerce-admin-alert-order-email.php
FIX - Updated Plugin Version
Dev - Added readme.txt
= 0.1 - 3.23.18 =
Dev - Cloned https://github.com/skyverge/woocommerce-expedited-order-email, Modified class-wc-admin-alert-order-email.php Lines 77-78 Changed $quantity = $item_data[\'quantity\']; to $quantity = $order->get_item_count();