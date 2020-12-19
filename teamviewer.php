<?php
/**
 * Teamviewer Download
 *
 * @package           teamviewer
 * @author            Sagar Lama
 * @copyright         2020 Sagar Lama
 *
 * @wordpress-plugin
 * Plugin Name:       Teamviewer Download
 * Description:       Adds a sticky teamvieser button that opens a model to download teamviewer
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
require_once(plugin_dir_path(__FILE__).'/includes/teamviewer-download-scripts.php');

