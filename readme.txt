=== WooCommerce Quantity Alert Email ===
Contributors: developer@psycharmor.org
Requires at least: 4.9
Tested up to: 4.9.4
Requires PHP: 7.0
Stable tag: trunk
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Add a custom Quantity Alert Email for WooCommerce Orders

== Description ==
Add a custom WooCommerce email that sends admins an email when 50 or more publications are ordered.

== Installation ==
= Manual installation =

= FTP/SFTP installation =

The ftp/sftp installation method involves downloading our plugin and uploading it to your WordPress installation.
# Login to WordPress
# Click Plugins->Add New
# Click the Upload Plugin button
# Click Browse->Locate the file on your local computer
# Click Install Now 

== Changelog ==
= 0.1 - 3.23.18 =
Dev - Cloned https://github.com/skyverge/woocommerce-expedited-order-email, Modified class-wc-admin-alert-order-email.php Lines 77-78 Changed $quantity = $item_data[\'quantity\']; to $quantity = $order->get_item_count();