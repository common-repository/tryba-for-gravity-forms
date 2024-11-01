=== Tryba Add-On ===
Contributors: trybaio, wafsite
Tags: gravity, gravityforms, addon, payment, tryba
Requires at least: 4.5
Tested up to: 6.1.1
Stable tag: 1.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add Tryba payment method for your Gravity Forms

== Description ==

Accept Credit card, Debit card or Tryba account payment.

Send and receive money from anyone with Our Borderless Payment Collection Platform. Payout straight to your bank account.

Signup for an account [here](https://tryba.io/login)

= After installation, please follow the instructions bellow: =

= Setting Up the Tryba Add-On =
1. Go to your WordPress admin Dashboard.
2. On the left side navigation menu, hover over "Forms" and click on "Settings".
3. From this page, click the "Tryba" tab. You will be presented with the Tryba Settings Screen.

= Tryba Account Information =
1. "Prefix":  Enter a prefix for your invoice numbers. If you use your Tryba account for multiple stores ensure this prefix is unique as Tryba will not allow orders with the same invoice number.
2. "Merchant Key": Enter the Merchant Key from your Tryba Account. This field is required.
3. "Public Key": Enter the Public Key from your Tryba Account. This field is required.
4. "Secret Key": Enter the Secret Key from your Tryba Account. This field is required.

= Creating a Feed for the Tryba Add-On =
Before the Tryba Add-On can be used with Gravity Forms, you will first need to create a feed. A feed allows form submission data to be sent to another source. In this instance, payment data being sent to Tryba.
<strong>Required Fields</strong>
To create a feed for Tryba, you must have the following fields on your form:
1. Product Field and/or Total Field
2. Name Field and Email Field

= Create a Feed =
To create a feed to Tryba using the Tryba Add-On for Gravity Forms, do the following from your WordPress Admin Dashboard:
1. Click on "Forms" in the left side menu.
2. Select the form that you want to use with Tryba.
3. Once within your desired form, hover over "Settings" and click on "Tryba".
4. Click "Add New" to create a new feed. You will be presented with the Tryba Feed Settings screen.

= Feed Settings Field =
1. A feed "Name" is requried. It is only used for identification and will not be shown anywhere other than your feed listing.
2. Choose the "Transaction Type". Select "Product and Service" for payment.
3. Configure the "Billing Information". Map each of the various options to the disered form field that will contain that information.
4. "Conditional Logic": If unchecked, every successful form submission will be sent to Tryba. If you wish to set specific conditions for sending form data to Tryba, then check the "Enable Condition" box and fill out your required criteria.
6. Click the "Update Settings" button to save your options.

== Installation ==

= Installation using the Add-On Browser =
1. Log into your WordPress admin dashboard.
2. Hover over "Forms" and click on "Add-Ons".
3. Here you will see the Tryba Add-On. To install, simply click the "Install" button. Once the "Install" button is clicked, Wordpress handle the download and installation of the Tryba Add-On. Be sure to click "Activate Plugin" to active the Add-On.

= Manual Installation =
1. Download the plugin zip file.
2. Login to your WordPress Admin. Click on "Plugins > Add New" from the left menu.
3. Click on the "Upload" option, then click "Choose File" to select the zip file you downloaded. Click "OK" and "Install Now" to complete the installation.
4. Activate the plugin.
For FTP manual installation, [check here](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).


== Changelog ==

= 1.1 =
* Update the plugin to work with new version of Tryba API

= 1.0 =
* Initial version