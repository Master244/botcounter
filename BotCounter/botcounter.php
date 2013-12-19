<?php
/**
 * Plugin Name: BotCounter 
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: 0.1
 * Author: Mitchellangelo
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */

//load root 
define("BC_ROOT", dirname(__FILE__));

include_once BC_ROOT . '/functions/mainfunctions.php';

// Check if user agent is a bot
BC_bot_check();