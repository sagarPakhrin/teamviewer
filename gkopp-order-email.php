<?php
/**
 * Gkopp Order Email
 *
 * @package           Gkopp Order Email
 * @author            Sagar Lama
 * @copyright         2022 Sagar Lama
 *
 * @wordpress-plugin
 * Plugin Name:       Gkopp Order Email
 * Description:       Plugin to receive ajax request and send email to admin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sagar Lama
 * Author URI:        https://sagarlama.com
 */
if(!defined('ABSPATH'))
{
  exit;
}

//Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/gkopp-order-email-scripts.php');

